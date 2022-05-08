<?php
include('../functions.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $title = "'" . $_POST['title'] . "'";
        $branch = $_POST['branch'];
        $image = $_FILES['image'];

        $SA->addSA($title, $branch, $image);
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
                <a href="../sa_branch/addSABranch.php">
                    <button class="addtotable">add Scientific Activity Branch</button>
                </a>
                <form action="" method="POST" class="login-email" enctype="multipart/form-data">
                    <h3> Add Scientific Activity</h3>
                    <input type="text" name="title" placeholder="Title">
                    <select name="branch">
                        <?php
                        foreach ($SABranch->getData() as $sa_branch) {
                        ?>
                            <option value="<?php echo $sa_branch['id'] ?>"><?php echo $sa_branch['title'] ?></option>
                        <?php }
                        ?>
                    </select>

                    <input type="file" name="image">
                    <button name="submit" class="addtotable">add Scientific Activity</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include("../footer.php")
?>