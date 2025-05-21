  <!doctype html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Abraham's Cuisine</title>
  <link rel="icon" href="img/favicon.png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/gijgo.min.css">
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- Add Font Awesome to your project -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">  

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Styles / Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <link rel="stylesheet" href="{{ asset('css/food_menu.css') }}">

  <style>
    html, body {
  overflow-x: hidden;
}
  /* Enable smooth scroll */
  html {
  scroll-behavior: smooth;
  }

  /* Styling for visual effect */
  body {
  font-family: Arial, sans-serif;
  }
  .nav-item {
  display: block !important;
  visibility: visible !important;
  z-index:99999;
  background-color: white;
  }

  .custom-container {
  width: 90%;
  margin: 0 auto; /* centers the div */
  }

  #scroll-target:focus {
    outline: 2px solid #f00;
    outline-offset: 4px;
}
  .banner_part:after {
    width: 100%;
    height: 100%;
    position: absolute;
    content: "";
    bottom: -100px; /* Adjusted further down */
    z-index: -1;
    background: url(../img/{{$array['banner_image_overlay']->section_image}}) bottom right no-repeat;
    right: 19%;
  }

  .banner_part {
    height: 900px;
    position: relative;
    /* background-color:red; */
    /* background-image: url(../img/{{$array['banner_image']->section_image}});
    background-repeat: no-repeat;
    background-size: 41%;
    background-position: top right; */
  }

    .trapezoid {
      --p: 100px;
      width: 38%;
      aspect-ratio: 2 / 3;
      clip-path: polygon(0 var(--p), 0 calc(100% - var(--p)), 100% 100%, 100% 0);
      float: right;
      margin-top:-100px;
      overflow: hidden;
      position: relative;
    }

    .trapezoid img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }
  .exclusive_item_part:after {
    width: 100%;
    height: 100%;
    position: absolute;
    content: "";
    bottom: -250px;
    z-index: -1;
    background: url(../img/{{$array['sidebar_logo_1']->section_image}}) bottom right no-repeat;
    background-size: 15% 65%;
    right: 0px;
  }

  .about_bg:after {
    width: 100%;
    height: 100%;
    position: absolute;
    content: "";
    bottom: 133px;
    z-index: -1;
    background: url(../img/{{$array['sidebar_logo_2']->section_image}}) bottom right no-repeat;
    background-size: 15% 60%;
    right: 0px;
  }


  .circle {
        width: 400px;
        height: 400px;
        background-color: #4B5320;
        border-radius: 50%;
        overflow: hidden; /* Ensures image stays within the circle */
        display: flex;
        align-items: center;
        justify-content: center;
      }

  .about_img img{
    width: 100%;
        height: 100%;
        object-fit: cover; /* Keeps aspect ratio while covering the div */
        display: block;

  }

  .product-img {
      width: 80px;
      height: 80px;
      object-fit: cover;
      border-radius: 8px;
    }
    .product-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 15px;
      background-color: #fff;
    }
    .price {
      font-weight: bold;
    }
    .total-section {
      border-top: 2px solid #eee;
      padding-top: 15px;
    }

  
  @media only screen and (min-width: 276px) and (max-width: 475px) {
    .trapezoid {
      display: none;
    }
    .circle {
    width: 320px;
    height: 320px;
    background-color: #4B5320;
    border-radius: 50%;
    overflow: hidden;
    display: flex
;
    align-items: center;
    justify-content: center;
}
  }

  @media (max-width: 576px) {
    .trapezoid {
      display: none;
    }
  } 

  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .trapezoid {
      display: none;
    }
  }


    @media only screen and (min-width: 992px) and (max-width: 1200px) {
       .trapezoid {
      display: none;
      }
    }

    @media only screen and (min-width: 768px) and (max-width: 991px) {
  .trapezoid {
      display: none;
    }
    }




  </style>
  </head>

  <body>
  <header class="main_menu home_menu">
  <div class="container custom-container">
  <div class="row align-items-center">
  <div class="col-lg-12">
  <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="https://srv766420.hstgr.cloud"> <img class="" src="img/{{$array['menu_logo']->section_image}}" alt="logo" height="70" width="250"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
  <ul class="navbar-nav">
  <li class="nav-item">
  <a class="nav-link" href="#">Home</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="#about-page">About</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="#menu-page">Menu</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="#contact-page">Contact</a>
  </li>
  </ul>
  </div>

  <nav class="flex space-x-6 items-center">
  <a href="/login" class="flex items-center text-gray-700 hover:text-blue-500">
  <img src="./img/icon/login.png" alt="Login Icon" class="w-8 h-6 pr-2">
  </a>

  <!-- <a href="https://abraham-cuisine.test/register" class="flex items-center text-gray-700 hover:text-blue-500">
  <img src="{{ asset('img/icon/register.png') }}" alt="Register Icon" class="w-8 h-6 pr-4 pl-1">
  </a> -->
  <a href="/login" class="flex items-center text-gray-700 hover:text-blue-500">
  <img src="./img/icon/register.png" alt="Login Icon" class="w-8 h-6 pr-2">
  </a>
  </nav>

  <div class="menu_btn">
  <a href="#reservation-page" class="btn_1 d-none d-sm-block">book now</a>
  </div>
  </nav>
  </div>
  </div>
  </div>
  </header>
  <!-- Header part end-->
  <div class="trapezoid">
    <img src="../img/{{$array['banner_image']->section_image}}" alt="Curved Shape" />
    <!-- <img src="banner_bg.png" alt="Curved Shape" /> -->
  </div>
  <!-- Banner Part Start -->
  <section class="banner_part">

  <div class="container custom-container">
  <div class="row align-items-center">
  <!-- Text Section -->
  <div class="col-lg-12">
  <div class="banner_text">
  <div class="banner_text_iner">
  <h5>{{$array['banner_title']->section_text}}</h5>
  <h1>{{$array['banner_sub_title']->section_text}}</h1>
  <p>
  {{$array['banner_body']->section_text}}
  </p>
  <div class="banner_btn">
  <div class="banner_btn_iner">
  <!-- New Reservation Button with a different icon -->
  <a href="#reservation" class="btn_2">
  Reservation 
  <i class="fa fa-calendar-check" aria-hidden="true"></i> <!-- New Reservation Icon -->
  </a>
  </div>

  <!-- New Watch Button with a different icon -->
  <a href="img/open.mp4" class="popup-youtube video_popup">
  <span><i class="fa fa-play-circle" aria-hidden="true"></i></span> Watch <!-- New Watch Icon -->
  </a>
  </div>

  </div>
  </div>
  </div>

  <!-- Carousel Section -->
  {{-- <div class="col-lg-6">
  <div id="foodCarousel" class="carousel slide move-right-padding" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-inner">
  @foreach($background as $background_item)
  <div class="carousel-item active">
  <img src="{{ asset('uploads/carousel/' . $background_item->image) }}" class="d-block mx-auto carousel-img" alt="img 1">
  </div>
  @endforeach
  </div>
  </div>
  </div> --}}
  </div>
  </section>
  <!-- Banner Part End -->

  <!-- Add CSS for Circular Images -->
  <style>
  .carousel-item img {
  width: 500px;
  height: 450px;
  object-fit: cover;
  border-radius: 50%;
  cursor: pointer;
  }

  </style>

  <script>
  document.addEventListener("DOMContentLoaded", function () {
  let myCarousel = new bootstrap.Carousel(document.querySelector("#foodCarousel"), {
  interval: 3000, // Auto-slide every 3 seconds
  ride: "carousel"
  });

  document.querySelectorAll(".carousel-img").forEach(img => {
  img.addEventListener("click", function () {
  myCarousel.next(); // Move to the next slide on image click
  });
  });
  });
  </script>

  <!-- Add Bootstrap JS (if not already included in your layout) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>





  <!--::exclusive_item_part start::-->
  <section class="exclusive_item_part blog_item_section">
  <div class="container custom-container">
  <div class="row">
  <div class="col-xl-5">
  <div class="section_tittle">
  <p>{{$array['blog_title']->section_text}}</p>
  <h2>{{$array['blog_sub_title']->section_text}}</h2>
  </div>
  </div>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">    
  @foreach($exclusive as $exclusive_item)
  <!-- Item 1 -->
  <div class="bg-white rounded-lg shadow-md overflow-hidden">
  <div class="h-64 bg-gray-100 flex items-center justify-center">
  <img src="uploads/products/{{$exclusive_item->image_name}}" alt="INIHAW FIESTA" class="h-full w-auto object-contain">
  </div>
  <div class="p-6 text-center">
  <h3 class="text-lg font-bold text-gray-800">{{$exclusive_item->name}}</h3>
  <p class="text-gray-600 mt-2">{{$exclusive_item->description}}</p>
  </div>
  </div>
  @endforeach



  </section>
  <!--::exclusive_item_part end::-->

  <!-- about part start-->
  <section id="about-page" class="about_part">
  <div class="container custom-container">
  <div class="row align-items-center">
  <div class="col-sm-4 col-lg-5 offset-lg-1">
  <div class="circle">
    <div class="about_img">
      <img src="img/{{$array['about_logo']->section_image}}">
      </div>
  </div>

  </div>
  <div class="col-sm-8 col-lg-4">
  <div class="about_text">
  <h5>{{$array['about_title']->section_text}}</h5>
  <h2>{{$array['about_sub_title']->section_text}}</h2>
  <p>
  {{$array['about_body']->section_text}}
  </p>
  </div>
  </div>
  </div>
  </div>
  </section>
  <!-- about part end-->

  <!-- about part start-->
  <section class="about_part about_bg">
  <div class="container custom-container">
  <div class="row align-items-center">
  <div class="col-sm-4 col-lg-5 offset-lg-1">
    <div class="circle">
      <div class="about_img">
        <img src="img/{{$array['history_logo']->section_image}}" alt="">
        </div>
    </div>

  </div>
  <div class="col-sm-8 col-lg-4">
  <div class="about_text">
  <h5>{{$array['history_title']->section_text}}</h5>
  <h2>{{$array['history_sub_title']->section_text}}</h2>
  <h4>{{$array['history_sub_h_title']->section_text}}</h4>
  <p>
  {{$array['history_body']->section_text}}
  </p>
  </div>
  </div>
  </div>
  </div>
  </section>
  <!-- about part end-->

  <section class="Fmenu_bg" id="menu-page">
  <div class="container custom-container">
  <div class="row">
  <div class="col-lg-12">
  <div class="Fmenu_iner text-center">
  <div class="Fmenu_iner_item">
  <h2>{{$array['food_title']->section_text}}</h2>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>

  <!-- food_menu start-->
  <section class="food_menu gray_bg">
  <div class="container custom-container">
  <div class="row justify-content-between">
  <div class="col-lg-5">
  <div class="section_tittle" style="margin-top: -100px;">
  <p>{{$array['food_menu_part_title']->section_text}}</p>
  <h2>{{$array['food_menu_part_sub_title']->section_text}}</h2>
  </div>
  </div>
  <div class="col-lg-6">
  <div class="nav nav-tabs food_menu_nav" id="myTab" role="tablist">
  {{-- <a class="active" id="Special-tab" data-toggle="tab" href="#Special" role="tab"
  aria-controls="Special" aria-selected="false">Special <img src="img/icon/play.svg" alt="play"></a> --}}
  </div>
  </div>

  <!--Special-->
  <div class="col-lg-12">
  <div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active single-member" id="Special" role="tabpanel"
  aria-labelledby="Special-tab">
  <div class="row">
  @foreach($normal as $normal_item)
  <div class="col-sm-6 col-lg-6">
  <div class="single_food_item media">
  <img src="{{ asset('uploads/products/'.$normal_item->image_name) }}" class="mr-3" alt="..." style="width: 250px; height: 150px;">

  <div class="media-body align-self-center">
      <h3>{{$normal_item->name}}</h3>
      <p>{{$normal_item->description}}</p>
      <p>{{$normal_item->pax}} pax</p>
      <h5>₱{{$normal_item->price}}</h5>
      <button onclick="addOption('{{$normal_item->name}}','{{$normal_item->id}}','{{$normal_item->preparation_time}}','{{$normal_item->image_name}}','{{$normal_item->description}}','{{$normal_item->price}}')" style="background-color:blue" class="mt-1 block mt-4 px-6 py-3 text-white b order-black-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
      Add to Reservation
      </button>
  </div>

  </div>

  </div>

  @endforeach
                  
  </div>
  </div>


  <!--Value Meal-->
  <div class="tab-pane fade single-member" id="Launch" role="tabpanel"
  aria-labelledby="Launch-tab">
  <div class="row">
  @foreach($normal as $normal_item)
  <div class="col-sm-6 col-lg-6">
  <div class="single_food_item media">
  <img src="{{ asset('uploads/products/'.$normal_item->image_name) }}" class="mr-3" alt="..." style="width: 250px; height: 150px;">
  <div class="media-body align-self-center">
      <h3>{{$normal_item->name}}</h3>
      <h5>₱ {{$normal_item->price}}</h5>
  </div>
  </div>
  </div>
  @endforeach

  </div>
  </div>

  </div>
  </div>
  </div>
  </div>
  </section>
  <!-- food_menu part end-->

  <!--::reservation_part start::-->
  {{-- reservation --}}



  <div id="reservation-page" class="container custom-container mx-auto p-6">
  <h2 class="text-2xl font-semibold mb-6">Create a Reservation</h2>

  @if(session('success'))
  <div id="scroll-target">
  {{-- {{ session('success') }} --}}
  </div>
  @endif

