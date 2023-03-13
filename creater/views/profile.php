<?php
include("nav/index.php");
?>

<div class="container">
    <?php
    include("components/cover-profile.php");
    ?>
    <div class="wprf-tb-stion mt-30 mb-50">
        <div class="d-flex justify-content-between flex-wrap wprf-nbtps">
            <div class="mt-10">
                <button class="mr-10 mb-10">Assets</button>
                <button class="mr-10 mb-10">Portfolio</button>
                <button class="mr-10 mb-10">Services</button>
                <button class="mr-10 mb-10">About</button>
            </div>
            <div class="mt-10">
                <button class="c-btn-c bg-reeg border-none text-white">Upload Asset</button>
            </div>
        </div>
    </div>

    <?php
    // include("components/assets.php");
    // include("components/portfolio.php");
    include("components/services.php");
    ?>

</div>