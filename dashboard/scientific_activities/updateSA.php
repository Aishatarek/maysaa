<?php
include('../functions.php');
$item_id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $title = "'" . $_POST['title'] . "'";
        $branch =  $_POST['branch'];
        $image = $_FILES['image'];
        $SA->updateSA($item_id, $title, $branch, $image);
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
                <h3>Edit Scientific Activity </h3>
                <?php
                foreach ($SA->getData() as $sa) :
                    if ($sa['id'] == $item_id) :
                ?>
                        <form action="" method="POST" class="login-email" enctype="multipart/form-data">
                            <p>Title</p>
                            <input type="text" name="title" placeholder="title" value="<?php echo $sa['title'] ?>">
                            <p>Branch</p>
                            <select name="branch">
                                <?php
                                foreach ($SABranch->getData() as $sa_branch) {
                                    if ($sa_branch['id'] == $sa['branch']) {
                                ?>
                                        <option value="<?php echo $sa_branch['id'] ?>" selected><?php echo $sa_branch['title'] ?></option>
                                    <?php
                                    } else {
                                    ?>
                                        <option value="<?php echo $sa_branch['id'] ?>"><?php echo $sa_branch['title'] ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>

                            <p>Image</p>
                            <img src="../../uploads/SA/<?php echo $sa['image'] ?>" alt="" width="100px">
                            <input type="file" name="image">
                            <button name="submit" class="addtotable">Edit Scientific Activity</button>
                        </form>
                <?php
                    endif;
                endforeach;
                ?>

            </div>
        </div>
    </div>
</div>
<?php
include("../footer.php")
?>