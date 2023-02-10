<?php
include("./model/icons.php");
?>
<section class="clp-sec">
    <div class="container">
        <div class="clp-flex-a">
            <h1 class="cs-h1">Client Testimonials</h1>
            <a href="">
                View all testimonials
                <svg width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.47519 8.8045L7.80991 5.47253C7.87063 5.40915 7.91823 5.33442 7.94997 5.25262C8.01668 5.09037 8.01668 4.9084 7.94997 4.74616C7.91823 4.66435 7.87063 4.58962 7.80991 4.52625L4.47519 1.19427C4.41301 1.13214 4.33918 1.08285 4.25794 1.04922C4.17669 1.0156 4.08961 0.998291 4.00166 0.998291C3.82405 0.998291 3.65372 1.06879 3.52813 1.19427C3.40254 1.31976 3.33199 1.48995 3.33199 1.66741C3.33199 1.84487 3.40254 2.01507 3.52813 2.14055L5.72905 4.33299L0.666943 4.33299C0.490059 4.33299 0.320419 4.4032 0.195342 4.52817C0.0702661 4.65315 -1.67168e-07 4.82265 -1.74893e-07 4.99939C-1.82619e-07 5.17612 0.0702661 5.34562 0.195342 5.4706C0.320419 5.59557 0.490059 5.66578 0.666943 5.66578L5.72905 5.66578L3.52813 7.85822C3.46562 7.92017 3.416 7.99387 3.38214 8.07508C3.34828 8.15628 3.33085 8.24339 3.33085 8.33136C3.33085 8.41933 3.34828 8.50643 3.38214 8.58764C3.416 8.66884 3.46562 8.74255 3.52813 8.8045C3.59013 8.86696 3.6639 8.91653 3.74517 8.95037C3.82644 8.9842 3.91362 9.00162 4.00166 9.00162C4.08971 9.00162 4.17688 8.9842 4.25815 8.95037C4.33943 8.91653 4.41319 8.86696 4.47519 8.8045Z" fill="#1ED599" />
                </svg>
            </a>
        </div>
    </div>
    <div class="swiper testimonial-slider">
        <div class="swiper-wrapper">
            <?php
            if (isset($testimonial_array) && is_array($testimonial_array)) {
                foreach ($testimonial_array as $key => $value) {
            ?>
                    <div class="swiper-slide">
                        <div class="card-testmon">
                            <div class="t-p-s-section">
                                <div class="testimonial-profle"><img data-srcset="/assets/<?= $value['image'] ?>" /></div>
                                <div class="testimonial-stars">
                                    <div class="t-g-s t-gray-star"><?= $start_icon ?></div>
                                    <div class="t-g-s t-g-star"><?= $start_icon ?></div>
                                    <div class="t-g-s t-g-star"><?= $start_icon ?></div>
                                    <div class="t-g-s t-g-star"><?= $start_icon ?></div>
                                    <div class="t-g-s t-g-star"><?= $start_icon ?></div>
                                </div>
                            </div>
                            <div class="testimonial-name-n"><?= $value['name'] ?></div>
                            <div class="testimonial-sub-j"><?= $value['jtitle'] ?></div>
                            <div class="testimonial-fluu"><?= $value['testimonial'] ?></div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<script>
    var swiper = new Swiper(".testimonial-slider", {
        slidesPerView: 1,
        loop: true,
        spaceBetween: 30,
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3.5,
                spaceBetween: 50,
            },
        },
    });
</script>