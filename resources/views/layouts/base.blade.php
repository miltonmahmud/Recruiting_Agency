<!doctype html>
<html lang="en">
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap Min CSS --> 
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
		<!-- Owl Theme Default Min CSS --> 
		<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
		<!-- Owl Carousel Min CSS --> 
		<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
		<!-- Animate Min CSS --> 
		<link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
		<!-- Boxicons Min CSS --> 
		<link rel="stylesheet" href="{{asset('assets/css/boxicons.min.css')}}"> 
		<!-- Magnific Popup Min CSS --> 
		<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}"> 
		<!-- Flaticon CSS --> 
		<link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
		<!-- Meanmenu Min CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
		<!-- Nice Select Min CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/nice-select.min.css')}}">
		<!-- Odometer Min CSS-->
		<link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">
		<!-- Date Picker CSS-->
		<link rel="stylesheet" href="{{asset('assets/css/date-picker.min.css')}}">
		<!-- Muli Fonts Min CSS-->
		<link rel="stylesheet" href="{{asset('assets/css/muli-fonts.css')}}">
		<!-- Style CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/images/favicon.png">
		<!-- Title -->
		<title>Recruting Agency</title>

		<style>

			.top-header.top-header-two {
    background-color: #07657a;
}
			
			.form-control {
				color: #333;
				border-radius: 50px;
			}

			.form-control:focus {
    border: 1px solid #0b8fad;
}

			.search-job .default-btn {
    background-color: #cd0d5d !important;
    color: #fff !important;
    border-radius: 50px;
    box-shadow: 0px 5px 20px 3px rgba(230, 233, 249, 0.9);
}

			.working-area.working-area-two .single-working:hover {
    background-color: #0b8fad;

}

.working-area.working-area-two .single-working {
	border-radius: 50px;
}

.navbar-area .desktop-nav .navbar .navbar-nav .nav-item a:hover {
    color: #0b8fad;
}

.footer-area.footer-area-two .single-footer-widget .address li i {
    color: #0b8fad;
}

.footer-area.footer-area-two .single-footer-widget .social-icon li a i {
    color: #ffffff;
    border-color: #0b8fad;
    background: #0b8fad;
}

.banner-area.banner-area-two .banner-content .search-job {
    background-color: #0b8fad;
}

.lc {
    background-color: #d7e5e9;
    text-align: center;
    color: #0b8fad;
    padding: 7px 25px;
    border-radius: 30px;
    width: 150px;
    display: block;
    box-shadow: 0px 5px 20px 3px rgba(230, 233, 249, 0.9);
}

.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #0b8fad;
    border-color: #0b8fad;
}

.section-title span {
    font-size: 16px;
    color: #0b8fad;
    text-transform: uppercase; 
    display: block;
    margin-bottom: 10px;
}

.testimonials-area-three {
 background-color: #d7e5e9;
}

.main-contact-area .contact-info .address li i {
    border: 1px solid #0b8fad;
    color: #0b8fad;
    font-size: 30px;
    text-align: center;
}

.user-area .user-form-content h3 {
    background-color: #d7e5e9;
}

.testimonials-area-three .single-testimonials {
    border-radius: 30px !important;
}

.hot-jobs-list .hot-jobs-btn .default-btn {
    border-radius: 30px;
}

.hot-jobs-list {
    border-radius: 20px;
}

.search-job {
	border-radius: 50px;
}

.single-live-job {
    border-radius: 50px;
}

.go-top.go-top-two {
    border-radius: 30px;
}

.go-top.go-top-two:hover {
    background-color: #0b8fad !important;
}

.go-top.go-top-two:hover {
	border-radius: 30px !important;
    background-color: #0b8fad !important;
}

		</style>

		@livewireStyles

    </head>

    <body>
		
		<!-- Start Header Area -->
		@livewire('header-component')
		<!-- End Header Area -->

		{{$slot}}

		<!-- Start Footer Area -->
		@livewire('footer-component')
		<!-- End Footer Area -->
		
		<!-- Start Go Top Area -->
		<div class="go-top go-top-two">
			<i class="bx bx-chevrons-up"></i>
			<i class="bx bx-chevrons-up"></i>
		</div>
		<!-- End Go Top Area -->
		

        <!-- Jquery Min JS -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
        <!-- Popper Min JS -->
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <!-- Bootstrap Min JS -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <!-- Meanmenu Min JS -->
		<script src="{{asset('assets/js/meanmenu.min.js')}}"></script>
		<!-- Wow Min JS -->
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <!-- Owl Carousel Min JS -->
		<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <!-- Nice Select Min JS -->
		<script src="{{asset('assets/js/nice-select.min.js')}}"></script>
        <!-- Magnific Popup Min JS -->
		<script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
		<!-- Mixitup JS --> 
		<script src="{{asset('assets/js/jquery.mixitup.min.js')}}"></script>
		<!-- Appear Min JS --> 
        <script src="{{asset('assets/js/appear.min.js')}}"></script>
		<!-- Odometer Min JS --> 
		<script src="{{asset('assets/js/odometer.min.js')}}"></script>
		<!-- Range Slider Min JS --> 
		<script src="{{asset('assets/js/range-slider.min.js')}}"></script>
		<!-- Datepicker Min JS --> 
		<script src="{{asset('assets/js/bootstrap-datepicker.min.js')}}"></script>
		<!-- Form Validator Min JS -->
		<script src="{{asset('assets/js/form-validator.min.js')}}"></script>
		<!-- Contact JS -->
		<script src="{{asset('assets/js/contact-form-script.js')}}"></script>
		<!-- Ajaxchimp Min JS -->
		<script src="{{asset('assets/js/ajaxchimp.min.js')}}"></script>
        <!-- Custom JS -->
		<script src="{{asset('assets/js/custom.js')}}"></script>

		@livewireScripts

		@stack('scripts')

    </body>

<!-- Mirrored from templates.envytheme.com/jubi/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jan 2023 13:41:40 GMT -->
</html>