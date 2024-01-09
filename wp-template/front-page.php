<?php get_header(); ?>
<main>
    <!-- メインビュー -->
    <div class="fv">
        <div class="fv__inner">
            <div class="fv__slider slider1">
                <div class=" swiper-wrapper1 swiper-wrapper">
                    <div class=" swiper-slide1 swiper-slide">
                        <picture>
                            <source srcset="<?php echo esc_url(get_theme_file_uri("/images/fv-pc1.jpg")); ?>"
                                media="(min-width:1025px)">
                            <img src="<?php echo esc_url(get_theme_file_uri("/images/fv-sp1.jpg")); ?>"
                                alt="外でタブレットとスマホを持った笑顔の女性">
                        </picture>
                    </div>
                    <div class=" swiper-slide2 swiper-slide">
                        <picture>
                            <source srcset="<?php echo esc_url(get_theme_file_uri("/images/fv-pc2.jpg")); ?>"
                                media="(min-width:1025px)">
                            <img src="<?php echo esc_url(get_theme_file_uri("/images/fv-sp2.jpg")); ?>"
                                alt="パソコンを持った男性とスーツの男性が話している様子">
                        </picture>
                    </div>
                    <div class=" swiper-slide2 swiper-slide">
                        <picture>
                            <source srcset="<?php echo esc_url(get_theme_file_uri("/images/fv-pc3.jpg")); ?>"
                                media="(min-width:1025px)">
                            <img src="<?php echo esc_url(get_theme_file_uri("/images/fv-sp3.jpg")); ?>"
                                alt="スマホを持った女性とタブレットを持った男性が空を見上げている様子">
                        </picture>
                    </div>
                    <div class=" swiper-slide2 swiper-slide ">
                        <picture>
                            <source srcset="<?php echo esc_url(get_theme_file_uri("/images/fv-pc4.jpg")); ?>"
                                media="(min-width:820px)">
                            <img src="<?php echo esc_url(get_theme_file_uri("/images/fv-sp4.jpg")); ?>"
                                alt="スマホを持った女性とタブレットを持った男性が空を見上げている様子">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="fv__title-wrap">
                <p class="fv__title">
                    あなたの<br>日常が目覚める
                </p>
            </div>
        </div>
    </div>

    <div class="flowing">
        <p class="flowing__text">Good life for Good Car&emsp;Good life for Good Car&emsp;Good life for Good Car</p>
    </div>
    <!-- about -->
    <section id="" class="about">
        <div class="about__inner inner">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/about.pc.jpg")); ?>" alt="複数の男性の前で立っている笑顔の女性"
                class="about__img">
            <div class="about__body">
                <div class="about__title">
                    <h2 class="about-title__main">About us</h2>
                </div>
                <p class="about__text">
                    弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>
                    これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。 </p>
                <div class="read-more__wrap">
                    <a href="#" class="read-more">READ MORE</a>
                </div>
            </div>
        </div>
    </section>
    <!-- service -->
    <div id="service" class="service">
        <div class="service__inner inner">
            <div class="service__title section-title section-title--center">
                <h2 class="section-title section-title__right">Service</h2>
            </div>
            <ul class="service__cards">
                <li class="service__card">
                    <div class="card__img-wrap">
                        <img src="<?php echo esc_url(get_theme_file_uri("/images/service-pc1.png")); ?>"
                            alt="男性社員と女性社員が座って悩んでいる様子" class="card__img">
                        <div class="card__text-overlay">
                            <h3 class="card__title">Service01</h3>
                            <p class="card__subtitle">購入サポート</p>
                        </div>
                    </div>
                    <div class="card__body">
                        <p class="card__text">国を超え、メーカーを超え、高級の本質をお届けする特別な一台との出会いをサポートします。</p>
                        <div class="card__btn">
                            <a href="#" class="read-more read-more__btn">READ MORE</a>
                        </div>
                    </div>
                </li>
                <li class="service__card">
                    <div class="card__img-wrap">
                        <img src="<?php echo esc_url(get_theme_file_uri("/images/service-pc2.png")); ?>"
                            alt="女性がタブレットでセミナーの情報を見ている様子" class="card__img">
                        <div class="card__text-overlay">
                            <h3 class="card__title">Service02</h3>
                            <p class="card__subtitle">修理・整備</p>
                        </div>
                    </div>
                    <div class="card__body">
                        <p class="card__text">高度な輸入車修理技術と数多くの修理実績、熟練の技術・設備であなたの愛車を完全に直します。</p>
                        <div class="card__btn">
                            <a class="read-more read-more__btn">READ MORE</a>
                        </div>
                    </div>
                </li>
                <li class="service__card">
                    <div class="card__img-wrap">
                        <img src="<?php echo esc_url(get_theme_file_uri("/images/service-pc3.png")); ?>"
                            alt="腕組みをした女性が転職に希望を持った笑顔で立っている様子" class="card__img">
                        <div class="card__text-overlay">
                            <h3 class="card__title">Service03</h3>
                            <p class="card__subtitle">車検点検</p>
                        </div>
                    </div>
                    <div class="card__body">
                        <p class="card__text">輸入車の取り扱いが県内トップクラス。専門の整備工場へ任せたいなら弊社へご相談ください。</p>
                        <div class="card__btn">
                            <a href="#" class="read-more read-more__btn">READ MORE</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- works -->
    <section id="works" class="works">
        <div class="works__inner inner">
            <div class="works__title section-title section-title--left">
                <h2 class="section-title section-title--left">Works</h2>
            </div>
            <?php
                $args = array(
                'post_type' => 'works',
                'posts_per_page' => -1
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
                ?>
            <div class="works__wrap works__wrap--first">
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', array('class' => 'works__img')); ?>
                <?php else : ?>
                <img src="<?php echo esc_url(get_theme_file_uri('/images/noimage.jpg')); ?>" alt="NoImage画像"
                    class="works__img">
                <?php endif; ?>
                <div class="works__body">
                    <div class="works__tag-box">
                        <?php
                            $taxonomy_terms = get_the_terms(get_the_ID(), 'genre');
                            if (!empty($taxonomy_terms)) {
                            foreach ($taxonomy_terms as $taxonomy_term) {
                                echo '<p class="works__tag">' . esc_html($taxonomy_term->name) . '</p>';
                            }
                            }
                            ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="works__sub-title"><?php the_title(); ?></a>
                    <p class="works__text md-none">
                    </p>
                    <time class="works__date"
                        datetime="<?php echo get_the_date('Y.m.d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                </div>
            </div>
            <?php
            endwhile;
            wp_reset_postdata();
            else :
            ?>
            <p>記事が投稿されていません</p>
            <?php endif; ?>
        </div>
    </section>
    <!-- NEWs -->
    <section class="news">
        <div class="news__inner inner">
            <div class="news__contents">
                <div class="news__body">
                    <h2 class="news__title section-title section-title--left">News</h2>
                    <ul class="news__list">
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
                <div class="news__outer">
                    <div class="news__wrapper">
                        <div class="news__content">
                            <div class="news__info news__info--border-top">
                                <time class="news__date" datetime="2020-09-02">2022.09.02</time>
                                <span class="news__category">トピックス</span>
                                <span class="news__category">イベント・キャンペーン</span>
                            </div>
                            <div class="news__block">
                                <span class="news__text">2022年10月8日・9日・10日の3日間、試乗車フェアを開催します。</span>
                            </div>
                        </div>
                    </div>
                    <div class="news__wrapper">
                        <div class="news__content">
                            <div class="news__info ">
                                <time class="news__date" datetime="2022-08-23">2022.08.23</time>
                                <span class="news__category">トピックス</span>
                                <span class="news__category">入庫者情報</span>
                            </div>
                            <div class="news__block">
                                <span class="news__text">【入庫車のご案内】メルセデスベンツG 350が入庫しました</span>
                            </div>
                        </div>
                    </div>
                    <div class="news__wrapper">
                        <div class="news__content">
                            <div class="news__info">
                                <time class="news__date" datetime="2022-08-07">2022.08.07</time>
                                <span class="news__category">トピックス</span>
                            </div>
                            <div class="news__block">
                                <span class="news__text">お盆休みのご案内</span>
                            </div>
                        </div>
                    </div>
                    <div class="news__wrapper">
                        <div class="news__content">
                            <div class="news__info">
                                <time class="news__date" datetime="2022-08-03">2022.08.03</time>
                                <span class="news__category">トピックス</span>
                                <span class="news__category">入庫者情報</span>
                            </div>
                            <div class="news__block">
                                <span class="news__text">【入庫車のご案内】JEEPラングラー アンリミテッド サハラが入庫しました</span>
                            </div>
                        </div>
                    </div>
                    <div class="news__wrapper">
                        <div class="news__content">
                            <div class="news__info">
                                <time class="news__date" datetime="2022-07-26">2022.07.26</time>
                                <span class="news__category">トピックス</span>
                            </div>
                            <div class="news__block">
                                <span class="news__text">半導体不足は輸入車・輸入中古車にどう影響するか</span>
                            </div>
                        </div>
                    </div>
                    <div class="news__wrapper">
                        <div class="news__content">
                            <div class="news__info">
                                <time class="news__date" datetime="2020-09-02">2022.09.02</time>
                                <span class="news__category">トピックス</span>
                                <span class="news__category">イベント・キャンペーン</span>
                            </div>
                            <div class="news__block">
                                <span class="news__text">2022年10月8日・9日・10日の3日間、試乗車フェアを開催します。</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news__btn">
                <a href="#" class="read-more">READ&nbsp;MORE</a>
            </div>
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