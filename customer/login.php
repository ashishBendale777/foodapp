<?php include 'index.php' ?>

<div class="d-flex justify-content-center">
    <h3>Login</h3>
</div>
<div class="d-flex justify-content-center">
    <form class="w-5" method="post">
        <div class="form-floating mb-3">
            <input type="number" class="form-control" name="custmobile" id="mobileno" placeholder="Mobile No">
            <label for="mobileno">Enter Mobile No</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="custpassword" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Enter Password</label>
        </div>
        <div class="mt-3">
            <a href="register.php">Don't have account? Reguster</a>
        </div>
        <div class="col-12 mt-3">
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>

<?php
include '../config/dbconnect.php';
session_start();
if (isset($_POST['login'])) {

    $custmobileno = $_POST['custmobile'];
    $custpassword = $_POST['custpassword'];

    // Query to check user credentials
    $sql = "SELECT * FROM Customers WHERE MobileNo = '$custmobileno' AND Password = '$custpassword'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Successful login
        $row = $result->fetch_assoc();

        // Store user info in session
        $_SESSION["CustID"] = $row["CustID"];
        $_SESSION["CustName"] = $row["FullName"];

        echo 'Login Success..';
        header("Location: home.php"); // Redirect to dashboard or any other page
        exit();
    } else {
        echo "Invalid username or password";
    }
}
?>

<!-- Developed By:Ashish Bendale
Contact:+91 8888813277, +91 7620979777 -->