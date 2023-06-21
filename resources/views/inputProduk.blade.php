<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link
			rel="stylesheet"
			href="{{ asset('front/css/bootstrap.min.css') }}" />
		<script src="{{ asset('front/js/bootstrap.bundle.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('front/fontawesome/css/all.css') }}">
</head>
<body>
  
    <div class="container" style="margin-top: 8%">
        <form action="{{ $action }}" method="post" enctype="multipart/form-data">
            @csrf
            <h3 class="bg-secondary text-center" style="border-radius: 6%">Form Input Produk</h3>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="namaProduk" id="floatingInput" placeholder="Nama Produk" value="{{ $produk -> namaProduk }}">
              <label for="">Nama Produk</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="kategoriProduk" id="floatingInput" placeholder="Kategori" value="{{ $produk -> kategoriProduk }}">
              <label for="">Kategori</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="harga" id="floatingInput" placeholder="Kategori" value="{{ $produk -> harga }}">
              <label for="">Harga</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control-lg " rows="6" id="floatingInput" name="deskripsiProduk" cols="113" type="text" placeholder="Deskripsi">{{ $produk->deskripsiProduk }}</textarea>
              </div>
              <table>
                <tr>
                    <td>@if (file_exists("storage/".$produk->foto))
                        <img src="/storage/{{ $produk->foto }}" width="90" height="70" alt="" class=" mt-3 rounded-circle"><br>
                        @endif
                        <input class="form-control-file" type="file" name="foto" id="foto">
                    </td>
                </tr>
              </table>
                
            <div class="mt-3 d-flex justify-content-end mb-5">
                <input class="btn btn-primary d-flex justify-content-end me-3" type="submit" value="{{ $tombol }}">
              </div>
              
          </form>
          
    </div>
    </div>
    </div>  
</body>
</html>