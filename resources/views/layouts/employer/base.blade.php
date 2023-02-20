
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS --> 
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
    
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">


    @livewireStyles

    <style>

      .top-header.top-header-two {
    background-color: #07657a;
}
       .form-control {
        color: #333;
       }

       .avatar-sidebar ul li a.active {
          background-color: #0b8fad;
          color: #ffffff;
      }

      .avatar-sidebar ul li a:hover {
        background-color: #0b8fad;
        color: #ffffff;
    }

    .default-btn{
    background-color: #0b8fad;
    min-width: 158px !important;
}

.main-btn {
  background-color: #cd0d5d;
}

.footer-area.footer-area-two .single-footer-widget .address li i {
    color: #0b8fad;
}

.footer-area.footer-area-two .single-footer-widget .social-icon li a i {
    color: #ffffff;
    border-color: #0b8fad;
    background: #0b8fad;
}
    </style>


    <!-- Title -->
    <title>User Dashboard</title>
    </head>

    <body>
    

    <header class="header-area">
      <!-- Start Top Header -->
      <div class="top-header top-header-two">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
              <ul class="header-left-content">
                <li>
                  <span>Hot Line</span>
                  <a href="tel:+1-(514)-312-5678">+1 (514) 312-5678</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-6 col-md-6">
              <div class="header-right-content">
                @if(Route::has('login'))
                  @auth
                  @if(Auth::user()->utype === 'ADM')
                    <ul class="log-in">
                      <li>
                        <a href="{{route('admin.dashboard')}}">
                          <i class="bx bxs-lock"></i>
                          My Account ({{Auth::user()->name}})
                        </a>
                      </li>
                    </ul>
                  @elseif(Auth::user()->utype === 'EML')
                    <ul class="log-in">
                      <li>
                        <a href="{{route('employer.dashboard')}}">
                          <i class="bx bxs-lock"></i>
                          My Account ({{Auth::user()->name}})
                        </a>
                      </li>
                    </ul>
                  @else
                    <ul class="log-in">
                      <li>
                        <a href="{{route('user.dashboard')}}">
                          <i class="bx bxs-lock"></i>
                          My Account ({{Auth::user()->name}})
                        </a>
                      </li>
                    </ul>
                  @endif
                @else
                  <ul class="log-in">
                    <li>
                      <a href="{{route('login')}}">
                        <i class="bx bxs-lock"></i>
                        Log In
                      </a>
                    </li>

                    <li>
                      <a href="{{route('register')}}">
                        <i class="bx bxs-user"></i>
                        Register
                      </a>
                    </li>
                  </ul>
                @endif
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Start Top Header -->
      
      <!-- Start Navbar Area -->
      <div class="navbar-area">
        <div class="mobile-nav">
          <div class="container">
            <div class="mobile-menu">
              <div class="logo">
                <a href="{{route('home')}}">
                  <!-- <img src="assets/images/logo.png" alt="logo"> -->
                  <h2>Agency</h2>
                </a>
              </div>
            </div>
          </div>
        </div>
  
        <div class="desktop-nav">
          <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
              <a class="navbar-brand" href="{{route('home')}}">
                <h2 class="text-uppercase">Agency</h2>
              </a>
  
              <div class="collapse navbar-collapse mean-menu">
                <ul class="navbar-nav m-auto">
                  <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link">
                      Home
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('about')}}" class="nav-link">
                      About Us
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('job-openings')}}" class="nav-link">
                      Job Openings
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('testimonials')}}" class="nav-link">
                      Testimonials
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('clients')}}" class="nav-link">
                      Clients
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('contact')}}" class="nav-link">
                      Contact Us
                    </a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
  
        <div class="others-option-for-responsive">
          <div class="container">
            <div class="dot-menu">
              <div class="inner">
                <div class="circle circle-one"></div>
                <div class="circle circle-two"></div>
                <div class="circle circle-three"></div>
              </div>
            </div>
            
            <div class="container">
              <div class="option-inner">
                <div class="others-option justify-content-center d-flex align-items-center">
                  <div class="get-quote">
                    <a href="#" class="default-btn">
                      Post a Job
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar Area -->
    </header>

    {{$slot}}

    <!-- Start Footer Area -->
    <footer class="footer-area footer-area-two pt-100 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="single-footer-widget single-bg">
              <h2 style="color: #fff !important;">Agency</h2>

              <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consec tetur.</p>

              <ul class="social-icon">
                <li>
                  <a href="#">
                    <i class="bx bxl-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="bx bxl-instagram"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="bx bxl-linkedin-square"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="bx bxl-twitter"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="single-footer-widget">
              <h3>Contact</h3>

              <ul class="address">
                <li>
                  <i class="bx bx-phone-call"></i>
                  <span>Phone:</span>
                  <a href="tel:+1-(514)-7939-357">+1 (514) 7939-357</a>
                </li>
                <li>
                  <i class="bx bx-envelope"></i>
                  <span>Email:</span>
                  <a href="">Email@email.com</span></a>
                </li>
                <li class="location">
                  <i class="bx bx-location-plus"></i>
                  <span>Address:</span>
                  6890 Blvd, The Bronx, NY 1058 New York, USA
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="single-footer-widget">
              <h3>Helpful Resources</h3>

              <ul class="import-link">
                <li>
                  <a href="#">Create Account</a>
                </li>
                <li>
                  <a href="#">Contact Us</a>
                </li>
                <li>
                  <a href="#">Site Map</a>
                </li>
                <li>
                  <a href="#">Terms of Use</a>
                </li>
                <li>
                  <a href="#">Privacy Centre</a>
                </li>
                <li>
                  <a href="#">Blog</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="single-footer-widget">
              <h3>Job Seekers</h3>

              <ul class="import-link">
                <li>
                  <a href="#">Create Account</a>
                </li>
                <li>
                  <a href="#">Browse Jobs</a>
                </li>
                <li>
                  <a href="#">Upload CV</a>
                </li>
                <li>
                  <a href="#">Company Profile</a>
                </li>
                <li>
                  <a href="#">International Jobs</a>
                </li>
                <li>
                  <a href="#">FAQ</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer Area -->
    
    <!-- Start Go Top Area -->
    <div class="go-top">
      <i class="bx bx-chevrons-up"></i>
      <i class="bx bx-chevrons-up"></i>
    </div>
    <!-- End Go Top Area -->
    

        <!-- Jquery Min JS -->

        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
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

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Custom JS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>

    @stack('scripts')

    <script>
      
      window.addEventListener('password-changed', event => {
            Swal.fire('Success', 'Password Updated Successfully!', 'success');
        })

      window.addEventListener('profile-updated', event => {
            Swal.fire('Success', 'Profile Updated Successfully!', 'success');
        })

    </script>

    @livewireScripts

    </body>

</html>