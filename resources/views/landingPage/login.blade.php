<!DOCTYPE html>
<html lang="en">
<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>Jobzilla Template | Home Page Style 1</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{asset('jobnest')}}/css/bootstrap.min.css"><!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('jobnest')}}/css/font-awesome.min.css"><!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('jobnest')}}/css/feather.css"><!-- FEATHER ICON SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('jobnest')}}/css/owl.carousel.min.css"><!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('jobnest')}}/css/magnific-popup.min.css"><!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('jobnest')}}/css/lc_lightbox.css"><!-- Lc light box popup -->
    <link rel="stylesheet" type="text/css" href="{{asset('jobnest')}}/css/bootstrap-select.min.css"><!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{asset('jobnest')}}/css/dataTables.bootstrap5.min.css"><!-- DATA table STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{asset('jobnest')}}/css/select.bootstrap5.min.css"><!-- DASHBOARD select bootstrap  STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{asset('jobnest')}}/css/dropzone.css"><!-- DROPZONE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('jobnest')}}/css/scrollbar.css"><!-- CUSTOM SCROLL BAR STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('jobnest')}}/css/datepicker.css"><!-- DATEPICKER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('jobnest')}}/css/flaticon.css"> <!-- Flaticon -->
    <link rel="stylesheet" type="text/css" href="{{asset('jobnest')}}/css/swiper-bundle.min.css"><!-- Swiper Slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('jobnest')}}/css/style.css"><!-- MAIN STYLE SHEET -->
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('jobnest')}}/css/switcher.css">

</head>

<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

<div class="page-wraper">


    <!-- CONTENT START -->
    <div class="page-content">

        <!-- Login Section Start -->
        <div class="section-full site-bg-white">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8 col-lg-6 col-md-5 twm-log-reg-media-wrap">
                        <div class="twm-log-reg-media">
                            <div class="twm-l-media">
                                <img src="{{asset('jobnest')}}/images/login-bg.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7">
                        <div class="twm-log-reg-form-wrap">
                            <div class="twm-log-reg-logo-head">
                                <a href="index.html">
                                    <img src="{{asset('jobnest')}}/images/logo-dark.png" alt="" class="logo">
                                </a>
                            </div>
                            <div class="twm-log-reg-inner">
                                <div class="twm-log-reg-head">
                                    <div class="twm-log-reg-logo">
                                        <span class="log-reg-form-title">Log In</span>
                                    </div>
                                </div>
                                <div class="twm-tabs-style-2">

                                    <ul class="nav nav-tabs" id="myTab2" role="tablist">

                                        <!--Login Candidate-->
                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#twm-login-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                                        </li>
                                        <!--Login Employer-->
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#twm-login-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                                        </li>

                                    </ul>

                                    <div class="tab-content" id="myTab2Content">
                                        <!--Login Candidate Content-->
                                        <div class="tab-pane fade show active" id="twm-login-candidate">
                                            <div class="row">
                                                <form action="/LoginUser" method="post">
                                                    @csrf
                                                    <?php
                                                    $gagalLogin = Session::get('warning');
                                                    if ($gagalLogin) {
                                                        echo '<div class="alert alert-danger">' . $gagalLogin . '</div>';
                                                    }
                                                    ?>
                                                    <?php
                                                    $berhasil = Session::get('logout');
                                                    if ($berhasil) {
                                                        echo '<div class="alert alert-success">' . $berhasil . '</div>';
                                                    }
                                                    ?>
                                                    <?php
                                                    $Accepted1 = Session::get('Accepted');
                                                    if ($Accepted1) {
                                                        echo '<div class="alert alert-success">' . $Accepted1 . '</div>';
                                                    }
                                                    ?>
                                                    <?php
                                                    $Accepted2 = Session::get('loginFirst');
                                                    if ($Accepted2) {
                                                        echo '<div class="alert alert-success">' . $Accepted2 . '</div>';
                                                    }
                                                    ?>
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="email" type="text" required="" class="form-control" placeholder="Email*">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="password" type="password" class="form-control" required="" placeholder="Password*">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="twm-forgot-wrap">
                                                        <div class="form-group mb-3">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="Password4">
                                                                <label class="form-check-label rem-forgot" for="Password4">Remember me <a href="javascript:;" class="site-text-primary">Forgot Password</a></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="site-button">Log in</button>
                                                    </div>
                                                </div>
                                            </form>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <span class="center-text-or">Or</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="log_with_facebook">
                                                            <i class="fab fa-facebook"></i>
                                                            Continue with Facebook
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="log_with_google">
                                                            <img src="images/google-icon.png" alt="">
                                                            Continue with Google
                                                        </button>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                        <!--Login Employer Content-->
                                        <div class="tab-pane fade" id="twm-login-Employer">
                                            <div class="row">
                                                <form action="/loginCompany" method="post">
                                                @csrf
                                                <?php
                                                $gagalLoginCompany = Session::get('warningCompany');
                                                if ($gagalLoginCompany) {
                                                    echo '<div class="alert alert-danger">' . $gagalLoginCompany . '</div>';
                                                }
                                                ?>
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="field_company" type="text" required="" class="form-control" placeholder="Usearname*">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="field_password" type="text" class="form-control" required="" placeholder="Password*">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="twm-forgot-wrap">
                                                        <div class="form-group mb-3">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="Password4">
                                                                <label class="form-check-label rem-forgot" for="Password4">Remember me <a href="javascript:;" class="site-text-primary">Forgot Password</a></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="site-button">Log in</button>
                                                    </div>
                                                </div>
                                            </form>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <span class="center-text-or">Or</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="log_with_facebook">
                                                            <i class="fab fa-facebook"></i>
                                                            Continue with Facebook
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="log_with_google">
                                                            <img src="images/google-icon.png" alt="">
                                                            Continue with Google
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Section End -->


    </div>
    <!-- CONTENT END -->

@include('landingPage.layouts.script')

{{--
              <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="your@email.com" autocomplete="off">
              </div>
              <div class="mb-2">
                <label class="form-label">
                  Password
                </label>
                <div class="input-group input-group-flat">
                  <input type="password" name="password" class="form-control"  placeholder="Your password"  autocomplete="off">
                  <span class="input-group-text">
                    <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                    </a>
                  </span>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" class="btn btn-danger w-100">Sign in</button>
              </div>
            </form>
          </div>
        </div>
        <div class="text-center text-secondary mt-3">
          Belum Daftar Akun? <a href="/sign-up" tabindex="-1">Daftar Sekarang</a>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js?1695847769" defer></script>
    <script src="./dist/js/demo.min.js?1695847769" defer></script>
  </body>
</html> --}}
