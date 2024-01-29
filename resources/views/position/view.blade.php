<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Position View</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body style="background-color: #D3D3D3;">

    <div class="container">
        <div class="d-flex align-items-center justify-content-center p-5">
            <div style="width: 70%; height: 70%;" class="shadow-lg p-3 mb-5 bg-body rounded">
                <a href="{{ route('positions.create') }}" class="btn btn-success btn-lg" style="margin: 10px;">Add New</a>

                <table class="table">
                    <thead class="table-primary ">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Action</th>

                    </thead>
                    <tbody>
                        @foreach( $positions as $p)
                        <tr>

                            <td>{{ $p->id }}</td>
                            <td>{{ $p->title }}</td>

                            <td>
                                <form action="{{ route('positions.destroy', $p->id) }}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <a href="{{ route('positions.show', $p->id) }}" class="btn btn-primary btn-lg">View</a>
                                    <a href="{{ route('positions.edit', $p->id) }}" class="btn btn-secondary btn-lg">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-lg">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <a href="{{ url('/') }}" class="btn btn-outline-primary">BACK</a>
            </div>
        </div>
    </div>

    <!-- <div class="container" style="margin: 50px;">
        <a href="{{ route('positions.create') }}" class="btn btn-success btn-lg" style="margin: 10px;">Add New</a>

        <table class="table">
            <thead class="table-primary ">
                <th>Id</th>
                <th>Name</th>
                <th>Action</th>

            </thead>
            <tbody>
                @foreach( $positions as $p)
                <tr>

                    <td>{{ $p->id }}</td>
                    <td>{{ $p->title }}</td>

                    <td>
                        <form action="{{ route('positions.destroy', $p->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <a href="{{ route('positions.show', $p->id) }}" class="btn btn-primary btn-lg">View</a>
                            <a href="{{ route('positions.edit', $p->id) }}" class="btn btn-secondary btn-lg">Edit</a>
                            <button type="submit" class="btn btn-danger btn-lg">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <a href="{{ url('/') }}" class="btn btn-outline-primary">BACK</a>
    </div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>