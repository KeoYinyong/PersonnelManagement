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
                <form action="{{ route('positions.store')}}" method="post">
                    @csrf
                    @method('POST')
                    <h1 style="color: goldenrod; text-align: center;">Add New Position</h1>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Position Name </label>
                        <input type="text" id="exampleFormControlInput1" name="title" class="form-control" placeholder="Enter Position Name">
                    </div>

                    <a href="{{ route('positions.index') }}" class="btn btn-outline-primary">BACK</a>
                    <button type="submit" class="btn btn-outline-success">INSERT</button>
                </form>

            </div>
        </div>
    </div>

    <!-- <div class="container">
        <div class="content">
            <form action="{{ route('positions.store')}}" method="post">
                @csrf
                @method('POST')
                <h1 style="color: goldenrod;">Add New Position</h1>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Position Name </label>
                    <input type="text" id="exampleFormControlInput1" name="title" class="form-control" placeholder="Enter Position Name">
                </div>

                <a href="{{ route('positions.index') }}" class="btn btn-outline-primary">BACK</a>
                <button type="submit" class="btn btn-outline-success">INSERT</button>
            </form>

        </div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>