@if($errors->has('error'))
    <div id="scroll-target" tabindex="-1">
        {{-- {{ $errors->first('error') }} --}}
    </div>
@endif

   @include('layouts.message')
  <!-- Reservation Form -->
  <form id="form" action="{{ route('reservations.store') }}" method="POST" enctype="multipart/form-data">
  @csrf <!-- CSRF token for security -->
  <div class="space-y-4" id="reservation">
  <div class="row">
    <!-- First Name -->
    <div class="col-sm-4">
      <label for="Firstname" class="block text-sm font-medium text-gray-700">First Name:</label>
      <input type="text" id="first_name" name="first_name"
      class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
      value="{{ old('first_name') }}">
      @error('first_name')
      <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
      @enderror
      </div>

      <!-- Middle Name -->
      <div class="col-sm-4">
        <label for="fullname" class="block text-sm font-medium text-gray-700">Middle Name:</label>
        <input type="text" id="middle_name" name="middle_name"
        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
        value="{{ old('middle_name') }}">
        @error('middle_name')
        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror
      </div>
      <!-- Last Name -->
      <div class="col-sm-4">
        <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name:</label>
        <input type="text" id="last_name" name="last_name"
        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
        value="{{ old('last_name') }}">
        @error('last_name')
        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror
      </div>
  </div>

  <!-- Contact -->
  <div>
  <label for="contact" class="block text-sm font-medium text-gray-700">Contact:</label>
  <input type="number" id="contact" name="contact" name="number" 
  class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
  value="{{ old('contact') }}">
  @error('contact')
  <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
  @enderror
  </div>

  <!-- Email -->
  <div>
  <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
  <input type="email" id="email" name="email"
  class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
  value="{{ old('email') }}">
  @error('email')
  <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
  @enderror
  </div>

  <div>
  <label for="address" class="block text-sm font-medium text-gray-700">Province:</label>
  <select id="province_select" name="province_select"
  class="select2-multiple form-control">
  <option selected disabled>Select Province</option>
  @foreach ($province as $item)
      <option value="{{ $item->code }}">{{ $item->name }}</option>
  @endforeach
  </select>
  @error('province')
  <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
  @enderror
  </div>

  <div>
  <label for="address" class="block text-sm font-medium text-gray-700">Municipality:</label>
  <select class="select2-multiple form-control" name="town_select"
  id="town_select">
  </select>
  @error('province')
  <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
  @enderror
  </div>

  <div>
  <label for="address" class="block text-sm font-medium text-gray-700">Barangays:</label>
  <select class="select2-multiple form-control" name="barangay_select"
  id="barangay_select">
  </select>
  @error('province')
  <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
  @enderror
  </div>

  <!-- TABLE PAX -->
  <div>
  <label for="address" class="block text-sm font-medium text-gray-700">Table Per Pax:</label>
  <input type="text" id="pax" name="pax"
  class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
  value="{{ old('pax') }}">
  @error('pax')
  <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
  @enderror
  </div>

  <div>
  <label for="address" class="block text-sm font-medium text-gray-700">Food your order:</label>
  <select id="food_order" name="food_order[]" multiple="multiple" style="width:1000px;">
  </select>
  @error('pax')
  <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
  @enderror
  </div>

  <div style="display:none">
  <label for="address" class="block text-sm font-medium text-gray-700">Food your order:</label>
  <select id="time_preparation" name="time_preparation[]" multiple="multiple" style="width:1000px;">
  </select>
  @error('pax')
  <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
  @enderror
  </div>

  <div>
  <label for="table" class="block text-sm font-medium text-gray-700">Table:</label>
  <select id="table" name="table"
  class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
  <option value="">Select a table</option>
  @foreach (range(1, 10) as $tableNumber)
  <option value="{{ $tableNumber }}"
  {{ old('table') == $tableNumber ? 'selected' : '' }}>
  Table {{ $tableNumber }}
  </option>
  @endforeach
  </select>
  @error('table')
  <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
  @enderror
  </div>

  <!-- Schedule -->
  <div>
  <label for="schedule" class="block text-sm font-medium text-gray-700">Schedule:</label>
  <input type="text" id="schedule" name="schedule"
  min={new Date().toISOString().split('T')[0]}
  class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
  value="{{ old('schedule') }}">
  @error('schedule')
  <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
  @enderror
  </div>

  <!-- Time of Arrival -->
  <div>
  <label for="fullname" class="block text-sm font-medium text-gray-700">Time of Arrival:</label>
  <input type="time" id="time_arrival" name="time_arrival"
  class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
  value="{{ old('time_arrival') }}">
  @error('time_arrival')
  <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
  @enderror
  </div>

    <!-- Time of Departure -->
  <div>
  <label for="fullname" class="block text-sm font-medium text-gray-700">Time of Departure:</label>
  <input type="time" id="time_departure" name="time_departure"
  class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
  value="{{ old('time_departure') }}">
  @error('time_departure')
  <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
  @enderror
  </div>

  <div>
  <lable><b>The schedule will be 10am to 9pm</b></lable>
  </div>


  <!-- Payment Method -->
  <div class="row">
  <div class="col-sm-10">
  <label for="payment_method" class="block text-sm font-medium text-gray-700">Attach Payment Reciept:</label>
  <input
   id="submitBtn"
  type="file" id="payment_method" name="payment_method"
  class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
  value="{{ old('payment_method') }}">
  @error('payment_method')
  <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
  @enderror
  </div>
  <div class="col-sm-2">
  <img src="img/{{$array['qrcode_logo']->section_image}}" width="500" height="500">
  </div>
  </div>

  <div>
  <center><label><b>50% downpayment per reservation</b></label></center>
  </div>




  {{-- <!-- Status -->
  <div>
  <label for="status" class="block text-sm font-medium text-gray-700">Status:</label>
  <select id="status" name="status"
  class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
  required>
  <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
  <option value="confirmed" {{ old('status') == 'confirmed' ? 'selected' : '' }}>Confirmed
  </option>
  <option value="cancelled" {{ old('status') == 'cancelled' ? 'selected' : '' }}>Cancelled
  </option>
  </select>
  @error('status')
  <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
  @enderror
  </div> --}}


  <!-- Submit Button -->
  <div>
  <button type="button" onclick="reserve()"
  class="w-full mt-4 px-6 py-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
  Create Reservation
  </button>
  </div>
  </div>


  <!-- Product Modal -->
