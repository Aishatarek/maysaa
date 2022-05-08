<?php
include('../functions.php');
$item_id = 1;
include("../header.php");
?>
<div class="container-fluid">
    <div class="row">
        <?php
        include("../sideNavv.php");
        ?>
        <div class="col-lg-10 col-md-9 col-sm-12 thedetailll">

            <?php

            foreach ($Profile->getData() as $profile) :
                if ($profile['id'] == $item_id) :

            ?>
                    <div class="theprofilee">
                        <p>Avatar</p>
                        <img src="../../uploads/profile/<?php echo $profile["avatar"] ?>" alt="">
                        <a href="../../uploads/profile/<?php echo $profile["cv"] ?>" target="_blank" class="viewLink">CV</a>
                        <div class="d-flex justify-content-around">
                            <a href="<?php printf('%s?id=%s', 'updateProfile.php',  $profile['id']); ?>">
                                <button class="addtotable"><i class="fa-solid fa-edit"></i></button>
                            </a>
                        </div>
                    </div>

            <?php

                endif;
            endforeach;
            ?>
        </div>
    </div>
</div>
<?php
include("../footer.php")
?>