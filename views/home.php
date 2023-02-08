<?php
include("components/nav.php");
?>
<section class="slider-slide">
    <div class="container d-flex justify-content-center ss-cont-align">
        <div>
            <div class="rmw-s">Ready Made Work</div>
            <div class="str-s">Find the right design</div>
            <div class="str-s">or Get one made</div>
            <div class="evb-s">Executing every big dreams start with a design...</div>
        </div>
    </div>
</section>
<section class="search-sect">
    <div class="container">
        <div class="search-box-ss">
            <svg width="99" height="88" viewBox="0 0 99 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M97.4555 89.7266L77.0626 69.4832C84.9784 59.6059 88.8119 47.0687 87.7747 34.4496C86.7375 21.8305 80.9085 10.0887 71.4863 1.63858C62.064 -6.81157 49.7648 -11.3278 37.1174 -10.9815C24.4701 -10.6351 12.436 -5.45254 3.48962 3.50063C-5.45675 12.4538 -10.6354 24.497 -10.9815 37.154C-11.3275 49.8109 -6.81475 62.1196 1.62899 71.5489C10.0727 80.9783 21.8056 86.8117 34.4151 87.8497C47.0246 88.8877 59.5523 85.0514 69.4221 77.1295L89.6501 97.3728C90.1611 97.8884 90.7691 98.2977 91.4389 98.5769C92.1087 98.8562 92.8272 99 93.5528 99C94.2784 99 94.9969 98.8562 95.6667 98.5769C96.3365 98.2977 96.9445 97.8884 97.4555 97.3728C98.4462 96.3471 99 94.9763 99 93.5497C99 92.1231 98.4462 90.7523 97.4555 89.7266ZM38.5855 77.1295C30.9754 77.1295 23.5363 74.8711 17.2087 70.64C10.8812 66.4089 5.94949 60.395 3.03724 53.3589C0.125002 46.3228 -0.636973 38.5804 0.847675 31.1109C2.33232 23.6414 5.99692 16.7803 11.378 11.395C16.7592 6.00983 23.6151 2.34245 31.079 0.856676C38.5428 -0.6291 46.2793 0.133454 53.31 3.04791C60.3408 5.96236 66.3501 10.8978 70.578 17.2302C74.806 23.5625 77.0626 31.0073 77.0626 38.6231C77.0626 48.8357 73.0088 58.6299 65.7929 65.8512C58.577 73.0726 48.7902 77.1295 38.5855 77.1295Z" fill="#DCDBE6" />
            </svg>
            <input type="text" placeholder="Search designs ..." />
            <button class="c-btn-c">Search</button>
        </div>
        <div class="search-r">
            <span>Top Searches include</span>
            Branding, Website Design, Powerpoint Deck, Logo Animations, NFTs, Brochure, Social Media
        </div>
    </div>
</section>
<?php
include("components/service-cards.php");
include("components/brand-cards.php");

BrandSection("Branding", $brands_array);
BrandSection("Web & Interfaces", $web_array);
BrandSection("Illustration & Art", $illustration_array);
?>

<section class="share-banner-h">
    <div class="container d-flex align-items-center height-100-per">
        <div>
            <div class="the-only-sbh">The only platform which brings a unique blend of <br />
                designers and artists together</div>
            <div class="scww-sbh">Share your creativity with the world!</div>
            <button class="c-btn-c bg-lwo-s text-black cewpvjwepri">
                Start now!
            </button>
        </div>
    </div>
    </div>
</section>

<?php
BrandSection("Motion Graphics", $motion_array);
BrandSection("Digital Media", $digital_array);
BrandSection("Development", $development_array);
?>


<section class="share-banner-h sbh-ease-banner">
    <div class="container d-flex align-items-center fewew8 height-100-per">
        <div>
            <div class="the-only-sbh">The only platform to resolve all your delivery issues<br />
                with ready made assets and top talent</div>
            <div class="scww-sbh">Ease your tensions and ...</div>
            <button class="c-btn-c bg-lwo-s text-black cewpvjwepri">
                Start now!
            </button>
        </div>
    </div>
    </div>
</section>

<?php
include("components/top-designers.php");
include("components/about-section.php");
?>

<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="count-box-cli">
                <div class="cbcli-numbers">1,800+</div>
                <div class="cbcli-para">Top Designers from <br /> around the world</div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="count-box-cli">
                <div class="cbcli-numbers text-green">23,000+</div>
                <div class="cbcli-para">Customised Designs <br /> Created</div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="count-box-cli">
                <div class="cbcli-numbers text-yelloecw">1,40,000+</div>
                <div class="cbcli-para">Curated Design <br /> Assets</div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="count-box-cli">
                <div class="cbcli-numbers text-dark-blak">900+</div>
                <div class="cbcli-para">Design Artefacts <br /> Delivered</div>
            </div>
        </div>
    </div>
</div>


<?php
include("components/testimonials.php");
include("components/faqs.php");
?>