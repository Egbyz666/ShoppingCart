<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
    <link
			rel="stylesheet"
			href="{{ asset('front/css/bootstrap.min.css') }}" />
		<script src="{{ asset('front/js/bootstrap.bundle.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('front/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <!-- Navbar Brand-->
      {{-- <a class="navbar-brand ps-3" href="index.html">Dashboard</a> --}}
      <!-- Sidebar Toggle-->
      <button class="btn btn-link btn-sm order-1 order-lg-0 ms-4" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
      <!-- Navbar Search-->
      <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
         
      </form>
      <!-- Navbar-->
      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Egi Az  <i class="fas fa-user fa-fw"></i></a>
             
          </li>
      </ul>
  </nav>
  <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
          <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
              <div class="sb-sidenav-menu">
                  <div class="nav">
                      <div class="sb-sidenav-menu-heading">Core</div>
                      <a class="nav-link" href="index.html">
                          <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                          Dashboard
                      </a>
                      <div class="sb-sidenav-menu-heading">Tampilan User</div>
                      <a class="nav-link" href="{{ url('produk/profile') }}">
                          <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                        Profile Shop
                      </a>
                     
                      <a class="nav-link" href="{{ url('produk/addProduk') }}">
                          <div class="sb-nav-link-icon"><i class="fas fa-add"></i></div>
                          Add Product
                      </a>
                      <a class="nav-link" href="{{ url('shoppingCart') }}" >
                          <div class="sb-nav-link-icon"><i class="fas fa-eye"></i></div>
                         Show Data
                      </a>
                   
                     
              <div class="sb-sidenav-footer">
                  <div class="small">Logged in as:</div>
                 Googlegi
              </div>
          </nav>
      </div>
      <div id="layoutSidenav_content">
          <main>
              <div class="container-fluid px-4">
                  <h1 class="mt-4">Dashboard Admin</h1>
                  <ol class="breadcrumb mb-4">
                      <li class="breadcrumb-item active">Dashboard Admin</li>
                  </ol>
                  <table id="example" class="table table-striped text-center" style="width:100%; margin-top: 5%">
                    <thead class="bg-dark">
                        <tr class="text-light">
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Kategori Produk</th>
                            <th>Deskripsi Produk</th>
                            <th>Harga Produk</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $produk as $key => $item)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $item -> namaProduk }}</td>
                            <td>{{ $item -> kategoriProduk }}</td>
                            <td>{{ $item -> deskripsiProduk }}</td>
                            <td>{{ $item -> harga }}</td>
                            <td><img src="/storage/{{ $item -> foto }}" alt="" width="80" height="60"></td>
                            <td>
                            <a href="produk/edit/{{ $item -> id }}"><button class="btn btn-success"><i class="fa fa-edit"></i></button></a>
                            <a href="produk/delete/{{ $item -> id }}"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                            </td>
                    
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                  
              </div>
          </main>
          <footer class="py-4 bg-light mt-auto">
              <div class="container-fluid px-4">
                  <div class="d-flex align-items-center justify-content-between small">
                      <div class="text-muted">Copyright &copy; Egi Azwul F 2023</div>
                      <div>
                          <a href="#">Privacy Policy</a>
                          &middot;
                          <a href="#">Terms &amp; Conditions</a>
                      </div>
                  </div>
              </div>
          </footer>
      </div>
  </div>
  <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
  <script src="{{ asset('js/scripts.js') }}"></script>
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js') }}" crossorigin="anonymous"></script>
  <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
  <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
  <script src="{{ asset('https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js') }}" crossorigin="anonymous"></script>
  <script src="{{ asset('js/datatables-simple-demo.js') }}"></script>
</body>
</html>

