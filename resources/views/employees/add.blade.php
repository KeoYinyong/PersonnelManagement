<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddMore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body style="background-color: #D3D3D3;">

    <div class="container">
        <div class="d-flex align-items-center justify-content-center p-5">
            <div style="width: 70%; height: 70%;" class="shadow-lg p-3 mb-5 bg-body rounded">

                <form action="{{ route('employees.store') }}" method="POST">
                    @csrf
                    <h1 style="color: goldenrod; text-align: center;">Create Employee</h1>
                    <div class="mb-3">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="department_id">Department:</label>
                        <select name="department_id" class="form-control" required>
                        <option>Select Department</option>
                            @foreach($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="position_id">Position:</label>
                        <select name="position_id" class="form-control" required>
                            <option>Select Position</option>
                            @foreach($positions as $position)
                            <option value="{{ $position->id }}">{{ $position->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <a href="{{ route('positions.index') }}" class="btn btn-outline-primary">BACK</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- <div class="container">
        <div class="content">
        <form action="{{ route('employees.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="department_id">Department:</label>
            <select name="department_id" class="form-control" required>
                @foreach($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="position_id">Position:</label>
            <select name="position_id" class="form-control"  required>
                @foreach($positions as $position)
                    <option value="{{ $position->id }}">{{ $position->title }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create Employee</button>
    </form>

        </div>
    </div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>