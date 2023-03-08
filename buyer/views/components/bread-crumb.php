<?php
function BreadCrumb($ligh_array, $active_page)
{
    include("../model/icons.php");
?>
    <div class="container">
        <div class="breadcru_tp">
            <?php
            for ($i = 0; $i < count($ligh_array); $i++) {
            ?>
                <div><?= $ligh_array[$i] ?></div>
                <div class="br_arr_node"><?= $arrow_right_icon ?></div>
            <?php
            }
            ?>
            <div class="t-gray"><?= $active_page ?></div>
        </div>
    </div>
<?php
}
