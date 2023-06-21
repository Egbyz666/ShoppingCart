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
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('front/fontawesome/css/all.css') }}">
</head>
<body>
    <div class="container" style="margin-top: 8%">
        <form action="{{ $action }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="namaToko" id="floatingInput" placeholder="Nama Toko" value="{{ $profile -> namaToko }}">
              <label for="">Nama profile</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="slogan" id="floatingInput" placeholder="Kategori" value="{{ $profile -> slogan }}">
              <label for="">Slogan</label>
            </div>
           
              <table>
                <tr>
                    <td>@if (file_exists("storage/".$profile->foto))
                        <img src="/storage/{{ $profile->foto }}" width="90" height="70" alt="" class=" mt-3 rounded-circle"><br>
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