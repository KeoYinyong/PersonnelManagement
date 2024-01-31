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

        #sidebar ul li {
            margin: 2px 0;
        }

        #sidebar ul li a:hover {
            background-color: white;
            color: black;
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
                    <a class="nav-link dropdown-toggle " id="mainMenu1" data-bs-toggle="collapse" href="#collapse1"
                        role="button" aria-expanded="false" aria-controls="collapseExample1">Employee</a>
                    <div id="collapse1" style="background-color: #007bff;">
                        <!-- Submenu items for Main Menu 1 -->
                        <ul class="list-group" style="padding-left: 10px; margin-top: 5px;">
                            <a href="/employees" class="list-group-item" style="background-color: #0056b3;">View
                                All</a>
                            <a href="{{ route('employees.create') }}"
                                class="list-group-item  bg-white text-black-50">Add More</a>
                        </ul>
                    </div>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link dropdown-toggle" id="mainMenu1" data-bs-toggle="collapse" href="#collapse2"
                        role="button" aria-expanded="false" aria-controls="collapseExample1">Department</a>
                    <div class="collapse" id="collapse2" style="background-color: #007bff;">
                        <!-- Submenu items for Main Menu 1 -->
                        <ul class="list-group" style="padding-left: 10px; margin-top: 5px;">
                            <a href="/departments" class="list-group-item" style="background-color: #0056b3;">View
                                All</a>
                            <a href="{{ route('departments.create') }}" class="list-group-item"
                                style="background-color: #0056b3;">Add More</a>
                        </ul>
                    </div>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link dropdown-toggle" id="mainMenu1" data-bs-toggle="collapse" href="#collapse3"
                        role="button" aria-expanded="false" aria-controls="collapseExample1">Position</a>
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
        <div id="content" class="p-0 bg-light.bg-gradient">
            <div class="bg-light p-2 mb-4 shadow-sm p-3 mb-3 bg-body">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZLG21itESiQqpuSyaJG6n2StKN1fqJWYvXw&usqp=CAU"
                    style="height: 30px; margin: 0;">
                <h6 class="text-black d-inline mt-3"> Employee Page</h6>
            </div>

            <!-- Your content goes here -->
            <div class="bg-light-30 ml-5">
                <div class="d-flex align-items-center justify-content-center">
                    <div style="width: 90%; height: 50%; border-radius: 25px;" class="shadow-lg p-3 mb-3 bg-body mt-3">
                        <div style="text-align: center;">
                            <h2 style="color: goldenrod;">Create Employee</h2>
                        </div>
                        <form style=" margin: 20px; padding: 10px;" action="{{ route('employees.store') }}"
                            method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name">Name:</label>
                                <input type="text" name="name" class="form-control fs-6 mt-2" required
                                    placeholder="Enter Employee Name">
                            </div>

                            <div class="mb-3">
                                <label for="department_id">Department:</label>
                                <select name="department_id" class="form-control fs-6 mt-2" required>
                                    <option>Select Department</option>
                                    @foreach($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="position_id">Position:</label>
                                <select name="position_id" class="form-control fs-6 mt-2" required>
                                    <option>Select Position</option>
                                    @foreach($positions as $position)
                                    <option value="{{ $position->id }}">{{ $position->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg float-end">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>