<div style="z-index:999999;" class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    
      <div class="modal-header">
        <h5 class="modal-title" id="productModalLabel">Our Products</h5>
        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
      </div>
      
      <div class="modal-body">
      <h2 class="mb-4">Your Reservation</h2>

        <div class="row container my-5" id="product-list">
          <!-- Products will be injected here by JavaScript -->
        </div>
      </div>
        
      <div class="modal-footer">
        <button type="" class="btn btn-secondary" data-bs-dismiss="modal">Submit</button>
      </div>
      
    </div>
  </div>
</div>


  </form>
  <script>
  // Disable past dates for datetime-local input
  document.addEventListener("DOMContentLoaded", function () {
  const scheduleInput = document.getElementById("schedule");
  const now = new Date();
  const formattedDate = now.toISOString().slice(0, 16); // Format date to YYYY-MM-DDTHH:MM
  scheduleInput.setAttribute("min", formattedDate); // Set the minimum date to the current date and time
  });
  </script>
  </div>
  <!--::reservation_part end::-->

  <!-- intro_video_bg start-->
  <section class="intro_video_bg">
  <div class="container custom-container">
  <div class="row">
  <div class="col-lg-12">
  <div class="intro_video_iner text-center">
  <h2>Let's Celebrate</h2>
  <div class="intro_video_icon">
  <a id="play-video_1" class="video-play-button popup-youtube"
  href="./img/{{$array['video_part']->section_video}}">
  <span class="ti-control-play"></span>
  </a>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  <!-- intro_video_bg part start-->

  <!-- footer part start-->
  <footer class="footer-area" id="contact-page" style="background-color: rgb(254, 254, 250);">
  <div class="container custom-container">
  <div class="row">
  <div class="col-xl-3 col-sm-6 col-md-4" style="padding-right: 20px;">
  <div class="single-footer-widget footer_1">
  <h4>Find Us</h4>
  <div class="container">
  <iframe 
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.214766955787!2d121.4395333745673!3d14.267319585150524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397fcca70bd218b%3A0xe468b6dc678e87a0!2sAbraham&#39;s%20Cuisine%20and%20Catering%20Services!5e1!3m2!1sen!2sph!4v1735942241225!5m2!1sen!2sph" 
  width="100%" 
  height="200" 
  style="border:0;" 
  allowfullscreen="" 
  loading="lazy" 
  referrerpolicy="no-referrer-when-downgrade">
  </iframe>
  </div>
  </div>
  </div>

  <div class="col-xl-3 col-sm-6 col-md-2 col-lg-3">
  <div class="single-footer-widget footer_2">
  <h4>Important Link</h4>
  <div class="contact_info" style="margin-top: -15px;">
  <ul>
  <li><a href="https://www.facebook.com/AbramsCuisine"><img src="./img/Facebook.png" alt="FB" style="width: 30px; min-height: 30px; margin-right: 10px;"></a>FACEBOOK</li>
  <li><a href="https://www.instagram.com/abramscuisine2016/?hl=en"><img src="./img/instagram.png" alt="IG" style="width: 30px; min-height: 30px; margin-right: 10px;"></a>INSTAGRAM</li>
  <li><a href="https://mail.google.com/mail/u/0/#search/abramscuisine01%40gmail.com?compose=new"><img src="./img/email.png" alt="EMAIL" style="width: 30px; min-height: 30px; margin-right: 10px;"></a>EMAIL</li>
  <li><a href="https://mail.google.com/mail/u/0/#search/abramscuisine01%40gmail.com?compose=new"><img src="./img/qrcode.png" alt="EMAIL" style="width: 300px; min-height: 300px; margin-right: 10px;"></a>Scan me</li>
  </ul>
  </div>
  </div>
  </div>
  <div class="col-xl-3 col-sm-6 col-md-4">
  <div class="single-footer-widget footer_2">
  <h4>{{$array['contact_us_title']->section_text}}</h4>
  <div class="contact_info" style="margin-top: -15px;">
  <p>{{$array['contact_us_address']->section_text}}</p>
  <p>{{$array['contact_us_phone_no']->section_text}}</p>
  <p>{{$array['contact_us_email']->section_text}}</p>
  </div>
  </div>
  </div>
  <div class="col-xl-3 col-sm-8 col-md-6" style="padding-left: 60px;">
  <div class="single-footer-widget footer_3">
  <h4>{{$array['newsletter_title']->section_text}}</h4>
  <p style="margin-top: -15px;">{{$array['newsletter_psalm_body']->section_text}}</p>
  <link rel="stylesheet" href="https://mail.google.com/mail/u/0/#inbox">
  <form id="emailForm" action="javascript:void(0);">
  <div class="form-group">
  <div class="input-group mb-3">
  <input type="email" id="emailInput" class="form-control" placeholder="Email Address"
      onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" required>
  <div class="input-group-append">
      <button class="btn" type="button" onclick="submitEmail()">
          <i class="fas fa-paper-plane"></i>
      </button>
  </div>
  </div>
  </div>
  </form>

  <!-- Confirmation Message -->
  <p id="confirmationMessage" style="display: none; color: green; margin-right: -50px; margin-top: -10px;">Thank you! Your email has been submitted.</p>
