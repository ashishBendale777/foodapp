<?php include 'index.php' ?>

<style>
    form{
        width: 30%;
    }
</style>
<div class="d-flex justify-content-center">
    <h3>Get Started</h3>
</div>
<div class="d-flex justify-content-center">
    <form class="">
        <div class="form-floating">
            <input type="text" class="form-control" id="custname" placeholder="Enter Full Name">
            <label for="custname">Enter Full Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="mobileno" placeholder="Mobile No">
            <label for="mobileno">Enter Mobile No</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Enter Password</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Enter Address" id="custaddress" style="height: 100px"></textarea>
            <label for="custaddress">Enter Address</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="custcity" placeholder="Enter Enter City">
            <label for="custcity">Enter City</label>
        </div>
        <div class="mt-3">
            <a href="login.php">Already Register? Login</a>
        </div>
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
</div>


<!-- Developed By:Ashish Bendale
Contact:+91 8888813277, +91 7620979777 -->