<?php
include('../functions.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $title ="'".$_POST['title']."'";
        $description ="'".$_POST['description']."'";
        $image =$_FILES['image'];
        $image2 =$_FILES['image2'];
        $image3 =$_FILES['image3'];
        $image4 =$_FILES['image4'];
        $image5 =$_FILES['image5'];
        $publication_date ="'".date('Y-m-d', strtotime($_POST['publication_date']))."'" ;
        $UA->addUA($title, $description, $image, $image2, $image3, $image4, $image5, $publication_date);
    }
}
include("../header.php");

?>

    <div class="container-fluid">
        <div class="row">
        <?php
        include("../sideNavv.php");
        ?>
            <div class="col-lg-10 col-md-9 col-sm-12 container-fluid">
                <div class="theform2">

                    <form action="" method="POST" class="login-email" enctype="multipart/form-data">
                        <h3> Add UA</h3>
                        <input type="text" name="title" placeholder="title" >
                        <textarea name="description" cols="30" rows="10"></textarea>
                        <input type="file" name="image" >
                        <input type="file" name="image2" >
                        <input type="file" name="image3" >
                        <input type="file" name="image4" >
                        <input type="file" name="image5" >

                        <input type="date" name="publication_date" >
                     <div class="input-group">
                            <button name="submit" class="addtotable" >add UA</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
include("../footer.php")
?>