<!doctype html>
<html lang="en">

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Bliven - Financial Software</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('dashboards/images/loader.gif')}}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset('dashboards/css/bootstrap.min.css')}}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{asset('dashboards/css/typography.css')}}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{asset('dashboards/css/style.css')}}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{asset('dashboards/css/responsive.css')}}">
      <!-- Full calendar -->
      <link href="{{asset('dashboards/fullcalendar/core/main.css')}}" rel='stylesheet' />
      <link href="{{asset('dashboards/fullcalendar/daygrid/main.css')}}" rel='stylesheet' />
      <link href="{{asset('dashboards/fullcalendar/timegrid/main.css')}}" rel='stylesheet' />
      <link href="{{asset('dashboards/fullcalendar/list/main.css')}}" rel='stylesheet' />

      <link rel="stylesheet" href="{{asset('dashboards/css/flatpickr.min.css')}}">

   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-navbar-logo d-flex justify-content-between">
               <a href="{{url('/')}}/dashboard" class="header-logo">
               <img src="{{asset('dashboards/images/loader.gif')}}" class="img-fluid rounded" alt="">
               <span>BliVen</span>
               </a>
               <div class="iq-menu-bt align-self-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="ri-menu-line"></i></div>
                     <div class="hover-circle"><i class="ri-close-fill"></i></div>
                  </div>
               </div>
            </div>
            <div id="sidebar-scrollbar">
               @include('front.sidebar')
            </div>
         </div>
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-menu-bt d-flex align-items-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-menu-line"></i></div>
                        <div class="hover-circle"><i class="ri-close-fill"></i></div>
                     </div>
                     <div class="iq-navbar-logo d-flex justify-content-between ml-3">
                        <a href="{{url('/')}}/dashboard" class="header-logo">
                        <img src="{{asset('dashboards/images/loader.gif')}}" class="img-fluid rounded" alt="">
                        <span>BliVen</span>
                        </a>
                     </div>
                  </div>
                  <div class="iq-search-bar">
                     <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Type here to search...">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                     </form>
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li class="nav-item">
                            <a class="search-toggle iq-waves-effect language-title" href="#"><span class="ripple rippleEffect" style="width: 98px; height: 98px; top: -15px; left: 56.2969px;"></span> USD <i class="ri-arrow-down-s-line"></i></a>
                            <div class="iq-sub-dropdown">
                               <a class="iq-sub-card" href="#">USD</a>
                               <a class="iq-sub-card" href="#">KES</a>
                               <a class="iq-sub-card" href="#">EUR</a>
                            </div>
                         </li>
                        <li class="nav-item">
                           <a class="search-toggle iq-waves-effect language-title" href="#"><span class="ripple rippleEffect" style="width: 98px; height: 98px; top: -15px; left: 56.2969px;"></span><img src="{{asset('dashboards/images/small/flag-01.png')}}" alt="img-flaf" class="img-fluid mr-1" style="height: 16px; width: 16px;"> EN <i class="ri-arrow-down-s-line"></i></a>
                           <div class="iq-sub-dropdown">
                              <a class="iq-sub-card" href="#"><img src="{{asset('dashboards/images/small/flag-02.png')}}" alt="img-flaf" class="img-fluid mr-2">French</a>
                              <a class="iq-sub-card" href="#"><img src="{{asset('dashboards/images/small/flag-03.png')}}" alt="img-flaf" class="img-fluid mr-2">Spanish</a>
                              <a class="iq-sub-card" href="#"><img src="{{asset('dashboards/images/small/flag-04.png')}}" alt="img-flaf" class="img-fluid mr-2">Italian</a>
                              <a class="iq-sub-card" href="#"><img src="{{asset('dashboards/images/small/flag-05.png')}}" alt="img-flaf" class="img-fluid mr-2">German</a>
                              <a class="iq-sub-card" href="#"><img src="{{asset('dashboards/images/small/flag-06.png')}}" alt="img-flaf" class="img-fluid mr-2">Japanese</a>
                           </div>
                        </li>
                        <li class="nav-item nav-icon">
                           <a href="#" class="iq-waves-effect bg-primary rounded"><span class="ripple rippleEffect"></span><i class="ri-shopping-cart-2-line"></i></a>
                        </li>
                        <li class="nav-item nav-icon">
                           <a href="#" class="search-toggle iq-waves-effect bg-primary rounded">
                           <i class="ri-notification-line"></i>
                           <span class="bg-danger dots"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="{{asset('dashboards/images/user/01.jpg')}}" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">New Payment</h6>
                                             <small class="float-right font-size-12">Just Now</small>
                                             <p class="mb-0">Mike Johnson</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="{{asset('dashboards/images/user/02.jpg')}}" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">New customer is join</h6>
                                             <small class="float-right font-size-12">5 days ago</small>
                                             <p class="mb-0">Victor Kanyanga</p>
                                          </div>
                                       </div>
                                    </a>

                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item nav-icon dropdown">
                           <a href="#" class="search-toggle iq-waves-effect bg-primary rounded">
                           <i class="ri-mail-line"></i>
                           <span class="bg-danger count-mail"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">2</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="{{asset('dashboards/images/user/01.jpg')}}" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Price Enquiry</h6>
                                             <small class="float-left font-size-12">13 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="{{asset('dashboards/images/user/02.jpg')}}" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Bulk Quoatation</h6>
                                             <small class="float-left font-size-12">20 Apr</small>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <ul class="navbar-list">
                     <li class="line-height">
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                           <img src="{{asset('dashboards/images/user/43434746_2187216801551961_7550020093632053248_n.jpg')}}" class="img-fluid rounded mr-3" alt="user">
                           <div class="caption">
                              <h6 class="mb-0 line-height">Victor Brian</h6>
                              <p class="mb-0">Manager</p>
                           </div>
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">Hello Barry Tech</h5>
                                    <span class="text-white font-size-12">Available</span>
                                 </div>
                                 <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-file-user-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">My Profile</h6>
                                          <p class="mb-0 font-size-12">View personal profile details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-profile-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Edit Profile</h6>
                                          <p class="mb-0 font-size-12">Modify your personal details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-account-box-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Account settings</h6>
                                          <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-lock-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Privacy Settings</h6>
                                          <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
         <!-- TOP Nav Bar END -->

         <!-- Page Content  -->
         @yield('content')
         {{-- Page Content --}}
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
      <footer class="iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                  </ul>
               </div>
               <div class="col-lg-6 text-right">
                  Copyright {{date('Y')}} <a href="#">Blist Ventures</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer END -->

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{asset('dashboards/js/jquery.min.js')}}"></script>
      <script src="{{asset('dashboards/js/popper.min.js')}}"></script>
      <script src="{{asset('dashboards/js/bootstrap.min.js')}}"></script>
      <!-- Appear JavaScript -->
      <script src="{{asset('dashboards/js/jquery.appear.js')}}"></script>
      <!-- Countdown JavaScript -->
      <script src="{{asset('dashboards/js/countdown.min.js')}}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{asset('dashboards/js/waypoints.min.js')}}"></script>
      <script src="{{asset('dashboards/js/jquery.counterup.min.js')}}"></script>
      <!-- Wow JavaScript -->
      <script src="{{asset('dashboards/js/wow.min.js')}}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{asset('dashboards/js/apexcharts.js')}}"></script>
      <!-- Slick JavaScript -->
      <script src="{{asset('dashboards/js/slick.min.js')}}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{asset('dashboards/js/select2.min.js')}}"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{asset('dashboards/js/owl.carousel.min.js')}}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{asset('dashboards/js/jquery.magnific-popup.min.js')}}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{asset('dashboards/js/smooth-scrollbar.js')}}"></script>
      <!-- lottie JavaScript -->
      <script src="{{asset('dashboards/js/lottie.js')}}"></script>
      <!-- am core JavaScript -->
      <script src="{{asset('dashboards/js/core.js')}}"></script>
      <!-- am charts JavaScript -->
      <script src="{{asset('dashboards/js/charts.js')}}"></script>
      <!-- am animated JavaScript -->
      <script src="{{asset('dashboards/js/animated.js')}}"></script>
       <!-- am Dark JavaScript -->
      <script src="{{asset('dashboards/js/dark.js')}}"></script>
      <!-- am kelly JavaScript -->
      <script src="{{asset('dashboards/js/kelly.js')}}"></script>
      <!-- am maps JavaScript -->
      <script src="{{asset('dashboards/js/maps.js')}}"></script>
      <!-- am worldLow JavaScript -->
      <script src="{{asset('dashboards/js/worldLow.js')}}"></script>
      <!-- Raphael-min JavaScript -->
      <script src="{{asset('dashboards/js/raphael-min.js')}}"></script>
      <!-- Morris JavaScript -->
      <script src="{{asset('dashboards/js/morris.js')}}"></script>
      <!-- Morris min JavaScript -->
      <script src="{{asset('dashboards/js/morris.min.js')}}"></script>
      <!-- Flatpicker Js -->
      <script src="{{asset('dashboards/js/flatpickr.js')}}"></script>
      <!-- Style Customizer -->
      <script src="{{asset('dashboards/js/style-customizer.js')}}"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{asset('dashboards/js/chart-custom.js')}}"></script>
      <!-- Custom JavaScript -->
      <script src="{{asset('dashboards/js/custom.js')}}"></script>
   </body>

</html>
