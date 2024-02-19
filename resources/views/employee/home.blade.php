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
            <a class="nav-link active fs-4" href="{{route('employee.home')}}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link fs-4" aria-current="page" href="{{route('employee.index')}}">Employee List</a>
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

    <div class="container text-center" style="margin-top: 100px; margin: 25px auto; padding: 20px;">
  <h1 class="display-4">Selamat Datang di PT ChipiChapa</h1>
  <p class="lead">PT ChipiChapa merupakan software house terkemuka di masyarakat. Kami menghasilkan kualitas produk yang terbaik dan selalu menjadi pilihan pertama bagi perusahaan-perusahaan yang membutuhkan jasa pembuatan software. Kami menerima lebih dari 600.000 proyek per tahun.</p>
  <div class="row">
    <div class="col-md-4">
      <h3>Kualitas Produk</h3>
      <p>Kami menjamin kualitas produk yang dibuat oleh tim kami. Kami bekerja sama dengan klien kami untuk memahami kebutuhan dan mengembangkan produk yang sesuai dengan kebutuhan tersebut.</p>
    </div>
    <div class="col-md-4">
      <h3>Pelayanan Terbaik</h3>
      <p>Kami menawarkan pelayanan terbaik kepada klien kami. Kami menjaga komunikasi yang baik dan transparan selama proyek, dan siap membantu klien kami setelah proyek selesai.</p>
    </div>
    <div class="col-md-4">
      <h3>Pengalaman Banyak</h3>
      <p>Kami memiliki tim yang berpengalaman dan terampil dalam pembuatan berbagai jenis software. Kami telah bekerja sama dengan banyak perusahaan dan institusi, dan telah membuat banyak produk yang sukses.</p>
    </div>
  </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>