<?php
include('../functions.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $title = "'" . $_POST['title'] . "'";
        $description = "'" . $_POST['description'] . "'";
        $link = "'" . $_POST['link'] . "'";
        $publication_date = "'" . date('Y-m-d', strtotime($_POST['publication_date'])) . "'";
        $SP->addSP($title, $description, $link, $publication_date);
    }
}
include("../header.php");
?>
<div class="container-fluid">
    <div class="row">
        <?php
        include("../sideNavv.php");
        ?>
        <div class="col-lg-10 col-md-9 col-sm-12">
            <div class="theform">
                <form action="" method="POST">
                    <h3>Add Scientific Publication</h3>
                    <input type="text" name="title" placeholder="title">
                    <textarea name="description" cols="30" rows="10"></textarea>
                    <input type="url" name="link" placeholder="link">
                    <input type="date" name="publication_date">
                    <button name="submit" class="addtotable">Add Scientific Publication</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include("../footer.php")
?>