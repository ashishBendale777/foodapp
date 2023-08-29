<?php include 'index.php';
include '../config/dbconnect.php'
?>


<style>
    form {
        width: 30%;
    }
</style>
<div class="d-flex justify-content-center">
    <h3>Get Started</h3>
</div>
<div class="d-flex justify-content-center">
    <form class="" method="post">
        <div class="form-floating">
            <input type="text" class="form-control" name="custname" id="custname" placeholder="Enter Full Name">
            <label for="custname">Enter Full Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" name="custmobileno" id="mobileno" placeholder="Mobile No">
            <label for="mobileno">Enter Mobile No</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="custpassword" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Enter Password</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Enter Address" name="custaddress" id="custaddress" style="height: 100px"></textarea>
            <label for="custaddress">Enter Address</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="custcity" id="custcity" placeholder="Enter Enter City">
            <label for="custcity">Enter City</label>
        </div>
        <div class="mt-3">
            <a href="login.php">Already Register? Login</a>
        </div>
        <div class="col-12 mt-3">
            <button type="submit" name="register" class="btn btn-primary">Register</button>
        </div>
    </form>
</div>

<?php
include '../config/dbconnect.php';

if (isset($_POST['register'])) {

    $custname = $_POST['custname'];
    $custmobileno = $_POST['custmobileno'];
    $custaddress = $_POST['custaddress'];
    $custpassword = $_POST['custpassword'];
    $custcity = $_POST['custcity'];

    $sql = "INSERT INTO Customers (FullName, MobileNo, Address, City, Password)
                            VALUES ('$custname','$custmobileno','$custaddress','$custcity', '$custpassword')";
    if ($conn->query($sql) === TRUE) {
        echo "Register Successfull.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!-- Developed By:Ashish Bendale
Contact:+91 8888813277, +91 7620979777 -->