<?php include 'index.php';
include '../config/dbconnect.php';
session_start();
if (isset($_GET['dishId'])) {
    $dishId = $_GET['dishId'];

    // Query to fetch dish data
    $sql = "SELECT * FROM Dishes WHERE DishID = '$dishId'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        //get data from result to row
        $row = $result->fetch_assoc();
    } else {
        echo "Dish Not found";
    }
}

?>

<style>
    form {
        width: 30%;
    }
</style>
<div class="d-flex justify-content-center">
    <h3>Place Order</h3>
</div>
<div class="d-flex justify-content-center">
    <form method="post">
        <div class="form-floating">
            <input type="text" class="form-control" value="<?= $row['DishName'] ?>" disabled id="custname">
            <label for="custname">Dish Name</label>
        </div>

        <div class="form-floating mt-3">
            <input type="text" class="form-control" value="<?= $row['DishType'] ?>" disabled id="custname">
            <label for="custname">Dish Type</label>
        </div>

        <div class="form-floating mt-3">
            <input type="text" class="form-control" value="<?= $row['DishCategory'] ?>" disabled id="custname">
            <label for="custname">Dish Category</label>
        </div>

        <div class="form-floating mt-3">
            <input type="text" class="form-control" value="<?= $row['DishPrice'] ?>" disabled id="custname">
            <label for="custname">Dish Price</label>
        </div>

        <div class="form-floating mt-3">
            <input type="number" name="Qty" class="form-control" placeholder="Enter Qty" id="qty">
            <label for="qty">Enter Qty</label>
        </div>

        <div class="col-12 mt-3">
            <button type="submit" name="placeorder" class="btn btn-primary">Place Order</button>
        </div>
    </form>
</div>

<?php
if (isset($_POST['placeorder'])) {

    $dishQty = $_POST['Qty'];
    $dishName = $row['DishName'];
    $dishType = $row['DishType'];
    $dishCategory = $row['DishCategory'];
    $dishPrice = $row['DishPrice'];
    
    $custId=$_SESSION["CustID"];
    $totalAmt = $dishQty * $dishPrice;
    echo $totalAmt;

    $sql = "INSERT INTO orders (DishName, DishType, DishCategory, DishPrice, DishQty, CustID, TotalAmount)
                            VALUES ('$dishName','$dishType','$dishCategory','$dishPrice', '$dishQty', '$custId', '$totalAmt')";
    if ($conn->query($sql) === TRUE) {
        echo "Order Placed Syccessfull.";
        header("Location: orders.php"); // Redirect to dashboard or any other page
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>