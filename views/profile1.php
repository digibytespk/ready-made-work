<?php
include("components/nav.php");
?>
<section class="profile-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="profile-avat"><img src="/assets/designers/7.png" /></div>
                <div class="prfile-nme">Arados Markachanda</div>
                <div class="prfile-whdo">Product Designer & Photographer</div>
                <div class="prfile-flow">
                    <div>140 Followers</div>
                    <div class="ml-30-px">29 Following</div>
                </div>
                <div class="ft-area-cclp-card">
                    <div class="ft-cclp-but">
                        <button class="c-btn-c bg-lwo-s">Hire me</button>
                        <button class="c-btn-c">Follow</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 full-imgprofile-bner">
                <img src="/assets/banners/profile-bg.png" />
            </div>
        </div>
        <div class="prof-tab-ne">
            <button class="active">My Shop</button>
            <button>Custom Projects</button>
            <button>About Us</button>
        </div>
        <div class="row">
            <?php
            if (isset($shops_array) && is_array($shops_array)) {
                foreach ($shops_array as $key => $value) {
            ?>
                    <div class="col-lg-3 col-sm-6 shops-griss">
                        <div class="box-shop-wrd"><img src="<?= $value['image'] ?>" /></div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>