<div class="container">
    <h1>Request a password reset</h1>
    <div class="box">

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <!-- request password reset form box -->
        <form method="post" action="<?php echo Config::get('URL'); ?>login/requestPasswordReset_action">
            <label for="user_name_or_email">
                Enter your username or email and you'll get a mail with instructions
                <input type="text" name="user_name_or_email" required />
            </label>

            <!-- show the captcha by calling the login/showCaptcha-method in the src attribute of the img tag -->
            <!-- <img id="captcha" src="<?php echo Config::get('URL'); ?>register/showCaptcha"  style="margin-top: 20px; margin-bottom: 10px"/> -->
            <input type="text" name="captcha" placeholder="Enter captcha above" required />

            <!-- quick & dirty captcha reloader
            <a href="#" style="display: block; font-size: 11px; margin: 5px 0 15px 0;"
               onclick="document.getElementById('captcha').src = '<?php echo Config::get('URL'); ?>register/showCaptcha?' + Math.random(); return false">Reload Captcha</a>
-->
            <input class="btn" type="submit" value="Send me a password-reset mail" />
        </form>
        <br>

    </div>
</div>

</div>
