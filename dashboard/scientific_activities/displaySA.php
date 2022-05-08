<?php
include('../functions.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['deleteItem'])) {
        $SA->deleteSA($_POST['item_id']);
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
            <div class="d-flex justify-content-between">
                <a href="../sa_branch/displaySABranch.php" class="addtotable">All Scientific Activities Branchs</a>
                <a href="addSA.php" class="addtotable">Add Scientific Activity</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Branch</th>
                        <th scope="col">Image</th>
                        <th>-</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($SA->getData() as $sa) :
                    ?>
                        <tr>
                            <td><?php echo $sa["title"] ?></td>
                            <td>
                                <?php foreach ($SABranch->getData() as $sa_branch) {
                                    if ($sa_branch['id'] == $sa['branch']) {
                                        echo $sa_branch['title'];
                                    }
                                } ?>
                            </td>
                            <td class="tdimg"><img src="../../uploads/SA/<?php echo $sa["image"] ?>" alt="" width="150px"></td>
                            <td>
                                <div class="d-flex justify-content-around">
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $sa["id"] ?>" name="item_id">
                                        <button name="deleteItem" class="btn btn-outline-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                    <a href="<?php printf('%s?id=%s', 'updateSA.php',  $sa['id']); ?>">
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