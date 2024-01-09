<?php get_header(); ?>
<main>
    <!-- service mv -->
    <section class="mv-common">
        <div class="common__box">
            <div class="common__inner">
                <div class="common__imgs">
                    <picture>
                        <source class="m-service__img m-common__img"
                            srcset="<?php echo esc_url(get_theme_file_uri("/images/m-service-mv.img.jpg")); ?>"
                            media="(min-width:1025px)">
                        <img src="<?php echo esc_url(get_theme_file_uri("/images/m-service-mv-sp.img.jpg")); ?>"
                            alt="外でタブレットとスマホを持った笑顔の女性">
                    </picture>
                    <div class="m-about__content common-style">
                        <div class="common-style__box">
                            <h2 class="common-style__title">Service</h2>
                            <p class="common-style__text">サービス紹介</p>
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
                        <a class="common__part">購入サポート<span></span></a>
                        <a class="common__part">修理・整備<span></span></a>
                        <a class="common__part">車検・点検<span></span></a>
                    </div>
                </div>
                <div class="common__area">
                    <h3 class="common__topics">お客様一人一人が求める<br>
                        理想のカーライフに寄り添います</h3>
                    <p class="common__article">様々な輸入車・国産車のメンテナンスのご相談から点検・整備まで、親切かつスピーディな対応を心がけ、あらゆる疑問や不安にお答えし
                        <br>ます。最新鋭の自社集中工場には、四輪アライメントをはじめ最新コンピューターと各ブランドに精通した熟練のサービススタッフを配置、<br>フロ
                        ントでは車種ブランド別の専用電話回線をご用意しております。
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- m-service -->
    <section class="m-service">
        <div class="m-service__outer">
            <div class="m-service__wrapper">
                <div class="m-service__body">
                    <div class="m-service__article">
                        <div class="m-service__number">01</div>
                        <h3 class="m-service__work">購入サポート</h3>
                        <p class="m-service__text">国を超え、メーカーを超え、高級の本質をお届<br class="md-none">けする特別な一台との出会いをサポートします。</p>
                    </div>
                    <div class="m-service__imgs">
                        <img src="<?php echo esc_url(get_theme_file_uri("/images/m-service01.img.jpg")); ?>"
                            alt="ライトの付いた高級車">
                    </div>
                </div>
                <div class="m-service__foot">
                    <div class="m-service__features">
                        <h4 class="m-service__features-main">FEATURES</h4>
                        <p class="m-service__features-sub">特徴</p>
                    </div>
                    <p class="m-service__detail">弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>
                        これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。</p>
                </div>
            </div>
            <div class="m-service__wrapper">
                <div class="m-service__body">
                    <div class="m-service__article">
                        <div class="m-service__number">02</div>
                        <h3 class="m-service__work">修理・整備</h3>
                        <p class="m-service__text">高度な輸入車修理技術と数多くの修理実績、熟練の技術・設備であなたの愛車を完全に直します。</p>
                    </div>
                    <div class="m-service__imgs">
                        <img src="<?php echo esc_url(get_theme_file_uri("/images/m-service02.img.jpg")); ?>"
                            alt="ライトの付いた高級車">
                    </div>
                </div>
                <div class="m-service__foot">
                    <div class="m-service__features">
                        <h4 class="m-service__features-main">FEATURES</h4>
                        <p class="m-service__features-sub">特徴</p>
                    </div>
                    <p class="m-service__detail">弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>
                        これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。</p>
                </div>
            </div>
            <div class="m-service__wrapper">
                <div class="m-service__body">
                    <div class="m-service__article">
                        <div class="m-service__number">03</div>
                        <h3 class="m-service__work">車検・点検</h3>
                        <p class="m-service__text">輸入車の取り扱いが県内トップクラス。専門の整備工場へ任せたいならわたしたちへご相談ください。</p>
                    </div>
                    <div class="m-service__imgs">
                        <img src="<?php echo esc_url(get_theme_file_uri("/images/m-service03.img.jpg")); ?>"
                            alt="ライトの付いた高級車">
                    </div>
                </div>
                <div class="m-service__foot">
                    <div class="m-service__features">
                        <h4 class="m-service__features-main">FEATURES</h4>
                        <p class="m-service__features-sub">特徴</p>
                    </div>
                    <p class="m-service__detail">弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。
                        これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。</p>
                </div>
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
                    <a href="#" class="u-contact-btn__text"><span>お問い合わせ</span></a>
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