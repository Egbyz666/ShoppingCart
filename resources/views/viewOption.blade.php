<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokopaegi</title>
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <script src="{{ asset('front/js/bootstrap.bundle.js') }}"></script>
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
      <div class="container" style="margin-top: 6%;">
        <div class="row">
            <div class="col-6">
                @if (file_exists("storage/".$produk->foto))
                        <img src="/storage/{{ $produk->foto }}" width="100%" alt=""><br>
                        @endif
            </div>
            <div class="col-6">
                <p>SKU: BST-001</p>
                <p>{{ $produk -> kategoriProduk }}</p>
                <h1><b>{{ $produk -> namaProduk }}</b></h1>
                <!-- <span class="text-muted text-decoration-line-through">Rp.20.00</span> -->
                                Rp.{{ $produk -> harga }}

                                <p class="mt-5">{{$produk -> deskripsiProduk}}</p>

                                      <div class="d-flex">
                                        {{-- <input class="form-control btn-outline-dark text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem;"/> --}}
                                        
                                           <a class="btn btn-outline-dark flex-shrink-0" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Buy Now</a> <a class="bi-cart-fill me-1"></a>
                                           <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=6282119334875&text=%22Haloo, Saya Mau Order!!%22">Order from whatsapp  </a>
                                       
                                        <!-- Button trigger modal -->
  
 
                                    </div>
            </div>
        </div>
      </div>
       <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pemesanan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ url('pemesanan/create') }}" class="row g-3 mt-3">
              @csrf
                <div class="col-md-6">
                  <label for="" class="form-label">Nama Produk</label>
                  <input type="text" name="namaProduk" class="form-control" style="background-color: rgb(192, 192, 192)" id="" readonly value="{{ $produk->namaProduk }}">
                </div>
                <div class="col-md-6">
                  <label for="" class="form-label">Harga</label>
                  <input type="number" name="harga" class="form-control" id="" style="background-color: rgb(192, 192, 192)" id="" readonly value="{{ $produk->harga }}">
                </div>
                <div class="col-12">
                  <label for="" class="form-label">Nama</label>
                  <input type="text" name="namaPembeli" class="form-control" id="" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" name="alamatPembeli" class="form-control" id="inputAddress" placeholder="mis. Jln Kejujuran No.99 Samping Gedung DPR">
                </div>
                <div class="col-md-6">
                  <label for="" class="form-label">Whatsapp</label>
                  <input type="number" name="waPembeli" class="form-control" id="">
                </div>
                <div class="col-md-4">
                  <label for="" class="form-label">Quantity</label>
                  <select name="quantity" id="inputState" class="form-select">
                    <option selected>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
            
                <div class="col-12">
                <a type="submit" class="btn btn-danger" data-bs-dismiss="modal" href="">Cancel</a>
                 <button type="submit" class="btn btn-primary">Order now</button>
                 
                </div>
              </form>
        </div>
       
      </div>
    </div>
  </div>
                        
             
                    
      
    <footer class="py-5 bg-dark">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Tokopaegi 2022</p></div>
    </footer>

</body>
</html>