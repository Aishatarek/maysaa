<?php
include('../functions.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['deleteItem'])) {
        $SP->deleteSP($_POST['item_id']);
    }
}
include("../header.php");

?>
<div class="container-fluid">
    <div class="row">
        <?php
        include("../sideNavv.php");
        ?>
        <div class="col-lg-10 col-md-9 col-sm-12 container-fluid thedetailll">
        <a href="addSP.php" class="addtotable">Add Scientific Publication</a>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">The Link</th>
                        <th scope="col">Publication Date</th>
                        <th>-</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($SP->getData() as $sp) :
                    ?>
                        <tr>
                            <td><?php echo $sp["title"] ?></td>
                            <td><?php echo $sp["description"] ?></td>
                            <td><a href="<?php echo $sp["link"] ?>" target="_blank" class="viewLink">View</a></td>
                            <td><?php echo date('M d,Y', strtotime($sp['publication_date'])) ?></td>
                            <td>
                                <div class="d-flex justify-content-around">
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $sp["id"] ?>" name="item_id">
                                        <button name="deleteItem" class="btn btn-outline-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                    <a href="<?php printf('%s?id=%s', 'updateSP.php',  $sp['id']); ?>">
                                        <button class="btn btn-outline-info"><i class="fa-solid fa-edit"></i></button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include("../footer.php")
?>