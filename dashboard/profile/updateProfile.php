<?php
include('../functions.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $avatar = $_FILES['avatar'];
        $cv = $_FILES['cv'];
        $Profile->updateProfile(1, $avatar, $cv);
    }
}
include("../header.php");

?>



<div class="container-fluid">
    <div class="row">
        <?php
        include("../sideNavv.php");
        ?>
        <div class="col-lg-10 col-md-9 col-sm-12 thedetailll">
            <div class="theform">
                <form action="" method="POST" class="login-email" enctype="multipart/form-data">
                    <?php
                    foreach ($Profile->getData() as $profile) :
                        if ($profile['id'] == 1) :
                    ?>
                            <p>Avatar:</p>
                            <img src="../../uploads/profile/<?php echo $profile["avatar"] ?>" width="150px" alt="">
                            <input type="file" name="avatar">
                            <a href="../../uploads/profile/<?php echo $profile["cv"] ?>" class="viewLink" target="_blank">CV</a>
                            <input type="file" name="cv">
                            <button name="submit" class="addtotable">edit profile</button>
                    <?php
                        endif;
                    endforeach;
                    ?>
                </form>


            </div>
        </div>
    </div>
</div>
<?php
include("../footer.php")
?>