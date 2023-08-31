<?php include 'index.php';
include '../config/dbconnect.php';
?>

<div class="container">
    <div class="row">
        <?php

        $result = mysqli_query($conn, "SELECT * FROM dishes");
        foreach ($result as $row) {
        ?>
            <div class="col-lg-4 cpl-md-6 col-sm-12">
                <div class="card">
                    <img class="card-img-top" style="width: 100%; height: 300px;" src="<?= 'http://localhost/foodapp/admin/' . $row['DishImage'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title"><?= $row['DishName'] ?> &#8377; <?= $row['DishPrice'] ?></h4>
                        <h5 class="card-text">Type: <?= $row['DishType'] ?> </h5>
                        <h5 class="card-text">Category: <?= $row['DishCategory'] ?> </h5>
                        <a href="buy.php?dishId=<?= $row['DishID']; ?>" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>




<!-- Developed By:Ashish Bendale
Contact:+91 8888813277, +91 7620979777 -->