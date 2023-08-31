<?php include 'index.php';
include '../config/dbconnect.php'; ?>
<h3>Orders</h3>
<div class="container justify-content-center">
    <div class="row">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th>Order Id</th>
                    <th>Order Date</th>
                    <th>Dish Name</th>
                    <th>Dish Type</th>
                    <th>Dish Qty</th>
                    <th>Total Amount</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php


                $result = mysqli_query($conn, "SELECT * FROM orders");
                foreach ($result as $row) {
                ?>
                    <tr>
                        <td><?= $row['OrderID']; ?></td>
                        <td><?= $row['OrderDate']; ?></td>
                        <td><?= $row['DishName']; ?></td>
                        <td><?= $row['DishType']; ?></td>
                        <td><?= $row['DishQty']; ?></td>
                        <td><?= $row['TotalAmount']; ?></td>
                        <td>
                            <a href="orderdetails.php?con_id=<?= $row['OrderID']; ?>">Details</a> -->
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Developed By:Ashish Bendale
Contact:+91 8888813277, +91 7620979777 -->