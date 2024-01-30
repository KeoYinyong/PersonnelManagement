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
            <div style="width: 70%; height: 70%; border-radius: 25px;" class="shadow-lg p-3 mb-5 bg-body mt-5">
                <div style="text-align: center;">
                    <h2 style="color: goldenrod;">Update Department Name</h2>
                </div>

                <form style=" margin: 20px; padding: 20px;" action="{{ route('departments.update', $department->id) }}"
                    method="post">
                    @csrf
                    @method('PATCH')

                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label fs-5">Department Name </label>
                        <input type="text" id="exampleFormControlInput1" name="name" class="form-control fs-6"
                            value="{{ $department->name }}" placeholder="Enter Food Name">
                    </div>

                    <a href="{{ route('departments.index') }}" class="btn btn-outline-primary">BACK</a>
                    <button type="submit" class="btn btn-success">UPDATE</button>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>