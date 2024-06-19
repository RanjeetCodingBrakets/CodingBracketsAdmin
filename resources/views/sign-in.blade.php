<!DOCTYPE html>
<html lang="en">
<head>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login In Page</title>
    @include('include.headLink')
  </head>
</head>
<body class="bg-light-gray" id="body">
  <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
    <div class="d-flex flex-column justify-content-between">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
          <div class="card card-default mb-0">
            <div class="card-header pb-0">
              <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                <a class="w-auto pl-0" href="">
                  <img src="{{ asset('assets/static/images/logo.png') }}" alt="CondingBrackets">
                  <span class="brand-name text-dark">ADMIN PANEL</span>
                </a>
              </div>
            </div>
            <div class="card-body px-5 pb-5 pt-0">
              <h4 class="text-dark mb-6 text-center">Sign In</h4>
              <form action="/admin/adminlogin" method="post">
                @csrf
                <div class="row">
                  <div class="form-group col-md-12 mb-4">
                    <input name="email" type="email" class="form-control input-lg" id="email" aria-describedby="emailHelp" placeholder="Email">
                  </div>
                  <div class="form-group col-md-12 ">
                    <input name="password" type="password" class="form-control input-lg" id="password" placeholder="Password">
                  </div>
                  <div class="col-md-12">
                    <div class="d-flex justify-content-between mb-3">
                      <div class="custom-control custom-checkbox mr-3 mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">Remember me</label>
                      </div>
                      <a class="text-color" href=""> Forgot password? </a>
                    </div>
                    <button type="submit" class="btn btn-primary btn-pill mb-4">Sign In</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>