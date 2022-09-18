
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon.png" rel="icon" />
<title>Bliven - Bookkeeping Software</title>
<meta name="description" content="Login and Register Form Html Template">
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
========================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>


<!-- Stylesheet
========================= -->
<link rel="stylesheet" type="text/css" href="{{asset('logins/bootstrap.min.css')}}" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="{{asset('logins/stylesheet.css')}}" />
<!-- Colors Css -->
<link id="color-switcher" type="text/css" rel="stylesheet" href="#" />
</head>
<body>

<!-- Preloader -->
<div class="preloader preloader-dark">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
<!-- Preloader End -->

<div id="main-wrapper" class="oxyy-login-register bg-dark">
  <div class="container">
    <div class="row g-0 min-vh-100 py-4 py-md-5">
      <!-- Welcome Text
      ========================= -->
      <div class="col-lg-7 shadow-lg">
        <div class="hero-wrap d-flex align-items-center rounded-3 rounded-end-0 h-100">
          <div class="hero-mask opacity-9 bg-primary"></div>
          <div class="hero-bg hero-bg-scroll" style="background-image:url('{{asset('logins/images/login-bg.jpg')}}');"></div>
          <div class="hero-content mx-auto w-100 h-100 d-flex flex-column">
            <div class="row g-0">
              <div class="col-11 col-lg-10 mx-auto">
                <div class="logo mt-5 mb-5 mb-lg-0"> <a style="color:#ffffff; font-size: 2.75rem !important; font-weight:800" href="#" title="Oxyy">BLIVEN</a> </div>
              </div>
            </div>
            <div class="row g-0 my-auto">
                <div class="col-11 col-lg-10 mx-auto">
                  <h1 class="text-11 text-white mb-3">You're new here!</h1>
                  <p class="text-5 text-white lh-base mb-4">Sign up with your email and personal details to get started!</p>
                  <a class="btn btn-dark rounded-pill shadow-none video-btn py-1 px-3 d-inline-flex align-items-center mb-5" href="#" data-src="https://www.youtube.com/embed/7e90gBu4pas" data-bs-toggle="modal" data-bs-target="#videoModal"><span class="me-2 text-7"><i class="fas fa-play-circle"></i></span>Watch demo</a> </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Welcome Text End -->

      <!-- Login Form
      ========================= -->
      <div class="col-lg-5 shadow-lg d-flex align-items-center rounded-3 rounded-start-0 bg-dark">
        <div class="container my-auto py-5">
          <div class="row">
            <div class="col-11 col-lg-10 mx-auto">
              <h3 class="text-white text-center mb-4">Sign Up</h3>
              <form id="registerForm" class="form-dark" method="post" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                  <label class="form-label text-light" for="fullName">Full Name</label>
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="mb-3">
                  <label class="form-label text-light" for="emailAddress">Email Address</label>
                  {{-- <input type="email" class="form-control" id="emailAddress" required placeholder="Enter Your Email"> --}}
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label text-light" for="loginPassword">Password</label>
                  {{-- <input type="password" class="form-control" id="loginPassword" required placeholder="Enter Password"> --}}
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label text-light" for="loginPassword">Password Confirm</label>
                    {{-- <input type="password" class="form-control" id="loginPassword" required placeholder="Enter Password"> --}}

                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                  </div>

                <div class="mb-3 mt-4">
                  <div class="form-check text-2">
                    <input id="agree" name="agree" class="form-check-input" type="checkbox">
                    <label class="form-check-label text-light" for="agree">I agree to the <a href="{{url('/')}}">Terms</a> and <a href="#">Privacy Policy</a>.</label>
                  </div>
                </div>
                <div class="d-grid my-4">
					<button class="btn btn-primary" type="submit">Sign Up</button>
				</div>
              </form>
              <div class="d-flex align-items-center my-3">
                <hr class="flex-grow-1 bg-dark-4">
                <span class="mx-2 text-2 text-muted">Or Sign Up with Social Profile</span>
                <hr class="flex-grow-1 bg-dark-4">
              </div>
              <div class="d-flex flex-column align-items-center mb-4">
                <ul class="social-icons social-icons-circle">
                  <li class="social-icons-facebook"><a href="#" data-bs-toggle="tooltip" data-bs-original-title="Log In with Facebook"><i class="fab fa-facebook-f"></i></a></li>
                  {{-- <li class="social-icons-twitter"><a href="#" data-bs-toggle="tooltip" data-bs-original-title="Log In with Twitter"><i class="fab fa-twitter"></i></a></li> --}}
                  <li class="social-icons-google"><a href="#" data-bs-toggle="tooltip" data-bs-original-title="Log In with Google"><i class="fab fa-google"></i></a></li>
                  <li class="social-icons-linkedin"><a href="#" data-bs-toggle="tooltip" data-bs-original-title="Log In with Linkedin"><i class="fab fa-linkedin"></i></a></li>
                </ul>
              </div>
              <p class="text-2 text-center text-light mb-0">Already have an account? <a href="{{url('/')}}/login">Sign In</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login Form End -->
    </div>
  </div>
</div>

<!-- Video Modal
========================= -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-transparent border-0">
      <button type="button" class="btn-close btn-close-white ms-auto me-n3" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body p-0">
        <div class="ratio ratio-16x9">
          <iframe id="video" allow="autoplay" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Video Modal end -->



<!-- Script -->
<script src="{{asset('logins/js/jquery.min.js')}}"></script>
<script src="{{asset('logins/js/bootstrap.bundle.min.js')}}"></script>
<!-- Style Switcher -->
<script src="{{asset('logins/js/switcher.min.js')}}"></script>
<script src="{{asset('logins/js/theme.js')}}"></script>
</body>
</html>
