<div class="container">

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <div class="login-page-box">
        <div class="table-wrapper">

            <!-- login box on left side -->
            <div class="login-box">
                <h2>Login here</h2>
                <form action="<?php echo Config::get('URL'); ?>login/login" method="post">
                    <label>Username or E-Mail</label>
                    <input type="text" name="user_name" placeholder="Username or email" required />
                    <label><br>Password (<a style="color: #e8a041" href="<?php echo Config::get('URL'); ?>login/requestPasswordReset">I forgot my password</a>)</label>
                    <input type="password" name="user_password" placeholder="Password" required />



                    <input type="checkbox" id="set_remember_me_cookie" name="set_remember_me_cookie" >
                    <label for="set_remember_me_cookie">  Remember me for 2 weeks</label>


                    <!-- when a user navigates to a page that's only accessible for logged a logged-in user, then
                         the user is sent to this page here, also having the page he/she came from in the URL parameter
                         (have a look). This "where did you came from" value is put into this form to sent the user back
                         there after being logged in successfully.
                         Simple but powerful feature, big thanks to @tysonlist. -->
                    <?php if (!empty($this->redirect)) { ?>
                        <input type="hidden" name="redirect" value="<?php echo $this->encodeHTML($this->redirect); ?>" />
                    <?php } ?>
					<!--
						set CSRF token in login form, although sending fake login requests mightn't be interesting gap here.
						If you want to get deeper, check these answers:
							1. natevw's http://stackoverflow.com/questions/6412813/do-login-forms-need-tokens-against-csrf-attacks?rq=1
							2. http://stackoverflow.com/questions/15602473/is-csrf-protection-necessary-on-a-sign-up-form?lq=1
							3. http://stackoverflow.com/questions/13667437/how-to-add-csrf-token-to-login-form?lq=1
					-->
					<input type="hidden" name="csrf_token" value="<?= Csrf::makeToken(); ?>" />

                    <input type="submit" class="login-submit-button btn btn-success" value="Log in"/>
                </form>

            </div>



            <br>


            <!-- register box on right side
            <div class="register-box">
                <h2>No account yet ?</h2>
                <a href="<?php echo Config::get('URL'); ?>register/index">Register</a>
            </div>
             -->
        </div>
    </div>
</div>