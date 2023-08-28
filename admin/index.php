<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Offcanvas</title>
    <meta name="viewport" content="width=device-width,
				initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .ico {
            color: red;
            display: inline;
            font-size: 40px;
        }
    </style>
</head>

<body>

    <div class="container mt-3">
        <div>
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" data-bs-toggle="offcanvas" data-bs-target="#offcanvasStart" aria-controls="offcanvasStart">Admin</a>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasStart" aria-labelledby="offcanvasStartLabel">
            <div class="offcanvas-header">
                <h3 id="offcanvasStartLabel">
                    Foodies
                </h3>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                </button>
            </div>
            <div class="offcanvas-body">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adddish.php">Add Dish</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="alldishes.php">All Dishes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customers.php">Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orders.php">Orders</a>
                    </li>
                </ul>
            </div>
        </div>
        <div>
        </div>
    </div>
</body>

</html>


<!-- Developed By:Ashish Bendale
Contact:+91 8888813277, +91 7620979777 -->