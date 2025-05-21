<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
        <link rel="icon" href="img/favicon.png">

    <link rel="stylesheet" href="../vendor/login/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../vendor/login/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendor/login/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/login/css/style.css">

    <style>
      #bgg {
        background-image: url('../img/bgg6.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
      }
      .error{
        color:red;
      }
    </style>
    <title>Abraham Cuisine</title>
  </head>
  <body>
<form method="POST" action="{{ route('login') }}">
@csrf
  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" id="bgg"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7" id="loginForm">
            <h3>Login to <strong>Abraham Cuisine</strong></h3>
            <p class="mb-4">Patuloy na Tikman ang Sarap ng Pagkaing Abraham's Cuisine 🤤</p>
            <form action="#" method="post">
              <div class="form-group first">
                <label for="username">Email Address</label>
                {{-- <input type="text" class="form-control" placeholder="Email Address" id="username"> --}}
                <x-text-input id="email" class="form-control" placeholder="Email Address" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error class="error" :messages="$errors->get('email')" />
            </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                {{-- <input type="password" class="form-control" placeholder="Password" id="password"> --}}
            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="current-password" />

            <x-input-error class="error" :messages="$errors->get('password')" class="mt-2" />
              </div>
              
              {{-- <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div> --}}

            <x-primary-button class="btn btn-block btn-primary">
            {{ __('Log in') }}
            </x-primary-button>
              {{-- <input type="submit" value="Log In" class="btn btn-block btn-primary"> --}}
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
    
  <!-- Vendor JS -->
  <script src="../vendor/login/js/jquery-3.3.1.min.js"></script>
  <script src="../vendor/login/js/popper.min.js"></script>
  <script src="../vendor/login/js/bootstrap.min.js"></script>
  <script src="../vendor/login/js/main.js"></script>

  <!-- ✅ GSAP CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

  <!-- ✅ GSAP Animations -->
  <script>
    gsap.from("#bgg", {
      x: 200,
      opacity: 0,
      duration: 1,
      ease: "power3.out"
    });

    gsap.from("#loginForm", {
      y: 50,
      opacity: 0,
      delay: 0.5,
      duration: 1,
      ease: "power2.out"
    });
  </script>
  </body>
</html>
