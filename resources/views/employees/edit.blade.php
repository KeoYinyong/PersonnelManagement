</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body style="background-color: #D3D3D3;">

    <div class="container">
        <div class="d-flex align-items-center justify-content-center p-5">
            <div style="width: 70%; height: 70%; border-radius: 25px;" class="shadow-lg p-3 mb-5 bg-body mt-4">
                <div style="text-align: center;">
                    <h2 style="color: goldenrod;">Update Personnel Infor</h2>
                </div>
                <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="m-3">
                        <label for="name" class="mb-2">Name:</label>
                        <input type="text" name="name" class="form-control" value="{{ $employee->name }}" required>
                    </div>

                    <div class="m-3">
                        <label for="department_id" class="mb-2">Department:</label>
                        <select name="department_id" class="form-control" required>

                            @foreach($departments as $department)
                            <option value="{{ $department->id }}" {{ $employee->department_id == $department->id ?
                                'selected' : '' }}>
                                {{ $department->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="m-3">
                        <label for="position_id" class="mb-2">Position:</label>
                        <select name="position_id" class="form-control mb-4" required>
                            @foreach($positions as $position)
                            <option value="{{ $position->id }}" {{ $employee->position_id == $position->id ? 'selected'
                                : '' }}>
                                {{ $position->title }}
                            </option>
                            @endforeach
                        </select>
                        <a href="{{ route('employees.index') }}" class="btn btn-outline-primary">BACK</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>