<!-- jQuery UI -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>
  <script>
  $("#schedule").datepicker({
  dateFormat: "yy-mm-dd",
  minDate: 0 
  });

  function handleClick() {
  const btn = document.getElementById('submitBtn');
  btn.disabled = true;
  btn.innerText = 'Loading...';

  setTimeout(() => {
  btn.disabled = false;
  btn.innerText = 'Submit';
  }, 5000); // 5 seconds
  }
  function submitEmail() {
  // Get the email address from the input field
  const emailInput = document.getElementById('emailInput');
  const confirmationMessage = document.getElementById('confirmationMessage');

  // Simple validation
  if (emailInput.value === '') {
  alert("Please enter a valid email address.");
  return;
  }

  // Show confirmation message
  confirmationMessage.style.display = 'block';

  // Clear the input field
  emailInput.value = '';
  }
  </script>
  </div>
  </div>
  </div>

  </div>
  <p style="background-color: #fff; margin-top: 20px; margin-bottom: -30px; text-align: center;">&copy; 2024 ABRAHAM'S CUISINE. All rights reserved.</p>

  <!-- footer part end-->



  <script src="js/jquery-1.12.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.magnific-popup.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/masonry.pkgd.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/gijgo.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/custom.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
  <script>
   document.addEventListener('DOMContentLoaded', function () {
       @if(session('scrollTo'))
            const el = document.getElementById('{{ session('scrollTo') }}');
            if (el) {
                el.scrollIntoView({ behavior: 'smooth', block: 'center' });
                el.focus({ preventScroll: true });
            }
        @endif
    });
