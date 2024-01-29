<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departments</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body style="background-color: #D3D3D3;">

    <div class="container">
        <div class="d-flex align-items-center justify-content-center p-5">
            <div style="width: 70%; height: 50%;" class="shadow-lg p-3 mb-5 bg-body rounded">

                <a href="{{ route('departments.create') }}" class="btn btn-success btn-lg" style="margin: 15px 0;">Add New</a>

                <table class="table">
                    <thead class="table-primary ">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Action</th>

                    </thead>
                    <tbody>
                        @foreach( $departments as $d)
                        <tr>

                            <td>{{ $d->id }}</td>
                            <td>{{ $d->name }}</td>

                            <td>
                                <form action="{{ route('departments.destroy', $d->id) }}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <a href="{{ route('departments.show', $d->id) }}" class="btn btn-primary btn-l">View</a>
                                    <a href="{{ route('departments.edit', $d->id) }}" class="btn btn-secondary btn-l">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-l">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <a href="{{ url('/') }}" class="btn btn-outline-primary fs-5">BACK</a>
            </div>

        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>