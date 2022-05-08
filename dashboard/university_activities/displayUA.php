<?php
include('../functions.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['deleteItem'])) {
        $UA->deleteUA($_POST['item_id']);
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
            <a href="addUA.php" class="addtotable">Add University Activity</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Main Image</th>
                        <th scope="col">second Image</th>
                        <th scope="col">third Image</th>
                        <th scope="col">fourth Image</th>
                        <th scope="col">fifth Image</th>
                        <th scope="col">Publication Date</th>
                        <th>-</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($UA->getAllData() as $ua) :
                    ?>
                        <tr>
                            <td><?php echo $ua["title"] ?></td>
                            <td><?php echo $ua["description"] ?></td>
                            <td class="tdimg"><img src="../../uploads/UA/<?php echo $ua["image"] ?>" alt="" width="50px"></td>
                            <td class="tdimg"><img src="../../uploads/UA/<?php echo $ua["image2"] ?>" alt="" width="50px"></td>
                            <td class="tdimg"><img src="../../uploads/UA/<?php echo $ua["image3"] ?>" alt="" width="50px"></td>
                            <td class="tdimg"><img src="../../uploads/UA/<?php echo $ua["image4"] ?>" alt="" width="50px"></td>
                            <td class="tdimg"><img src="../../uploads/UA/<?php echo $ua["image5"] ?>" alt="" width="50px"></td>
                            <td>Publication Date <?php echo date('M d,Y', strtotime($ua['publication_date'])) ?></td>
                            <td>
                                <div class="d-flex justify-content-around">
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $ua["id"] ?>" name="item_id">
                                        <button name="deleteItem" class="btn btn-outline-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                    <a href="<?php printf('%s?id=%s', 'updateUA.php',  $ua['id']); ?>">
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