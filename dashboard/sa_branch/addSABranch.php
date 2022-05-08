<?php
include('../functions.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $title = "'" . $_POST['title'] . "'";
        $SABranch->addSABranch($title);
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
                    <h3> Add Scientific Activity Branch</h3>
                    <input type="text" name="title" placeholder="Title">
                    <button name="submit" class="addtotable">add Scientific Activity Branch</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include("../footer.php")
?>