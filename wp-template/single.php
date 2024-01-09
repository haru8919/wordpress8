<?php get_header(); ?>
<main>
    <div class="news-article">
        <div class="news-article__inner">
            <div class="news-article__common">
                <div class="common__nav">
                    <?php if (function_exists('bcn_display')) { ?>
                    <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                        <?php bcn_display(); ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="news-article__wrapper">
                <div class="news-article__area">
                    <div class="news-article__top">
                        <div class="news-article__box">
                            <?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    $limit = 2; // 表示するカテゴリーの数を指定
                                    $count = 0;
                                    foreach ($categories as $category) {
                                        if ($count < $limit) {
                                            echo '<span class="detail__category">' . esc_html($category->name) . '</span>';
                                            $count++;
                                        } else {
                                            break;  // 制限に達したらループを抜ける
                                        }
                                    }
                                }
                            ?>
                        </div>
                        <h1 class="news-article__action"><?php the_title(); ?></h1>
                        <time class="news-article__date"
                            datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y年n月j日'); ?>
                        </time>
                    </div>
                    <div class="news-article__imgs">
                        <?php the_post_thumbnail( 'full', array( 'class' => "news-article__img" ) ); ?>
                    </div>
                    <div class="detail__content">
                        <?php the_content(); ?>
                    </div>
                    <div class="news-article__item">
                        <div class="news-article__btn">
                            <?php
                            // 前の記事へのリンク
                            $prev_link = get_previous_post_link('%link', '前の記事へ');
                            if (!empty($prev_link)) {
                            echo str_replace('<a href=', '<a class="news-article__back" href=', $prev_link);
                            }
                            ?>
                        </div>
                        <div class="news-article__btn2">
                            <?php
                            // 次の記事へのリンク
                            $next_link = get_next_post_link('%link', '次の記事へ');
                            if (!empty($prev_link)) {
                            echo str_replace('<a href=', '<a class="news-article__forward" href=', $next_link);
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="news-sidebar">
                    <div class="news-sidebar__inner">
                        <div class="news-sidebar__top">
                            <h2 class="news-sidebar__title">最新記事</h2>
                        </div>
                        <?php
                            $args = array(
                                "post_type" => "post",
                                "posts_per_page" => 3,
                                "orderby" => "date",
                                "order" => "DESC",
                            );
                            $the_query = new WP_Query($args);
                            ?>
                        <?php if ($the_query->have_posts()) : ?>
                        <div class="news-sidebar__wrap">
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <div class="news-sidebar__article">
                                <div class="news-sidebar__imgs">
                                    <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail( 'full', array( 'class' => "news-sidebar__img" ) ); ?>
                                    <?php else : ?>
                                    <img class="detail__thumbnail"
                                        src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>"
                                        alt="NoImage画像" />
                                    <?php endif; ?>
                                </div>
                                <div class="news-sidebar__box">
                                    <h3 href="<?php the_permalink(); ?>" class="news-sidebar__text">
                                        <?php the_title(); ?></h3>
                                    <time class="news-sidebar__date"
                                        datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y年n月j日'); ?></time>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                        <?php else : ?>
                        <p>記事が投稿されていません</p>
                        <?php endif; ?>
                        <div class="news-widget">
                            <div class="news-widget__top news-sidebar__top">
                                <h2 class="news-widget__title news-sidebar__title">アーカイブ</h2>
                            </div>
                            <div class="news-widget__body">
                                <ul class="detail__list">
                                    <?php wp_get_archives('type=monthly&limit=3'); ?>
                                </ul>
                            </div>
                        </div>
                        <div class="news-widget">
                            <div class="news-widget__top news-sidebar__top">
                                <h2 class="news-widget__title news-sidebar__title">カテゴリー</h2>
                            </div>
                            <div class="news-widget__body">
                                <ul class="news-widget__box news-widget__box--category">
                                    <ul class="detail__list">
                                        <?php
                                        $categories = get_categories();
                                        $count = 0; // 表示するカテゴリーの数を制限するためのカウンター
                                        foreach ($categories as $category) {
                                            if ($count < 3) { // 最初の3つのカテゴリーのみ表示
                                                echo '<li class="detail__item"><a class="detail__link" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                                                $count++;
                                            }
                                        }
                                        ?>
                                    </ul>

                                </ul>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>

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