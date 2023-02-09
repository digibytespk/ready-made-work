<?php
include("./model/icons.php");
include("components/nav.php");
?>
<section>
    <div class="container">
        <div class="breadcru_tp">
            <div>Home</div>
            <div class="br_arr_node"><?= $arrow_right_icon ?></div>
            <div>Blogs</div>
            <div class="br_arr_node"><?= $arrow_right_icon ?></div>
            <div class="t-gray">Sem imperdiet morbi enim aliquet eget vel</div>
        </div>
        <div class="banner_img_odp">
            <img src="/assets/blog/1.png" />
        </div>
        <div class="d-flex justify-content-between flex-wrap mt-30 pb-30 b-btm-uid">
            <div>
                <div class="vrwiewemcw">Sem imperdiet morbi enim aliquet eget vel</div>
                <div class="mweiy07">Steven Wolf</div>
            </div>
            <div class="d-flex align-items-center flex-wrap">
                <div class="ft-cclp-but ml-30">
                    <button class="c-btn-c bg-lwo-s text-black">
                        Share
                    </button>
                </div>
            </div>
        </div>
            <div class="blog-decrip">Bibendum lorem pulvinar netus in ut lectus consequat. In lobortis turpis eget cursus enim est. Proin elit quis sed massa turpis habitant consectetur malesuada. Pellentesque mus lobortis a enim sit ultrices vestibulum. Dolor malesuada amet facilisis at arcu sit. Pharetra praesent semper sem fringilla accumsan sit. 

Facilisis eget orci odio faucibus orci ligula ullamcorper nisl ultricies. Commodo aliquam et odio cras. Egestas leo varius pharetra sed odio morbi egestas aliquet. Diam vulputate integer habitasse gravida tristique venenatis. Congue sed viverra in rutrum aliquam dui. In elementum ut tincidunt nunc lorem integer dolor et lectus. Congue id viverra diam ut nulla posuere commodo scelerisque magna. Non mauris mus quis aenean. Id commodo faucibus facilisi porta. Suspendisse at ornare ultrices augue odio. Vulputate vivamus fusce malesuada aliquam euismod eleifend scelerisque quisque convallis. 

Justo integer bibendum nunc nibh. Porttitor sapien et dolor semper ultrices sed vitae. Aliquam nisi sit facilisis id. Risus praesent imperdiet varius sed at pharetra consectetur sit. At sed non metus tristique neque habitant. Consectetur eget lacinia sem ultricies sodales. Pellentesque suscipit egestas arcu vitae enim. Pulvinar sit leo blandit libero vitae. Posuere consectetur habitant vulputate magna vel non amet in. Ac mattis donec eu urna in sed congue quis. Lectus turpis amet ipsum vitae sagittis erat tempus. Proin eget faucibus gravida felis amet egestas metus quis vitae. 
            </div>
            <div class="blog-s-hd">
            Massa mattis porta ut arcu ridiculus risus ultrices sit libero. Quis aliquam adipiscing ut laoreet turpis bibendum.
            </div>
            <div class="blog-decrip">Bibendum lorem pulvinar netus in ut lectus consequat. In lobortis turpis eget cursus enim est. Proin elit quis sed massa turpis habitant consectetur malesuada. Pellentesque mus lobortis a enim sit ultrices vestibulum. Dolor malesuada amet facilisis at arcu sit. Pharetra praesent semper sem fringilla accumsan sit. 

Facilisis eget orci odio faucibus orci ligula ullamcorper nisl ultricies. Commodo aliquam et odio cras. Egestas leo varius pharetra sed odio morbi egestas aliquet. Diam vulputate integer habitasse gravida tristique venenatis. Congue sed viverra in rutrum aliquam dui. In elementum ut tincidunt nunc lorem integer dolor et lectus. Congue id viverra diam ut nulla posuere commodo scelerisque magna. Non mauris mus quis aenean. Id commodo faucibus facilisi porta. Suspendisse at ornare ultrices augue odio. Vulputate vivamus fusce malesuada aliquam euismod eleifend scelerisque quisque convallis. 
            </div>
    </div>
</section>
<?php
include("components/blogs-card.php");
BlogsSection("Related Blogs", $blog_array);
?>