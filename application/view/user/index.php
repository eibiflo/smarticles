<div class="container">
    <div class="box">
        <br>
        <h2>Personal Details</h2>

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>
        <!--

        <div>Your username: <?= $this->user_name; ?></div>
        <div>Your email: <?= $this->user_email; ?></div>
        <div>Your avatar image:
            <?php if (Config::get('USE_GRAVATAR')) { ?>
                Your gravatar pic (on gravatar.com): <img src='<?= $this->user_gravatar_image_url; ?>' />
            <?php } else { ?>
                Your avatar pic (saved locally): <img src='<?= $this->user_avatar_file; ?>' />
            <?php } ?>
        </div>
        <div>Your account type is: <?= $this->user_account_type; ?></div>

        -->
        <br>

        <div class="container">
            <div class="row">
               <div class="col">
                   <div>Username</div>
                   <div class="user_data_div">
                       <h4 class="user-data-text"><?= $this->user_name; ?></h4>
                   </div>
                   <br>
               </div>
                <div class="col"    style=" align-self: center;  vertical-align: middle; display: flex;">
                   <!-- <image src="../images/edit.png" width="40" heigth="40" > </image> -->
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div>E-Mail</div>
                    <div class="user_data_div">
                        <h4 class="user-data-text"><?= $this->user_email; ?></h4>
                    </div>
                    <br>
                </div>
                <div class="col">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div>Password</div>
                    <div class="user_data_div">
                        <h4 class="user-data-text">*****</h4>
                    </div>
                    <br>

                </div>
                <div class="col">
                </div>
            </div>
        </div>

        <br>
        <h2>Preferences</h2>
        <br>

        <div class="container">
            <form method="POST">
                <div class="row">
                    <div class="col">
                        <div class="">
                            <h4>Preferred Categories</h4>
                                <input type="checkbox" id="category_politics" name="category[]" value="politics" <?php if (strpos($this->user_selectedCategorys, 'politics') !== false) echo "checked = checked"?>>
                                <label for="category_politics"> Politics </label><br>
                                <input type="checkbox" id="category_entertainment" name="category[]" value="entertainment" <?php if (strpos($this->user_selectedCategorys, 'entertainment') !== false) echo "checked = checked"?>>
                                <label for="category_entertainment"> Entertainment</label><br>
                                <input type="checkbox" id="category_sport" name="category[]" value="sports" <?php if (strpos($this->user_selectedCategorys, 'sports') !== false) echo "checked = checked"?>>
                                <label for="category_sport"> Sport</label><br>
                                <input type="checkbox" id="category_technology" name="category[]" value="technology" <?php if (strpos($this->user_selectedCategorys, 'technology') !== false) echo "checked = checked"?>>
                                <label for="category_technology"> Technology</label><br>
                                <input type="checkbox" id="category_business" name="category[]" value="business" <?php if (strpos($this->user_selectedCategorys, 'business') !== false) echo "checked = checked"?>>
                                <label for="category_business"> Business</label><br>
                        </div>
                        <br>

                    </div>
                    <div class="col"    style=" align-self: center;  vertical-align: middle; display: flex;">
                        <!-- <image src="../images/edit.png" width="40" heigth="40" > </image> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="">
                            <h4>Will you let us learn what you like to read?</h4>
                            <input type="radio" id="learn_yes" name="learn[]" value="yes"<?php if (strpos($this->user_selectedCategorys, 'learn') !== false) echo "checked = checked"?>>
                            <label for="learn_yes"> Yes</label>
                            <input type="radio" id="learn_no" name="learn[]" value="no"<?php if (strpos($this->user_selectedCategorys, 'learn') == false) echo "checked = checked"?>>
                            <label for="learn_no"> No</label><br><br>
                            <input class="btn" type="submit" name="submit_userdata" value="Submit">
                        </div>
                        <br>
                    </div>
                    <div class="col ">

                        <div class="chart-wrap vertical">
                            <h2 class="title" style="transform: translateY(-380px) translateX(145px) rotate(-0deg)">Your favourite news categories</h2>
                            <div class="grid">
                                <div class="bar" style="--bar-value:<?php
                                foreach($this->user_categoryPercentages as $value){
                                    if (strpos($value, 'Politics') !== false){
                                        $percentage = explode('=', $value);
                                        echo ceil($percentage[1]);
                                    }
                                }
                                ?>%;" data-name="Politics" title="Politics <?php echo ceil($percentage[1])?>%"></div>
                                <div class="bar" style="--bar-value:<?php
                                foreach($this->user_categoryPercentages as $value){
                                    if (strpos($value, 'Entertainment') !== false){
                                        $percentage = explode('=', $value);
                                        echo ceil($percentage[1]);
                                    }
                                }
                                ?>%;" data-name="Entertainment" title="Entertainment <?php echo ceil($percentage[1])?>%"></div>
                                <div class="bar" style="--bar-value:<?php
                                foreach($this->user_categoryPercentages as $value){
                                    if (strpos($value, 'Sports') !== false){
                                        $percentage = explode('=', $value);
                                        echo ceil($percentage[1]);
                                    }
                                }
                                ?>%;" data-name="Sport" title="Sport <?php echo ceil($percentage[1])?>%"></div>
                                <div class="bar" style="--bar-value:<?php
                                foreach($this->user_categoryPercentages as $value){
                                    if (strpos($value, 'Technology') !== false){
                                        $percentage = explode('=', $value);
                                        echo ceil($percentage[1]);
                                    }
                                }
                                ?>%;" data-name="Technology" title="Technology <?php echo ceil($percentage[1])?>%"></div>
                                <div class="bar" style="--bar-value:<?php
                                foreach($this->user_categoryPercentages as $value){
                                    if (strpos($value, 'Business') !== false){
                                        $percentage = explode('=', $value);
                                        echo ceil($percentage[1]);
                                    }
                                }
                                ?>%;" data-name="Business" title="Business <?php echo ceil($percentage[1])?>%"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <br>
    </div>
</div>
