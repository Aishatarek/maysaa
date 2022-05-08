<?php
include('../functions.php');
$item_id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $title = "'" . $_POST['title'] . "'";
        $description = "'" . $_POST['description'] . "'";
        $image = $_FILES['image'];
        $image2 = $_FILES['image2'];
        $image3 = $_FILES['image3'];
        $image4 = $_FILES['image4'];
        $image5 = $_FILES['image5'];

        $publication_date = "'" . date('Y-m-d', strtotime($_POST['publication_date'])) . "'";
        $UA->updateUA($item_id, $title, $description, $image, $image2, $image3, $image4, $image5, $publication_date);
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
                <?php
                foreach ($UA->getAllData() as $ua) :
                    if ($ua['id'] == $item_id) :
                ?>
                        <form action="" method="POST" class="login-email" enctype="multipart/form-data">
                            <p>Title</p>
                            <input type="text" name="title" placeholder="title" value="<?php echo $ua['title'] ?>">
                            <p>Description</p>
                            <textarea name="description" cols="30" rows="10"><?php echo $ua['description'] ?></textarea>
                            <p>Main Image</p>
                            <img src="../../uploads/UA/<?php echo $ua['image'] ?>" alt="" width="100px">
                            <input type="file" name="image">
                            <p>Second Image</p>
                            <img src="../../uploads/UA/<?php echo $ua['image2'] ?>" alt="" width="100px">
                            <input type="file" name="image2">
                            <p>Third Image</p>
                            <img src="../../uploads/UA/<?php echo $ua['image3'] ?>" alt="" width="100px">
                            <input type="file" name="image3">
                            <p>Fourth Image</p>
                            <img src="../../uploads/UA/<?php echo $ua['image4'] ?>" alt="" width="100px">
                            <input type="file" name="image4">
                            <p>Fifth Image</p>
                            <img src="../../uploads/UA/<?php echo $ua['image5'] ?>" alt="" width="100px">
                            <input type="file" name="image5">
                            <p>Publication Date <?php echo date('M d,Y', strtotime($ua['publication_date'])) ?></p>
                            <input type="date" name="publication_date">
                            <button name="submit" class="addtotable">edit scientific publications</button>
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