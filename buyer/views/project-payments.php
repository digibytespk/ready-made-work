<?php
include("navs/index.php");
?>
<?php
include("components/bread-crumb.php");
BreadCrumb([
    "My Projects"
], "American Web Builder’s Custom Logo Design")
?>
<div class="container">
    <?php
    include("components/project-nav.php");
    ?>
    <div class="row">
        <div class="col-lg-3 bt-gayloc pt-20">
            <ul class="galc_aher">
                <li><a>All Payments</a></li>
                <li><a>Pending Payments</a></li>
                <li><a>Completed Payments</a></li>
            </ul>
        </div>
        <div class="col-lg-9">
            <div class="row bt-gayloc pt-20 pb-20">
                <div class="col-lg-9">
                    <div class="mile-name-pp">Paid Amount for Milestone 1 - Branding.</div>
                    <div class="mile-mount-pp">$200.00</div>
                    <div class="mile-date-pp">January 23, 2023</div>
                </div>
                <div class="col-lg-3 text-right">
                    <button class="c-btn-c bg-white text-black">Download Invoice</button>
                </div>
            </div>
            <div class="row bt-gayloc pt-20 pb-20">
                <div class="col-lg-9">
                    <div class="mile-name-pp">Paid Amount for Milestone 1 - Branding.</div>
                    <div class="mile-mount-pp">$200.00</div>
                    <div class="mile-date-pp">January 23, 2023</div>
                </div>
                <div class="col-lg-3 text-right">
                    <button class="c-btn-c bg-white text-black">Download Invoice</button>
                </div>
            </div>
            <div class="row bt-gayloc pt-20 pb-20">
                <div class="col-lg-9">
                    <div class="mile-name-pp">Upcoming Payment for Milestone 3 - Web Development.</div>
                    <div class="mile-mount-pp">$4,460.00</div>
                    <div class="mile-date-pp">March 15, 2023</div>
                </div>
                <div class="col-lg-3 text-right">
                    <button class="c-btn-c">Release Payment</button>
                </div>
            </div>
        </div>
    </div>
</div>