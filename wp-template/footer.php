<footer class="footer">
    <div class="footer__inner inner">
        <div class="footer__container">
            <div class="footer__body">
                <div class="footer__logo">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/footer-logo.svg")); ?>" alt="footerロゴ"
                        class="footer__logo-img">
                </div>
                <div class="footer__icons">
                    <div class="footer__icon">
                        <i class="fa-brands fa-facebook" style="color: #fff;"><span></span></i>
                        <i class="fa-brands fa-twitter" style="color: #fff;"><span></span></i>
                        <i class="fa-brands fa-instagram" style="color: #fff;"><span></span></i>
                    </div>
                </div>
            </div>
            <div class="footer__box">
                <div class="footer__texts">
                    <a href="#" class="footer__text">TOP</a>
                    <a href="#" class="footer__text">ABOUT</a>
                    <a href="#" class="footer__text">SERVICE</a>
                    <a href="#" class="footer__text">WORKS</a>
                    <a href="#" class="footer__text">NEWS</a>
                    <a href="#" class="footer__text">CONTACT</a>
                    <a href="#" class="footer__text"> プライバシーポリシー </a>
                </div>
            </div>
        </div>
        <div class="footer__c-box">
            <small class="footer__copyright">
                &copy;<?php echo wp_date("Y");?>&nbsp;ExciteCode&nbsp;all&nbsp;rights&nbsp;reserved </small>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>