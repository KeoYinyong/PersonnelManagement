<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container h-h-full w-full mt-5">

        <div class="row justify-content-md-center">

            <div class="col-md-auto shadow-lg p-3 bg-body rounded">
                <h2>Menu</h2>
                <div class="row" style="margin: 20px; padding: 20px;">
                    <a href="/departments" class="btn btn-outline-primary btn-lg m-3">Departments</a>
                    <a href="/positions" class="btn btn-outline-primary btn-lg m-3">Positions</a>
                    <a href="/employees" class="btn btn-outline-primary btn-lg m-3">Employees</a>
                </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <title>Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        #sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #007bff;
            /* Blue color for the sidebar */
            transition: all 0.3s;
            z-index: 1;
            margin: 0;
            padding: 0;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background-color: #0056b3;
            /* Darker blue for the header */
        }

        #sidebar ul.components {
            padding: 20px;
            border-bottom: 1px solid #0056b3;
            /* Darker blue for the border */
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
            color: #fff;
        }

        #content {
            margin-left: 250px;
            padding: 15px;
            transition: margin-left 0.3s;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h4>Staff Management</h4>
            </div>

            <ul class="nav nav-pills p-w-0">
                <li class="nav-item w-100">
                    <a class="nav-link active dropdown-toggle" id="mainMenu1" data-bs-toggle="collapse"
                        href="#collapse1" role="button" aria-expanded="false"
                        aria-controls="collapseExample1">Employee</a>
                    <div class="collapse" id="collapse1" style="background-color: #007bff;">
                        <!-- Submenu items for Main Menu 1 -->
                        <ul class="list-group" style="padding-left: 10px; margin-top: 5px;">
                            <a href="/employees" class="list-group-item" style="background-color: #0056b3;">View All</a>
                        </ul>
                        <ul class="list-group" style="padding-left: 10px; margin-top: 5px;">
                            <a href="{{ route('employees.create') }}" class="list-group-item"
                                style="background-color: #0056b3;">Add More</a>
                        </ul>
                    </div>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link active dropdown-toggle" id="mainMenu1" data-bs-toggle="collapse"
                        href="#collapse2" role="button" aria-expanded="false"
                        aria-controls="collapseExample1">Department</a>
                    <div class="collapse" id="collapse2" style="background-color: #007bff;">
                        <!-- Submenu items for Main Menu 1 -->
                        <ul class="list-group" style="padding-left: 10px; margin-top: 5px;">
                            <a href="/departments" class="list-group-item" style="background-color: #0056b3;">View
                                All</a>
                            <a href="/employees" class="list-group-item" style="background-color: #0056b3;">Add More</a>
                        </ul>
                    </div>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link active dropdown-toggle" id="mainMenu1" data-bs-toggle="collapse"
                        href="#collapse3" role="button" aria-expanded="false"
                        aria-controls="collapseExample1">Position</a>
                    <div class="collapse" id="collapse3" style="background-color: #007bff;">
                        <!-- Submenu items for Main Menu 1 -->
                        <ul class="list-group" style="padding-left: 10px; margin-top: 5px;">
                            <a href="/positions" class="list-group-item" style="background-color: #0056b3;">View All</a>
                            <a href="{{ route('positions.create') }}" class="list-group-item"
                                style="background-color: #0056b3;">Add More</a>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>


        <!-- Page Content -->
        <div id="content" class="p-0">
            <div class="bg-light p-2 mb-4">
                <img src="https://i.pinimg.com/474x/0a/b4/00/0ab4006798529a64c04c1b2ddbc12d13.jpg"
                    style="height: 40px; margin: 0;">
                <h5 class="text-black  d-inline mt-3"> Home Page</h5>
            </div>
            <div class="bg-light-30 ml-5 text-center align-content-center">
                <h3>Welcome Staff Management</h3>
               <img src="diagram.png" alt="">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>