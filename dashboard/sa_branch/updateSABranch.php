<?php
include('../functions.php');
$item_id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $title = "'" . $_POST['title'] . "'";
        $SABranch->updateSABranch($item_id, $title);
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
                <h3>Edit Scientific Activity Branch </h3>
                <?php
                foreach ($SABranch->getData() as $sa_branch) :
                    if ($sa_branch['id'] == $item_id) :
                ?>
                        <form action="" method="POST" class="login-email" enctype="multipart/form-data">
                            <p>Title</p>
                            <input type="text" name="title" placeholder="title" value="<?php echo $sa_branch['title'] ?>">
                            <button name="submit" class="addtotable">Edit Scientific Activity Branch</button>
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