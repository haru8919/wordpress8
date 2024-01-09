<?php get_header(); ?>
<main>
    <!-- works mv -->
    <section class="mv-common">
        <div class="common__box">
            <div class="common__inner">
                <div class="common__imgs">
                    <picture>
                        <source class="m-woks__img m-about__img" srcset="/images/m-works.pc.img.jpg"
                            media="(min-width:1025px)">
                        <img src="/images/m-works.sp.img.jpg" alt="外でタブレットとスマホを持った笑顔の女性">
                    </picture>
                    <div class="common-style common-style--news-style ">
                        <div class="common-style__box">
                            <?php if (function_exists('bcn_display')) { ?>
                            <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                                <?php bcn_display(); ?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="common__content common__content--news">
        <div class="common__nav">
            <a href="#" class="common__link">works</a>
            <a href="#" class="common__link">TOP</a>
        </div>
    </div>
    <!-- works -->
    <section id="#" class="m-works works">
        <div class="m-works__inner inner">
            <div class="m-works__contents">
                <div class="m-works__body news__body">
                    <ul class="m-works__list news__list">
                        <?php
                    $current_category_id = get_queried_object_id();
                    $categories = get_categories(array(
                        'orderby' => 'name',
                        'order'   => 'ASC',
                        // 表示するカテゴリーの数を指定
                        'number'  => 3
                    ));

                    // 通常投稿一覧ページへのURL
                    $home_class = (is_home() || is_front_page()) ? 'is-active' : '';
                    $home_link = sprintf(
                        //通常投稿一覧ページへのaタグに付与するクラスを指定できる
                        '<a class="news__list-text %s" href="%s" alt="%s">全て</a>',
                        $home_class,
                        // 通常投稿一覧ページのスラッグを指定
                        esc_url(home_url('/news')),
                        esc_attr(__('View all posts', 'textdomain'))
                    );
                    echo sprintf(esc_html__('%s', 'textdomain'), $home_link);
                                        // カテゴリーのリンク
                    if ($categories) {
                        foreach ($categories as $category) {
                            // カレントクラスに付与するクラスを指定できる
                            $category_class = ($current_category_id === $category->term_id) ? 'is-active' : '';
                            $category_link = sprintf(
                                // 各カテゴリーに付与するクラスを指定できる
                                '<a class="news__list-text %s" href="%s?cat_id=%s" alt="%s">%s</a>',
                                $category_class,
                                esc_url(get_category_link($category->term_id)),
                                $category->term_id, // カテゴリーIDをリンクに追加
                                esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)),
                                esc_html($category->name)
                            );
                            echo sprintf(esc_html__('%s', 'textdomain'), $category_link);
                        }
                    }
                    ?>
                    </ul>
                </div>
                <div class="m-works__container">
                    <?php
                        $args = array(
                            "post_type" => "works",
                            "posts_per_page" => 10
                        );
                        $the_query = new WP_Query($args);
                        ?>
                    <?php if ($the_query->have_posts()) : ?>
                    <div class="m-works__wrap">
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail( 'full', array( 'class' => 'm-works__imgs works__img' ) ); ?>
                        <?php else : ?>
                        <img class="news__img" src="<?php echo esc_url(get_theme_file_uri( "/images/noimage.jpg" )); ?>"
                            alt="NoImage画像" />
                        <?php endif ; ?>
                        <div class="m-works__body works__body">
                            <div class="m-works__tag-box works__tag-box">
                                <?php
                                $taxonomy_terms = get_the_terms($post->ID, 'genre');
                                if (!empty($taxonomy_terms)) {
                                    $limit = 2;
                                    $count = 0;
                                    foreach ($taxonomy_terms as $taxonomy_term) {
                                        if ($count < $limit) {
                                            echo '<span class="m-works__tag works__tag">' . esc_html($taxonomy_term->name) . '</span>';
                                            $count++;
                                        } else {
                                            break;
                                        }
                                    }
                                }
                                ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" id="#"
                                class="m-works__sub-title works__sub-title"><?php the_title(); ?></a>
                            <time class="m-works__date works__date"
                                datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                        </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <?php else : ?>
                    <p>記事が投稿されていません</p>
                    <?php endif; ?>
                </div>
            </div>
            <?php
                $args = array(
                    'mid_size' => 5,
                    'prev_text' => '<img src="' . esc_url(get_theme_file_uri("/images/icon-arrow-prev.svg")) . '" alt="" class="pagination__arrow">',
                    'next_text' => '<img src="' . esc_url(get_theme_file_uri("/images/icon-arrow-next.svg")) . '" alt="" class="pagination__arrow">',
                );
                the_posts_pagination($args);
                ?>
        </div>
    </section>
    <!-- contact -->
    <section class="u-contact">
        <div class="u-contact-left">
            <img class="u-contact__img" src="<?php echo esc_url(get_theme_file_uri("/images/contact-pc1.jpg")); ?>"
                alt="画像の説明">
        </div>
        <div class="u-contact-right">
            <div class="u-contact-text">
                輸入車の購入や修理のご相談など<br>
                お気軽にお問い合わせください。
            </div>
            <div class="u-contact-btn">
                <div class="u-contact-icon">
                    <svg width="22" height="17.6" viewBox="0 0 22 17.6">
                        <path
                            d="M22.8,6H5.2A2.2,2.2,0,0,0,3.011,8.2L3,21.4a2.206,2.206,0,0,0,2.2,2.2H22.8A2.206,2.206,0,0,0,25,21.4V8.2A2.206,2.206,0,0,0,22.8,6Zm0,15.4H5.2v-11L14,15.9l8.8-5.5ZM14,13.7,5.2,8.2H22.8Z"
                            transform="translate(-3 -6)" />
                    </svg>
                    <a href="contact.html" class="u-contact-btn__text"><span>お問い合わせ</span></a>
                </div>
            </div>
            <div class="u-contact-phone-btn">
                <i class="fa-solid fa-phone"></i>
                <a href="#" class="u-contact-phone-btn__nan">0000-000-000</a>
            </div>
            <div class="u-contact-date">
                受付時間: 火曜日を除く 10:00〜18:00
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>