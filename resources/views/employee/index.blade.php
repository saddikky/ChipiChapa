<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand fs-2" href="#">ChipiChapa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fs-4" href="{{route('employee.home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-4" aria-current="page" href="{{route('employee.index')}}">Employee List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4" href="{{route('employee.add')}}">Add Employee</a>
                    </li>
                    <li class="nav-item">
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div>
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert" style="border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 40%; margin: 20px auto; padding: 10px 20px;">
            {{ session('success') }}
        </div>
        @endif
    </div>

    <div>
        <div class="bg-dark rounded-3 text-light p-3" style="width: 80%; margin: 25px auto;">
            <table border="2" class="table table-striped" style="width:80%; margin-left: auto; margin-right: auto;" >
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">Delete</th>
                </tr>

                @foreach($employees as $employee)
                <tr>
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->age}}</td>
                    <td>{{$employee->address}}</td>
                    <td>{{$employee->phone}}</td>
                    <td class="text-center">
                    <button class="btn btn-primary" style="background-color: #007bff; border-color: #007bff;">
                        <a href="{{route('employee.edit', ['employee' => $employee])}}" style="color: #fff; text-decoration: none;">Edit</a>
                    </button>
                    </td>
                    <td class="text-center">
                        <form method="post" action="{{route('employee.destroy', ['employee' => $employee])}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>