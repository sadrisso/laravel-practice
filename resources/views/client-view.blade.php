<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link rel="stylesheet" href="style.css">
<title>View</title>
</head>
<body class="container">

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($client as $res)
            <tr>
                <td>{{$res->name}}</td>
                <td>{{$res->email}}</td>
                <td>{{$res->password}}</td>
                <td>
                    <a href="{{route('client.edit', ['id' => $res->id])}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('client.trash', ['id' => $res->id])}}" class="btn btn-danger">Trash</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{url('client/delete')}}" class="btn btn-info form-control">Deleted Data</a>
    <a href="{{url('/')}}" class="btn btn-success form-control mt-2">Home</a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>