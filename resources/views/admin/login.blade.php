<!DOCTYPE html>
<html lang="en">
<head>
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title></title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

  <!-- PLUGINS CSS STYLE -->
  <link href="{{ asset('admin_assets/plugins/toaster/toastr.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin_assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin_assets/plugins/flag-icons/css/flag-icon.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin_assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin_assets/plugins/ladda/ladda.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin_assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin_assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="{{ asset('admin_assets/css/sleek.css') }}" />

  <!-- FAVICON -->
  <link href="admin_assets/img/favicon.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{ asset('admin_assets/plugins/nprogress/nprogress.js') }}"></script>
</head>

</head>
  <body class="bg-light-gray" id="body">
    @if (Session::get('fail'))
        <div class="alert alert-danger alert-highlighted">
            {{ Session::get('fail') }}
        </div>
    @endif
      <div class="container d-flex flex-column justify-content-between vh-100">
      <div class="row justify-content-center mt-5">
        <div class="col-xl-5 col-lg-6 col-md-10">
          <div class="card">
            <div style="background-color: #20d35f; color: #fff;" class="card-header">
              <div style="background-color: #20d35f; color: #fff;" class="app-brand">
                <a href="/index.html">
                    
                    <span class="brand-name" style="padding-left: 50px; margin-left: 0;">Admin Login </span>
                </a>
              </div>
            </div>
            <div class="card-body p-5">
              <h4 class="text-dark mb-5">Sign In</h4>
              <form action="{{ route('admin.check') }}" method="post">
                @csrf
                <div class="row">
                  <div class="form-group col-md-12 mb-4">
                    <input type="email" name="email" class="form-control input-lg" id="email" aria-describedby="emailHelp" placeholder="Username" value="{{ old('email') }}">
                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                </div>
                  <div class="form-group col-md-12 ">
                    <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password" value="{{ old('password') }}">
                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                  </div>
                  <div class="col-md-12">
                    <button style="background-color: #045429; color: #fff;" type="submit" class="btn btn-lg btn-block mb-4">Sign In</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
