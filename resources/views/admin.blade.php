<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Admin Side</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-title mt-4 d-flex justify-content-center align-items-center">
                        <h4 class="text-center m-3">All Users</h4>
                        <a href="{{ url('/') }}" class="btn btn-primary">Main Page</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-success table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Education</th>
                                        <th>Age</th>
                                        <th>Laptop</th>
                                        <th>Mobile</th>
                                        <th>Tid</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->education }}</td>
                                        <td>{{ $user->age }}</td>
                                        <td>{{ $user->laptop }}</td>
                                        <td>{{ $user->mobile }}</td>
                                        <td>{{ $user->trxIds->tid ?? 'unpaid' }}</td>
                                    </tr>
                                    @empty
                                    <h4>NO User</h4>
                                    @endforelse
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
