<?php
include('../functions.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['deleteItem'])) {
        $SABranch->deleteSABranch($_POST['item_id']);
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
            <a href="addSABranch.php" class="addtotable">Add Scientific Activity Branch</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th>-</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($SABranch->getData() as $sa_branch) :
                    ?>
                        <tr>
                            <td><?php echo $sa_branch["title"] ?></td>
                            <td>
                                <div class="d-flex justify-content-around">
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $sa_branch["id"] ?>" name="item_id">
                                        <button name="deleteItem" class="btn btn-outline-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                    <a href="<?php printf('%s?id=%s', 'updateSABranch.php',  $sa_branch['id']); ?>">
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