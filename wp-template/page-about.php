<?php get_header(); ?>
<main>
    <!-- mv -->
    <section class="mv-common">
        <div class="common__box">
            <div class="common__inner">
                <div class="common__imgs">
                    <picture>
                        <source class="m-about__img m-common__img"
                            srcset="<?php echo esc_url(get_theme_file_uri("/images/m-about-mv.jpg")); ?>"
                            media="(min-width:1025px)">
                        <img src="<?php echo esc_url(get_theme_file_uri("/images/m-about-mv.sp.jpg")); ?>"
                            alt="外でタブレットとスマホを持った笑顔の女性">
                    </picture>
                    <div class="m-about__content common-style">
                        <div class="common-style__box">
                            <h2 class="common-style__title">About</h2>
                            <p class="common-style__text">私たちについて</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="common__content">
        <div class="common__nav">
            <?php if (function_exists('bcn_display')) { ?>
            <div class="about__breadcrumb">
                <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                    <?php bcn_display(); ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="common__erea">
        <div class="common-foot__inner inner">
            <div class="common__wrapper">
                <div class="common__outer">
                    <div class="common__label">
                        <a class="common__part">経営理念<span></span></a>
                        <a class="common__part">アクセス<span></span></a>
                        <a class="common__part">会社概要<span></span></a>
                    </div>
                </div>
                <div class="common__area">
                    <h3 class="common__topics">国境を超え、メーカーを超え<br>「型にはまらない」あなただけの歓びを</h3>
                    <p class="common__article">弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>
                        これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一に<br>した、最良の一台との出会いをコーディネートいたします。
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--Philosophy  -->
    <section href="#" class="Philosophy">
        <div class="Philosophy__outer">
            <div class="Philosophy__inner inner">
                <div class="Philosophy__body">
                    <div class="Philosophy__titles about-common__titles">
                        <p class="about-common__title-sub">経営理念</p>
                        <h3 class="about-common__title">Philosophy</h3>
                    </div>
                    <div class="Philosophy__article">
                        <p class="Philosophy__text">
                            「お客様とは一生涯のお付き合い」をモットーとし、同時に社員一人一人が責任と誇り、使命感を持ち日々の仕事にやりがいと喜びを感じることができる会社を目指します。<br>
                            そういう「社員満足」があってこそ、本当の「お客様に満足」が可能になり、そしてお客様のご満足がさらに社員の満足を高めてくれるからです。<br>
                            心の豊かさは楽とかゆとりとかいうより仕事の充実感に求めねばなりません。
                            我々は現状に満足することなく挑戦し続けます。
                        </p>
                        <div class="Philosophy__block">
                            <p class="philosophy__name">代表取締役&emsp;田中太郎</p>
                        </div>
                    </div>
                </div>
            </div>
            <picture class="Philosophy__imgs">
                <source class="Philosophy__img"
                    srcset="<?php echo esc_url(get_theme_file_uri("/images/philosophy.img.jpg")); ?>"
                    media="(min-width:756px)">
                <img src="<?php echo esc_url(get_theme_file_uri("/images/philosophy-sp.img.jpg")); ?>"
                    alt="外でタブレットとスマホを持った笑顔の女性">
            </picture>

        </div>
    </section>
    <!-- access -->
    <section class="about-access">
        <div class="about-access__inner inner">
            <div class="about-access__body">
                <div class="about-access__titles about-common__titles">
                    <p class="about-common__title-sub">アクセス</p>
                    <h3 class="about-common__title">Access</h3>
                </div>
                <div class="about-access__address">
                    <p class="about-access__number">〒000-0000</p>
                    <p class="about-access__detail">〇〇県△△市□□区▲▲町0-0-0</p>
                </div>
                <div class="about-access__map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1255.3347083972583!2d140.87311753897424!3d38.2577329691571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8a283df7d952fb%3A0x3139ad9242b12194!2z44CSOTgwLTA4MTEg5a6u5Z-O55yM5LuZ5Y-w5biC6Z2S6JGJ5Yy65LiA55Wq55S677yR5LiB55uu77yS4oiS77yT77yRIO-8k--8kO-8lw!5e0!3m2!1sja!2sjp!4v1697104826229!5m2!1sja!2sjp"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Profile -->
    <section class="profile">
        <div class="profile__inner ">
            <div class="about-access__titles about-common__titles">
                <p class="about-common__title-sub">会社概要</p>
                <h3 class="about-common__title">Company Profile</h3>
            </div>
            <table class="profile__items">
                <tr class="profile__item">
                    <th class="profile__info">会社名</th>
                    <td class="profile__detail">株式会社Excitecode</td>
                </tr>
                <tr class="profile__item">
                    <th class="profile__info">所在地</th>
                    <td class="profile__detail">〒000-0000&emsp;〇〇県△△市□□区▲▲町0-0-0</td>
                </tr>
                <tr class="profile__item">
                    <th class="profile__info">設立</th>
                    <td class="profile__detail">2015年12月10日</td>
                </tr>
                <tr class="profile__item">
                    <th class="profile__info">代表取締役</th>
                    <td class="profile__detail">田中&emsp;太郎</td>
                </tr>
                <tr class="profile__item">
                    <th class="profile__info">事業内容</th>
                    <td class="profile__detail">
                        自動車販売&nbsp;（新車、中古車）古物No.第00000000号<br>
                        自動車整備&nbsp;（国産車、輸入車）<br class="md-show">陸運局認証工場&emsp;認証No.0-0000 <br>
                        輸入車販売&nbsp;（自動車、自動車関連部品 <br>
                        保険代理店&nbsp; <br class="md-show">（ABC損害保険株式会社、DFG損害保険株式会社）
                    </td>
                </tr>
            </table>
        </div>
    </section>
    <div class="profile__slider slider2">
        <div class="swiper-wrapper2 swiper-wrapper">
            <div class="swiper-slide2 swiper-slide">
                <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri("/images/about.slide1.img.jpg")); ?>"
                        media="(min-width:350px)">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/about.slide1.-sp.img.jpg")); ?>"
                        alt="外でタブレットとスマホを持った笑顔の女性">
                </picture>
            </div>
            <div class="swiper-slide2 swiper-slide">
                <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri("/images/about.slide2.img.jpg")); ?>"
                        media="(min-width:350px)">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/about.slide2-sp.img.jpg")); ?>"
                        alt="パソコンを持った男性とスーツの男性が話している様子">
                </picture>
            </div>
            <div class="swiper-slide2 swiper-slide">
                <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri("/images/about.slide3.img.jpg")); ?>"
                        media="(min-width:350px)">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/about.slide3-sp.img.jpg")); ?>"
                        alt="スマホを持った女性とタブレットを持った男性が空を見上げている様子">
                </picture>
            </div>
            <div class="swiper-slide2 swiper-slide">
                <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri("/images/about.slide4.img.jpg")); ?>"
                        media="(min-width:350px)">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/about.slide4-sp.img.jpg")); ?>"
                        alt="スマホを持った女性とタブレットを持った男性が空を見上げている様子">
                </picture>
            </div>
            <div class="swiper-slide2 swiper-slide">
                <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri("/images/about.slide5.img.jpg")); ?>"
                        media="(min-width:350px)">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/about.slide5-sp.img.jpg")); ?>"
                        alt="スマホを持った女性とタブレットを持った男性が空を見上げている様子">
                </picture>
            </div>
            <div class="swiper-slide2 swiper-slide">
                <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri("/images/about.slide6.img.jpg")); ?>"
                        media="(min-width:px)">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/about.slide6-sp.img.jpg")); ?>"
                        alt="スマホを持った女性とタブレットを持った男性が空を見上げている様子">
                </picture>
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
                <!-- <div class="u-contact-icon"> -->
                <svg width="22" height="17.6" viewBox="0 0 22 17.6">
                    <path
                        d="M22.8,6H5.2A2.2,2.2,0,0,0,3.011,8.2L3,21.4a2.206,2.206,0,0,0,2.2,2.2H22.8A2.206,2.206,0,0,0,25,21.4V8.2A2.206,2.206,0,0,0,22.8,6Zm0,15.4H5.2v-11L14,15.9l8.8-5.5ZM14,13.7,5.2,8.2H22.8Z"
                        transform="translate(-3 -6)" />
                </svg>
                <a href="#" class="u-contact-btn__text"><span>お問い合わせ</span></a>
                <!-- </div> -->
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