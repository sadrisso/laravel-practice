<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link rel="stylesheet" href="style.css">
<title>Welcome</title>
</head>
<body class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="nav ">
            <li class="nav-item">
                <a class="nav-link" href="{{url('client/register')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('client/view')}}">View</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('client/trash')}}">Disabled</a>
            </li>
        </ul>
    </nav>

    <h2 class="m-5 text-center">HI, I am learning laravel</h2>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>