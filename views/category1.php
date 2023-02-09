<?php
include("./model/icons.php");
include("components/nav.php");
?>


<section>
    <div class="container">
        <div class="breadcru_tp">
            <div>Home</div>
            <div class="br_arr_node"><?= $arrow_right_icon ?></div>
            <div class="t-gray">Branding</div>
        </div>
        <div class="categry-mhding">A fantastic branding leads to early acquisition of customers, kickstart your business with a well crafted brand ...</div>
    </div>
    <div class="catery-baner-s"><img src="/assets/banners/category.png" /></div>
    <div class="container">
        <div class="row pt-80 pb-40">
            <div class="col-lg-7">
                <div class="bofb-cat">Benefits of Branding</div>
                <div class="pt-30">
                    <ul class="cwout-cat-ul">
                        <li>Mattis eget vitae donec maecenas eget felis. Eu imperdiet porttitor molestie donec lorem aenean placerat cras commodo. Leo diam molestie hendrerit id volutpat amet senectus risus. Vel ultrices aliquet a aliquet pellentesque. Nulla augue et adipiscing sapien. </li>
                        <li>Porttitor imperdiet auctor augue a. Sed eu ac amet amet adipiscing eu. Consequat dictumst vulputate justo sed id in. Sollicitudin integer amet convallis a turpis aliquet velit blandit. Aliquet a nec sed tortor porta urna aliquet amet. </li>
                        <li>Suscipit vulputate vitae tempor massa ornare purus convallis. Lobortis sit elementum in egestas sem eget facilisis. Malesuada rhoncus maecenas vulputate habitasse dictum volutpat mollis. </li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="vcvew">
                            <div class="vwrlvwyn">POPULAR SUB CATEGORIES</div>
                            <div class="cvwerlvhoh d-flex cwouy-ul-cayt">
                                <ul>
                                    <li>Logo & Identity</li>
                                    <li>Logo Design</li>
                                    <li>Brand Guide</li>
                                </ul>
                                <ul>
                                    <li>Logo & Identity</li>
                                    <li>Logo Design</li>
                                    <li>Brand Guide</li>
                                </ul>
                                <ul>
                                    <li>Logo & Identity</li>
                                    <li>Logo Design</li>
                                    <li>Brand Guide</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-5 img-hewi-100">
                <img src="/assets/banners/category-2.png" />
            </div>
        </div>
    </div>
</section>

<?php
include("components/service-cards.php");
include("components/brand-cards.php");
BrandSection("Popular Branding Assets", $brands_array);
include("components/testimonials.php");
include("components/faqs.php");
?>