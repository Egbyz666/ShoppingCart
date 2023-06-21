<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link
			rel="stylesheet"
			href="{{ asset('front/css/bootstrap.min.css') }}" />
		<script src="{{ asset('front/js/bootstrap.bundle.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('front/fontawesome/css/all.css') }}">
</head>
<body>
    

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
              <form action="/daftar/create" method="post">
  @csrf
<div class="row">
<div class="mb-4 pb-2">
    <div class="form-outline">
    <input type="text" name="name" class="form-control"/>
    <label class="form-label"  >Name</label>
    </div>
</div>
</div>
  
                <div class="row">
                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input type="email" name="email" class="form-control" />
                      <label class="form-label"  >Email</label>
                    </div>
                  </div>
                </div>
  
                <div class="row">
                  <div class="mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="password" name="password" class="form-control" />
                      <label class="form-label"  >Password</label>
                    </div>
  
                  </div>
                </div>
  
  
                <div class="mt-4 pt-2">
                  <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                </div>
  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>