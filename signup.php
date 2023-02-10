<?php
include("env.php");
include("model/data.php");
include("Layout/header.php");
?>

<body class="signin_bg_bdy">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 min-hei-700px mob-signin-dnone">
                <div class="sign_in_ncwg">
                    <div class="sign_in_ncwg">
                        <img class="lozad svg_bg" data-srcset="/assets/app/signup_bg.svg" />
                        <div class="cwq_ljp">
                            <img class="lozad" data-srcset="/assets/app/logo.svg" />
                            <div class="pqoxj_jqpjc">Readymadework</div>
                            <svg class="qece_s" width="100%" height="2" viewBox="0 0 90 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" width="90" height="2" rx="1" fill="#4A4B62" />
                            </svg>
                            <div class="ehiwe_0ice">Top rated platform for design assets and hiring professional designers</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-12">
                <div class="cwc_cewm00">
                    <div class="elfhw_wejwu">Register now and start earning ...</div>
                    <div class="signin-f-labe">
                        <div class="cew-lj">
                            Your Name
                        </div>
                        <input type="text" placeholder="Arados Markachanda" />
                    </div>
                    <div class="signin-f-labe">
                        <div class="cew-lj">
                            Email Address
                        </div>
                        <input type="text" placeholder="name@domain.com" />
                    </div>
                    <div class="signin-f-labe">
                        <div class="cew-lj">
                            Contact #
                        </div>
                        <input type="text" placeholder="+1 000 000 0090" />
                    </div>
                    <div class="signin-f-labe signup_btns_slect">
                        <button class="tabselect-signup">
                            <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.81674 0.173631C7.76382 0.118613 7.70087 0.0749445 7.6315 0.0451436C7.56213 0.0153428 7.48773 0 7.41258 0C7.33744 0 7.26303 0.0153428 7.19367 0.0451436C7.1243 0.0749445 7.06134 0.118613 7.00842 0.173631L2.7676 4.5526L0.985878 2.70944C0.930934 2.65471 0.866074 2.61167 0.795002 2.58279C0.723929 2.55391 0.648036 2.53974 0.571655 2.54111C0.495274 2.54247 0.419902 2.55933 0.349841 2.59073C0.27978 2.62213 0.216402 2.66746 0.163327 2.72411C0.110252 2.78077 0.0685192 2.84765 0.0405104 2.92094C0.0125016 2.99423 -0.00123442 3.07249 8.70471e-05 3.15126C0.00140852 3.23002 0.0177615 3.30774 0.0482121 3.37999C0.0786626 3.45223 0.122615 3.51759 0.177558 3.57232L2.36344 5.82637C2.41635 5.88139 2.47931 5.92506 2.54868 5.95486C2.61805 5.98466 2.69245 6 2.7676 6C2.84274 6 2.91714 5.98466 2.98651 5.95486C3.05588 5.92506 3.11884 5.88139 3.17175 5.82637L7.81674 1.03651C7.87452 0.981543 7.92064 0.91483 7.95218 0.840576C7.98372 0.766322 8 0.686136 8 0.605071C8 0.524006 7.98372 0.44382 7.95218 0.369566C7.92064 0.295311 7.87452 0.228599 7.81674 0.173631Z" fill="#272838" />
                            </svg>
                            I am a Creator</button>
                        <button class="tabselect-signup">
                            <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.81674 0.173631C7.76382 0.118613 7.70087 0.0749445 7.6315 0.0451436C7.56213 0.0153428 7.48773 0 7.41258 0C7.33744 0 7.26303 0.0153428 7.19367 0.0451436C7.1243 0.0749445 7.06134 0.118613 7.00842 0.173631L2.7676 4.5526L0.985878 2.70944C0.930934 2.65471 0.866074 2.61167 0.795002 2.58279C0.723929 2.55391 0.648036 2.53974 0.571655 2.54111C0.495274 2.54247 0.419902 2.55933 0.349841 2.59073C0.27978 2.62213 0.216402 2.66746 0.163327 2.72411C0.110252 2.78077 0.0685192 2.84765 0.0405104 2.92094C0.0125016 2.99423 -0.00123442 3.07249 8.70471e-05 3.15126C0.00140852 3.23002 0.0177615 3.30774 0.0482121 3.37999C0.0786626 3.45223 0.122615 3.51759 0.177558 3.57232L2.36344 5.82637C2.41635 5.88139 2.47931 5.92506 2.54868 5.95486C2.61805 5.98466 2.69245 6 2.7676 6C2.84274 6 2.91714 5.98466 2.98651 5.95486C3.05588 5.92506 3.11884 5.88139 3.17175 5.82637L7.81674 1.03651C7.87452 0.981543 7.92064 0.91483 7.95218 0.840576C7.98372 0.766322 8 0.686136 8 0.605071C8 0.524006 7.98372 0.44382 7.95218 0.369566C7.92064 0.295311 7.87452 0.228599 7.81674 0.173631Z" fill="#272838" />
                            </svg>
                            I am a Buyer</button>
                    </div>
                    <div class="qrqwe_03">
                        <div class="oiu_98label">
                            <label>
                                <input type="checkbox" />
                                I accept <span class='color-grin ml-4px'> terms and conditions</span>
                            </label>
                        </div>
                    </div>
                    <div class="btn_enco0_">
                        <button>Register</button>
                    </div>
                    <div class="r_signup_fm">or</div>
                    <div class="btn_enco0_ btn_signup_w_gle">
                        <button><img src="/assets/icons/1.svg" />Continue with Google</button>
                    </div>
                    <div class="btn_enco0_ btn_signup_w_gle">
                        <button><img src="/assets/icons/2.svg" />Continue with Facebook</button>
                    </div>
                    <div class="cwew_blkc">
                        <ul class="cpy_ul_a">
                            <li><a href="">About Readymadework</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Refunds</a></li>
                            <li><a href="">Careers</a></li>
                        </ul>

                        <div class="col-12 copy_r_txt">
                            <div>© 2023 - Readymadework. All Rights Reserved</div>
                            <div>Privacy Policy & Terms of Use</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).on("click",".tabselect-signup",function(){
        $(".tabselect-signup").removeClass("active");
        $(this).addClass("active");
    })
</script>
<?php
    include("Layout/footerjs.php");
?>