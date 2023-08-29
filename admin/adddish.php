<?php include 'index.php' ?>

<div class="container">
    <h3 class="">Add Dish</h3>
    <div class="row">
        <div class="col-lg-6">
            <form class="row g-3" method="post" enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="dishName" class="form-label">Dish Name</label>
                    <input type="text" class="form-control" name="dishname" id="dishName">
                </div>
                <div class="col-md-6">
                    <legend class="col-form-label">Dish Type</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="dishtype" id="veg" value="Veg" checked>
                        <label class="form-check-label" for="veg">
                            Veg
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="dishtype" id="nonveg" value="Non-veg">
                        <label class="form-check-label" for="nonveg">
                            Non-Veg
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <label for="foodprice" class="form-label">Dish Price</label>
                    <input type="number" class="form-control" name="dishprice" id="foodprice" placeholder="Enter Dish Price">
                </div>
                <div class="mb-3">
                    <label for="foodfile" class="form-label">Select Dish Image</label>
                    <input class="form-control" type="file" name="file" id="foodfile">
                </div>

                <div class="mb-3">
                    <label for="foodfile" class="form-label">Select Dish Category</label>
                    <select id="inputState" name="dishcategory" class="form-select">
                        <option>select Category</option>
                        <option value="Soups">Soups</option>
                        <option value="Rice">Rice</option>
                        <option value="Deserts">Deserts</option>
                        <option value="Fast Food">Fast Food</option>
                        <option value="Maharastrian">Maharastrian</option>
                        <option value="South Indian">South Indian</option>
                    </select>
                </div>

                <div class="col-12">
                    <button type="submit" name="savedish" class="btn btn-primary">Save Dish</button>
                </div>
            </form>
        </div>
        <div class="col-lg-6">
            <p>IMAGE</p>
        </div>
    </div>
</div>

<?php
include '../config/dbconnect.php';

if (isset($_POST['savedish']) && $_FILES['file']['error'] === 0) {

    $dishnmae = $_POST['dishname'];
    $dishtype = $_POST['dishtype'];
    $dishcategory = $_POST['dishcategory'];
    $dishprice = $_POST['dishprice'];

    $targetDir = 'uploads/';
    $fileName = basename($_FILES['file']['name']);
    $targetPath = $targetDir . $fileName;

    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetPath)) {
        $sql = "INSERT INTO dishes (DishName, DishType, DishCategory, DishPrice, DishImage)
                            VALUES ('$dishnmae','$dishtype','$dishcategory','$dishprice', '$targetPath')";
        if ($conn->query($sql) === TRUE) {
            echo "Dish Added with image.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading the file.";
    }
}
?>



<!-- Developed By:Ashish Bendale
Contact:+91 8888813277, +91 7620979777 -->