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
        @if($errors->any())
            <ul style="list-style-position: inside; margin: 20px auto; padding: 20; display: table;">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <form method="POST" action="{{route('employee.update', ['employee' => $employee])}}">
        @csrf
        @method('PUT')
        <div class="container rounded-3 bg-dark" style="margin-top: 100px; width: 50%; margin: 25px auto; padding: 20px;">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <form class="bg-dark text-light p-3">
        <div class="form-group mb-4">
          <label class="form-label text-info">Name</label>
          <input type="text" name="name" placeholder="name" class="form-control" value="{{$employee->name}}" style="width:100%;">
        </div>

        <div class="form-group mb-4">
          <label class="form-label text-info">Age</label>
          <input type="number" name="age" min="21" placeholder="age" class="form-control" value="{{$employee->age}}" style="width:100%;">
        </div>

        <div class="form-group mb-4">
          <label class="form-label text-info">Address</label>
          <input type="text" name="address" placeholder="address" class="form-control" value="{{$employee->address}}" style="width:100%;">
        </div>

        <div class="form-group mb-4">
          <label class="form-label text-info">Phone Number</label>
          <input type="text" name="phone" placeholder="phone number" class="form-control" value="{{$employee->phone}}" style="width:100%;">
        </div>

        <div class="form-group d-flex justify-content-end">
          <button type="submit" class="btn btn-danger">Update Employee Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body> 
</html>