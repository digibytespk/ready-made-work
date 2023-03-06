<?php
include("navs/index.php");
?>

<div class="container">
    <div class="row">
        <div class="col-12 d-flex bdash-pro-t align-items-center flex-wrap">
            <div class="profile-avat mr-25"><img src="/assets/designers/7.png" /></div>
            <div>
                <div class="prfile-whdo">Welcome to Ready Made Work!</div>
                <div class="prfile-nme">Sarah B. Parker</div>
            </div>
        </div>
    </div>
</div>
<?php
include("../views/components/brand-cards.php");
BrandSection("Popular Design Assets", $web_array);
?>