<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <title>Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                    <a class="nav-link dropdown-toggle" id="mainMenu1" data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapseExample1">Employee</a>
                    <div class="collapse" id="collapse1" style="background-color: #007bff;">
                        <!-- Submenu items for Main Menu 1 -->
                        <ul class="list-group" style="padding-left: 10px; margin-top: 5px;">
                            <a href="{{ route('employees.create') }}" class="list-group-item" style="background-color: #0056b3;">Add More</a>
                        </ul>
                    </div>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link dropdown-toggle" id="mainMenu1" data-bs-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample1">Department</a>
                    <div class="collapse" id="collapse2" style="background-color: #007bff;">
                        <!-- Submenu items for Main Menu 1 -->
                        <ul class="list-group" style="padding-left: 10px; margin-top: 5px;">
                            <a href="/departments" class="list-group-item" style="background-color: #0056b3;">View All</a>
                            <a href="{{ route('departments.create') }}" class="list-group-item" style="background-color: #0056b3;">Add More</a>
                        </ul>
                    </div>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link dropdown-toggle" id="mainMenu1" data-bs-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapseExample1">Position</a>
                    <div class="collapse" id="collapse3" style="background-color: #007bff;">
                        <!-- Submenu items for Main Menu 1 -->
                        <ul class="list-group" style="padding-left: 10px; margin-top: 5px;">
                            <a href="/positions" class="list-group-item" style="background-color: #0056b3;">View All</a>
                            <a href="{{ route('positions.create') }}" class="list-group-item" style="background-color: #0056b3;">Add More</a>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- Page Content -->
        <div id="content" class="p-0 bg-light.bg-gradient">
            <div class="bg-light p-2 mb-1 border border-black ">
                <img src="https://static.thenounproject.com/png/2696193-200.png" style="height: 40px; margin: 0;">
                <h5 class="text-black d-inline mt-3"> Employee Page</h5>
            </div>
            <!-- Your content goes here -->
            <div class="bg-light-30 ml-5">
                <div class="d-flex align-items-center justify-content-center p-5">
                    <div style="width: 100%; height: 100%;">
                        <h3 class="text-center mb-4">All Employees</h3>
                        <table class="table ">
                            <thead class="table-primary ">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Department</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach( $employees as $e)
                                <tr>
                                    <td>{{ $e->id }}</td>
                                    <td>{{ $e->name }}</td>
                                    <td>{{ $e->position->title }}</td>
                                    <td>{{ $e->department->name }}</td>
                                    <td>
                                        <form action="{{ route('employees.destroy', $e->id) }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <a href="{{ route('employees.show', $e->id) }}" class="btn btn-primary btn-lg">View</a>
                                            <a href="{{ route('employees.edit', $e->id) }}" class="btn btn-secondary btn-lg">Edit</a>
                                            <button type="submit" class="btn btn-danger btn-lg">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>