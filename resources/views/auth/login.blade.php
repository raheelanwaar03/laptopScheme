<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('asset/images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Authentication</title>
</head>

<body class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-light">Sign In to Admin Dashboard</h1>
            </div>
        </div>
        <div style="margin-top: -150px" class="row min-vh-100">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <div class="card bg-transparent border-white w-100">
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label style="color:white">Email</label>
                                <input type="text" style="background: transparent;color:white" name="email"
                                    class="form-control" placeholder="Enter Your Email">
                            </div>
                            <div class="form-group">
                                <label style="color:white">Password</label>
                                <input type="password" style="background: transparent;color:white" name="password"
                                    class="form-control" placeholder="Enter Your Password">
                            </div>
                            <button type="submit" class="btn btn-outline-light ">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
