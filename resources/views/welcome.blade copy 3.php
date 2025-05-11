<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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


<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

<!-- Styles / Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

<link rel="stylesheet" href="{{ asset('css/food_menu.css') }}">



<style>
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

</style>
</head>

<body>
<header class="main_menu home_menu">
<div class="container custom-container">
<div class="row align-items-center">
<div class="col-lg-12">
<nav class="navbar navbar-expand-lg navbar-light">
<a class="navbar-brand" href="https://srv766420.hstgr.cloud"> <img class="" src="img/logo.png" alt="logo" height="70" width="250"> </a>
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

<!-- Banner Part Start -->
<section class="banner_part">
<div class="container custom-container">
<div class="row align-items-center">
<!-- Text Section -->
<div class="col-lg-6">
<div class="banner_text">
<div class="banner_text_iner">
<h5>Crafted with love, served with pride</h5>
<h1>ENJOY DELICIOUS FOOD IN YOUR HEALTHY LIFE.</h1>
<p>
Taste the essence of Filipino heritage with every bite at Abraham's Cuisine, 
where love and tradition are always on the menu. <br> 
Abraham's Cuisine: A celebration of Filipino culinary culture, 
crafted with passion and served with warmth.
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
<p>Popular Dishes</p>
<h2>Our Exclusive Items</h2>
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
<div class="about_img">
<img src="img/about 1.png" alt="">
</div>
</div>
<div class="col-sm-8 col-lg-4">
<div class="about_text">
<h5>Party Trays</h5>
<h2>Feed the crowd effortlessly with party trays that make any occasion special.</h2>
<p>Ano pang hinihintay n’yo?
TARA NA at Patuloy na Tikman ang Sarap ng Pagkaing Abraham's Cuisine! SWAK PANG MASA, SWAK PAMPAMILYA!🤤
✅Pagkaing Swak sa buong pamilya't barkada
✅Swak sa budget
✅Group Diners
✅Spacious Facilities</p>
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
<div class="about_img">
<img src="img/about.png" alt="">
</div>
</div>
<div class="col-sm-8 col-lg-4">
<div class="about_text">
<h5>Our History</h5>
<h2>One table, many hands, endless memories.</h2>
<h4>Satisfying people hunger for simple pleasures</h4>
<p>Our story began with a love for Filipino cuisine and the desire to share our heritage through the unique experience of boodle fights. Inspired by the traditional Filipino communal feast, we created a space where friends and families come together, 
dining side-by-side, and sharing meals served on banana leaves.</p>
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
<h2>Food Menu</h2>
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
<p>Popular Menu</p>
<h2>Delicious Food Menu</h2>
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
    <p>{{$normal_item->pax}}</p>
    <h5>₱{{$normal_item->price}}</h5>
    <button onclick="productDropdown('{{$normal_item->name}}')" style="background-color:blue" class="mt-1 block mt-4 px-6 py-3 text-white b order-black-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
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

<!-- Display success message -->
@if (session('success'))
<div class="mb-4 p-4 bg-green-500 text-white rounded-md">
{{ session('success') }}
</div>
@endif

<!-- Reservation Form -->
<form action="{{ route('reservations.store') }}" method="POST">
@csrf <!-- CSRF token for security -->

<div class="space-y-4" id="reservation">
<!-- Full Name -->
<div>
<label for="fullname" class="block text-sm font-medium text-gray-700">Full Name:</label>
<input type="text" id="fullname" name="fullname"
class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
value="{{ old('fullname') }}" required>
@error('fullname')
<p class="mt-1 text-sm text-red-500">{{ $message }}</p>
@enderror
</div>

<!-- Contact -->
<div>
<label for="contact" class="block text-sm font-medium text-gray-700">Contact:</label>
<input type="text" id="contact" name="contact"
class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
value="{{ old('contact') }}" required>
@error('contact')
<p class="mt-1 text-sm text-red-500">{{ $message }}</p>
@enderror
</div>

<!-- Email -->
<div>
<label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
<input type="email" id="email" name="email"
class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
value="{{ old('email') }}" required>
@error('email')
<p class="mt-1 text-sm text-red-500">{{ $message }}</p>
@enderror
</div>

<div>
<label for="address" class="block text-sm font-medium text-gray-700">Address:</label>
<input type="text" id="address" name="address"
class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
value="{{ old('address') }}" required>
@error('address')
<p class="mt-1 text-sm text-red-500">{{ $message }}</p>
@enderror
</div>


<!-- TABLE PAX -->
<div>
<label for="address" class="block text-sm font-medium text-gray-700">Table Per Pax:</label>
<input type="text" id="pax" name="pax"
class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
value="{{ old('pax') }}" required>
@error('pax')
<p class="mt-1 text-sm text-red-500">{{ $message }}</p>
@enderror
</div>

{{-- <div>
<label for="address" class="block text-sm font-medium text-gray-700">Food your order:</label>
<select id="ww" multiple="multiple" style="width:1000px;">

</select>
<textarea id="ww">
   
</textarea>
@error('pax')
<p class="mt-1 text-sm text-red-500">{{ $message }}</p>
@enderror
</div> --}}



<!-- Table -->
{{-- <div>
<label for="table" class="block text-sm font-medium text-gray-700">Table:</label>
<input type="text" id="table" name="table"
class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
value="{{ old('table') }}" required>
@error('table')
<p class="mt-1 text-sm text-red-500">{{ $message }}</p>
@enderror
</div> --}}
<div>
<label for="table" class="block text-sm font-medium text-gray-700">Table:</label>
<select id="table" name="table"
class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
required>
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
<input type="datetime-local" id="schedule" name="schedule"
class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
value="{{ old('schedule') }}" required>
@error('schedule')
<p class="mt-1 text-sm text-red-500">{{ $message }}</p>
@enderror
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
<button type="submit"
class="w-full mt-4 px-6 py-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
Create Reservation
</button>
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
href="./img/Celebrate 1.mp4">
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
<h4>Contact us</h4>
<div class="contact_info" style="margin-top: -15px;">
<p><span> Address :</span>National Highway Road Brgy. Sampaloc, Pagsanjan, Laguna</p>
<p><span> Phone :</span>+63 923-513-8732</p>
<p><span> Email : </span>abramscuisine01@gmail.com</p>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-8 col-md-6" style="padding-left: 60px;">
<div class="single-footer-widget footer_3">
<h4>Newsletter</h4>
<p style="margin-top: -15px;">Psalm 34:8<br> "Taste and see that the LORD is good; blessed is the one who takes refuge in him".</p>
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

<script>
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
<script>
function productDropdown(wew){
// var newOption = new Option(wew, wew, false, false);
// $('#ww').append(newOption).trigger('change');
document.getElementById('ww').value += wew;
}
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


</script>
</body>

</html>