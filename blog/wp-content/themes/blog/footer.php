<footer id="footer">
    <svg id="curve4" viewBox="0 0 1920 352">
        <path class="cls-1" d="M0,268s1146-432,1920,84V0H0Z" />
    </svg>
    <div class="footer__newsletter">
        <div class="footer__newsletter--title">
            <h5>عضویت در خبرنامه</h5>
            <p>برای دریافت پیشنهادات ویژه و مقالات آموزشی ایمیل خود را وارد کنید</p>
        </div>
        <form class="footer__newsletter--form">
            <input type="text" placeholder="ایمیل خود را وارد کنید" name="mail" required>
            <?php $leftarrow = IMAGES . '/icons/left-arrow2.svg'; ?>
            <button type="submit"><img src="<?php echo $leftarrow; ?>"></button>
        </form>
    </div>
    <div class="footer__main">
        <div class="footer__main--info">
            <?php $logo = IMAGES . '/logo.png'; ?>
            <a href="index.html"><img src="<?php echo $logo; ?>"></a>
            <p class="location">ایران، تهران</p>
            <p class="call">989356378982</p>
            <p class="email">info@arashnia.com</p>
            <div class="footer__main--social">
                <?php $instagram = IMAGES . '/icons/instagram.svg'; ?>
                <a href="#"><img src="<?php echo $instagram; ?>"></a>
                <?php $telegram = IMAGES . '/icons/telegram.svg'; ?>
                <a href="#"><img src="<?php echo $telegram; ?>"></a>
                <?php $facebooklogo = IMAGES . '/icons/facebook-logo.svg'; ?>
                <a href="#"><img src="<?php echo $facebooklogo; ?>"></a>
                <?php $linkedinlogo = IMAGES . '/icons/linkedin-logo.svg'; ?>
                <a href="#"><img src="<?php echo $linkedinlogo; ?>"></a>
            </div>
        </div>
        <div class="footer__main--guide">
            <p class="footer__main--title">راهنمای سایت</p>
            <a href="#">نحوه ثبت نام</a>
            <a href="#">آموزش پنل کاربری</a>
            <a href="#">سوالات متداول</a>
            <a href="#">آموزش اپلیکیشن</a>
            <a href="#">نحوه دریافت کد تخفیف</a>
        </div>
        <div class="footer__main--links">
            <p class="footer__main--title">لینک های مفید</p>
            <a href="#">آخرین اخبار و مقالات</a>
            <a href="#">درباره ما</a>
            <a href="#">تماس با ما</a>
        </div>
        <?php $uparrow = IMAGES . '/icons/up-arrow.svg'; ?>
        <a class="top" href="#"><img src="<?php echo $uparrow; ?>"></a>
    </div>
    <hr>
    <div class="footer__copyright">
        <p>2020 - 2018 &copy; حقوق انتشار محفوظ است</p>
        <div class="footer__designby">
            <p>طراحی و کد:</p>
            <a href="#">pghheidari@</a>
        </div>
    </div>
</footer>

</main>
<?php wp_footer(); ?>
</body>
</html>