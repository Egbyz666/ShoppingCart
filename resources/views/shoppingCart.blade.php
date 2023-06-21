<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokopaegi</title>
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">Egi Azwul F</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown01">
                  <li><a class="dropdown-item" href="#">All Product</a></li>
                  <li><a class="dropdown-item" href="#">Item Popular</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> --}}
            </ul>
            {{-- <form class="d-flex">
                <button class="btn btn-outline-light" type="submit">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-light text-dark ms-1 rounded-pill">0</span>
                </button>
            </form> --}}
          </div>
        </div>
      </nav>
      <header class="bg-secondary py-5">
        <div class="container px-4 px-lg-5 mt-5">
          @foreach ($profile as $key => $item )
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder"><img src="/storage/{{ $item->foto }}" width="150" height="100" alt=""></h1>
                <h5 class="lead fw-normal text-white-50 mb-0">{{ $item->slogan }}</h5>
            </div>
            @endforeach 
        </div>
    </header>
       <!-- Section-->
       <section class="py-5">
        
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                
                @foreach ($produk as $key => $item )
                <div class="col mb-5">
                    
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="/storage/{{ $item -> foto }}"  alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                {{ $item->namaProduk }}
                                <h5 class="fw-bolder">{{ $item->kategoriProduk }}</h5>
                                <!-- Product price-->
                                {{ $item->harga }}
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="produk/option/{{ $item -> id }}">View options</a></div>
                        </div>
                    </div>
                </div>
                @endforeach

               
						

    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Tokopaegi 2022</p></div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
</html>

                
            </div>
        </div>
    </section>
      
</body>
</html>