function reserve(){
      const modalElement = document.getElementById('productModal');
    const modal = new bootstrap.Modal(modalElement);
    modal.show();
}
$("#form").validate({
    rules: {
      first_name: {
        required: true,
        minlength: 2
      },
      middle_name: {
         required: true,
        minlength: 2
      },
      last_name: {
        required: true,
        minlength: 2
      },
      contact: {
        required: true,
        digits: true,
        minlength: 7,
        maxlength: 11,
      },
      email: {
        required: true,
        email: true
      },
      province_select: {
        required: true
      },
      town_select: {
        required: true
      },
      barangay_select: {
        required: true
      },
      pax: {
        required: true,
        digits: true,
        min: 1
      },
      "food_order[]": {
        required: true
      },
      table: {
        required: true
      },
      schedule: {
        required: true,
        date: true
      },
      time_arrival: {
        required: true,
        time: true
      },
      time_departure: {
        required: true,
        time: true
      },
      payment_method: {
        required: true,
        extension: "jpg|jpeg|png|pdf"
      }
    },
    messages: {
      first_name: {
        required: "Please enter your first name",
        minlength: "First name must be at least 2 characters"
      },
      last_name: {
        required: "Please enter your last name",
        minlength: "Last name must be at least 2 characters"
      },
      contact: {
        required: "Please enter your contact number",
        digits: "Please enter only digits",
        minlength: "Contact number must be at least 7 digits",
        maxlength: "Contact number can't exceed 15 digits"
      },
      email: {
        required: "Please enter your email",
        email: "Please enter a valid email address"
      },
      province_select: "Please select a province",
      town_select: "Please select a municipality",
      barangay_select: "Please select a barangay",
      pax: {
        required: "Please enter the number of pax",
        digits: "Please enter a valid number",
        min: "Pax must be at least 1"
      },
      "food_order[]": "Please select at least one food order",
      table: "Please select a table",
      schedule: {
        required: "Please select a schedule date",
        date: "Please enter a valid date"
      },
      time_arrival: "Please select your time of arrival",
      time_departure: "Please select your time of departure",
      payment_method: {
        required: "Please upload your payment receipt",
        extension: "Allowed file types: jpg, jpeg, png, pdf"
      }
    },
    errorElement: 'p',
    errorPlacement: function(error, element) {
      error.addClass('mt-1 text-sm text-red-500');
      if (element.prop('type') === 'file') {
        error.insertAfter(element);
      } else if (element.hasClass('select2-hidden-accessible')) {
        error.insertAfter(element.next('span.select2'));
      } else {
        error.insertAfter(element);
      }
    },
    highlight: function(element) {
      $(element).addClass('border-red-500');
    },
    unhighlight: function(element) {
      $(element).removeClass('border-red-500');
    }
  });


    $('#food_order').select2({
    placeholder: 'Select an option',
    allowClear: true
    });
    
    function addOption(name,id,preparation_time,image_name,description,price) {
    const select = document.getElementById("food_order");
    const time_preparation = document.getElementById("time_preparation");
    const newValue = name

    const exists = Array.from(select.options).some(opt => opt.value === newValue)
    if(!exists){
      const option = document.createElement("option");
      const option2 = document.createElement("option");

      option.value = name;
      option.text = name;
      option.selected = true;

      option2.value = preparation_time;
      option2.text = preparation_time;
      option2.selected = true;

      select.add(option);
      time_preparation.add(option2); // or select.appendChild(option)

      // const col = `
      //   <div class="row">
      //     <div class="col-sm-12">
      //           <img src="../uploads/products/${image_name}" class="card-img-top" alt="">
      //     <div class="card-body">
      //       <h5 class="card-title"><b>${name}</b></h5>
      //       <p class="card-text"><b>${description}</b></p>
      //     </div>
      //     </div>
      //   </div>
        
      // `;
      const col = `
<div class="product-card d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center">
      <img src="../uploads/products/${image_name}" alt="Product 1" class="product-img me-3">
      <div>
        <div class="fw-semibold">${name}</div>
        <small class="text-muted">${description}</small>
      </div>
    </div>
    <div class="price text-end">${price} PHP</div>
  </div>
        
      `;

      
      $("#product-list").append(col);

    }
    else{
      alert("Exists")
    }

  }

  // $("#town_select").change(function () {
  // 		var tow_code = $(this).val();

  // 		$.ajax({
  // 			url: '/get-barangays/' + tow_code,
  //         headers: {
  //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //   },
  // 			success: function (data) {
  // 				var html = '<option value="" selected>Select..</option>';
  // 				$.each(data, function (i, j) {
  // 					html += '<option value="' + j.code + '">' + j.name + '</option>';
  // 				})
  // 				$("#barangay_select").find("option").remove().end();
  // 				$("#barangay_select").append(html);
  // 			}
  // 		})
  // 	});

  document.getElementById("town_select").addEventListener("change", function () {
      const tow_code = this.value;
  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

      fetch('/get-barangays/' + tow_code, {
          method: 'GET',
          headers: {
              'X-CSRF-TOKEN': csrfToken,
              'Accept': 'application/json'
          }
      })
      .then(response => {
          if (!response.ok) throw new Error("Network response was not ok");
          return response.json();
      })
      .then(data => {
          let html = '<option value="" selected>Select..</option>';
          data.forEach(j => {
              html += `<option value="${j.code}">${j.name}</option>`;
          });
          const barangaySelect = document.getElementById("barangay_select");
          barangaySelect.innerHTML = html;
      })
      .catch(error => {
          console.error('Error fetching barangays:', error);
      });
  });

    // $("#province_select").change(function () {
    // 	var prov_code = $(this).val();
    // 	$.ajax({
    // 		url: 'get-towns/' + prov_code,
    //       headers: {
    //   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    // },
    // 		success: function (data) {
    //       alert(data)
    // 			var html = '';
    // 			$.each(data, function (i, j) {
    // 				html += '<option value="' + j.code + '">' + j.name + '</option>';
    // 			})
    // 			$("#town_select").find("option").remove().end();
    // 			$("#town_select").append(html);
    // 		}
    // 	})
    // });
    document.getElementById("province_select").addEventListener("change", function () {
      const prov_code = this.value;
  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

      fetch('get-towns/' + prov_code, {
          method: 'GET',
          headers: {
              'X-CSRF-TOKEN': csrfToken,
              'Accept': 'application/json'
          }
      })
      .then(response => {
          if (!response.ok) throw new Error("Network response was not ok");
          return response.json();
      })
      .then(data => {
          // alert(JSON.stringify(data)); // Replicates your alert(data)

          let html = '';
          data.forEach(j => {
              html += `<option value="${j.code}">${j.name}</option>`;
          });

          const townSelect = document.getElementById("town_select");
          townSelect.innerHTML = html;
      })
      .catch(error => {
          console.error('Error fetching towns:', error);
      });
  });


  // Disable past dates for datetime-local input
  document.addEventListener("DOMContentLoaded", function () {
  const scheduleInput = document.getElementById("schedule");
  const now = new Date();
  const formattedDate = now.toISOString().slice(0, 16); // Format date to YYYY-MM-DDTHH:MM
  scheduleInput.setAttribute("min", formattedDate); // Set the minimum date to the current date and time
  });
  document.addEventListener("DOMContentLoaded", function () {
  let myCarousel = new bootstrap.Carousel(document.querySelector("#foodCarousel"), {
  interval: 3000, // Auto-slide every 3 seconds
  ride: "carousel"
  });

  document.querySelectorAll(".carousel-img").forEach(img => {
  img.addEventListener("click", function () {
  myCarousel.next(); // Move to the next slide on image click
  });
  });
  });
  function submitEmail() {
  // Get the email address from the input field
  const emailInput = document.getElementById('emailInput');
  const confirmationMessage = document.getElementById('confirmationMessage');

  // Simple validation
  if (emailInput.value === '') {
  alert("Please enter a valid email address.");
  return;
  }

  // Show confirmation message
  confirmationMessage.style.display = 'block';

  // Clear the input field
  emailInput.value = '';
  }
  //MAX 11 NUMBER CONTACT
  // document.getElementById("contact").addEventListener("input", function (e) {

  // console.log(e.target.value.length)

  // if (e.target.value.length == 11) {
  // e.target.value = e.target.value.replace("");
  // alert("You type max 11 numbers")
  // }
  // });
  
  </script>
  </body>

  </html>