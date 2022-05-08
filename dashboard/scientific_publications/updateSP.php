<?php
include('../functions.php');
$item_id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $title = "'" . $_POST['title'] . "'";
        $description = "'" . $_POST['description'] . "'";
        $link = "'" . $_POST['link'] . "'";
        $publication_date = "'" . date('Y-m-d', strtotime($_POST['publication_date'])) . "'";
        $SP->updateSP($item_id, $title, $description, $link, $publication_date);
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
                foreach ($SP->getData() as $sp) :
                    if ($sp['id'] == $item_id) :
                ?>
                        <form action="" method="POST" class="login-email">
                            <h3>edit scientific publication</h3>
                            <p>Title</p>
                            <input type="text" name="title" placeholder="title" value="<?php echo $sp['title'] ?>">
                            <p>Description</p>
                            <textarea name="description" cols="30" rows="10"><?php echo $sp['description'] ?></textarea>
                            <p>The Link: <a href="<?php echo $sp['link'] ?>" target="_blank" class="viewLink">View</a></p>
                            <input type="url" name="link" placeholder="link" value="<?php echo $sp["link"] ?>">
                            <p>the publication date: <span class="viewLink"> <?php echo date('M d,Y', strtotime($sp['publication_date'])) ?></span></p>
                            <input type="date" name="publication_date">
                            <button name="submit" class="addtotable">edit scientific publication</button>
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