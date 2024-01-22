<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <title>Jobnest | Job List</title>

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

    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{asset('jobnest')}}/css/skins-type/skin-6.css">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('jobnest')}}/css/switcher.css">

</head>

<body>


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

        <!-- HEADER START -->
        <header  class="site-header header-style-3 mobile-sider-drawer-menu">

            <div class="sticky-header main-bar-wraper  navbar-expand-lg">
                <div class="main-bar">

                    <div class="container-fluid clearfix">

                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="index.html">
                                <img src="{{asset('jobnest')}}/images/logo-dark.png" alt="">
                                </a>
                            </div>
                        </div>

                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>

                        <!-- MAIN Vav -->
                        <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">

                            <ul class=" nav navbar-nav text-center">
                                <li class="has-mega-menu"><a href="javascript:;">Welcome To Page Company</a>
                                </li>
                            </ul>

                        </div>

                        <!-- Header Right Section-->
                        <div class="extra-nav header-2-nav">
                            <div class="extra-cell">
                                <div class="header-nav-btn-section">
                                    <div class="twm-nav-btn-left">
                                        <a class="twm-nav-sign-up" data-bs-toggle="modal" href="#sign_up_popup" role="button">
                                            <i class="feather-log-in"></i> Logout
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             <!-- SITE Search -->
                <div id="search">
                    <span class="close"></span>
                    <form role="search" id="searchform" action="https://thewebmax.org/search" method="get" class="radius-xl">
                        <input class="form-control" value="" name="q" type="search" placeholder="Type to search"/>
                        <span class="input-group-append">
                            <button type="button" class="search-btn">
                                <i class="fa fa-paper-plane"></i>
                            </button>
                        </span>
                    </form>
                </div>
            </div>








        </header>
        <!-- HEADER END -->

         <!-- CONTENT START -->
         <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{asset('jobnest')}}/images/banner/1.jpg);">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title">Company Profile</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->

                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Company Profile</li>
                                </ul>
                            </div>

                        <!-- BREADCRUMB ROW END -->
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->


            <!-- OUR BLOG START -->
            <div class="section-full p-t120  p-b90 site-bg-white">


                <div class="container">
                    <div class="row">

                        <div class="col-xl-3 col-lg-4 col-md-12 rightSidebar m-b30">

                            <div class="side-bar-st-1">

                                <div class="twm-candidate-profile-pic">
                                    <div class="twm-media">
                                        <img src="{{ asset('landingPage/assets/img/icon/' . $company->foto) }}" alt="">
                                    </div>
                                    <div class="upload-btn-wrapper">

                                        <div id="upload-image-grid"></div>
                                        <button class="site-button button-sm">Upload Photo</button>
                                        <input type="file" name="myfile" id="file-uploader" accept=".jpg, .jpeg, .png">
                                    </div>

                                </div>

                                <div class="twm-mid-content text-center">
                                    <a href="candidate-detail.html" class="twm-job-title">
                                        <h4>{{$company->nama_company}}</h4>
                                    </a>
                                    <p>{{$company->industri}}</p>
                                </div>

                                <div class="twm-nav-list-1">
                                    <ul>
                                        <li><a href="/profileCompany/{id}"><i class="fa fa-user"></i> Company Profile</a></li>
                                        <li><a href="employer-resume.html"><i class="fa fa-receipt"></i> Resume</a></li>
                                        <li class="active"><a href="/joblist/{id}"><i class="fa fa-suitcase"></i> Manage Jobs</a></li>
                                        <li><a href="employer-post-job.html"><i class="fa fa-book-reader"></i> Post A Jobs</a></li>
                                        <li><a href="employer-transaction.html"><i class="fa fa-credit-card"></i>Transaction</a></li>
                                        <li><a href="/kandidat"><i class="fa fa-user-check"></i> Browse Candidates</a></li>
                                        <li><a href="employer-change-password.html"><i class="fa fa-fingerprint"></i> Change Passeord</a></li>
                                        <li><a href="index.html"><i class="fa fa-share-square"></i> Logout</a></li>
                                        <li><a href="employer-account-fresher.html"><i class="fa fa-pencil-alt"></i>Register Fresher</a></li>
                                        <li><a href="employer-account-professional.html"><i class="fa fa-pencil-alt"></i>Register Professionals</a></li>
                                    </ul>
                                </div>

                            </div>

                        </div>

                        <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
                            <!--Filter Short By-->
                            <div class="twm-right-section-panel site-bg-gray">
                                <form>
                                    <!--Basic Information-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading wt-panel-heading p-a20">
                                            <h4 class="panel-tittle m-a0"><i class="fa fa-suitcase"></i>Manage jobs</h4>
                                        </div>
                                        <div class="panel-body wt-panel-body m-b30 ">
                                            <div class="twm-D_table p-a20 table-responsive">
                                                <table id="jobs_bookmark_table" class="table table-bordered twm-bookmark-list-wrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Job Title</th>
                                                            <th>Gaji</th>
                                                            <th>Job Types</th>
                                                            <th>Applications</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!--1-->
                                                        @foreach ($listJobCompany as $list )
                                                        <tr>
                                                            <td>
                                                                <div class="twm-bookmark-list">

                                                                    <div class="twm-mid-content">
                                                                        <a href="#" class="twm-job-title">
                                                                            <h4>{{$list->job}}</h4>
                                                                            <p class="twm-bookmark-address">
                                                                                <i class="feather-map-pin"></i>{{$list->lokasi}}
                                                                            </p>
                                                                        </a>

                                                                    </div>

                                                                </div>
                                                            </td>
                                                            <td>{{$list->gaji}}</td>
                                                            <td><div class="twm-jobs-category"><span class="twm-bg-green">{{$list->kategori}}</span></div></td>
                                                            <td><a href="javascript:;" class="site-text-primary">{{$sumApply}} Applied</a></td>
                                                            <td>
                                                                <span class="text-clr-green2">Active</span>
                                                            </td>

                                                            <td>
                                                                <div class="twm-table-controls">
                                                                    <ul class="twm-DT-controls-icon list-unstyled">
                                                                        <li>
                                                                            <button title="View profile" type="button" data-bs-toggle="tooltip" data-bs-placement="top">
                                                                                <span class="fa fa-eye"></span>
                                                                            </button>
                                                                        </li>

                                                                        <li>
                                                                            <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                                                <span class="far fa-trash-alt"></span>
                                                                            </button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach

                                                        {{-- <!--2-->
                                                        <tr>
                                                            <td>
                                                                <div class="twm-bookmark-list">

                                                                    <div class="twm-mid-content">
                                                                        <a href="#" class="twm-job-title">
                                                                            <h4>Sr. Rolling Stock Technician</h4>
                                                                            <p class="twm-bookmark-address">
                                                                                <i class="feather-map-pin"></i>Sacramento, California
                                                                            </p>
                                                                        </a>

                                                                    </div>

                                                                </div>
                                                            </td>
                                                            <td>Product Manager</td>
                                                            <td><div class="twm-jobs-category"><span class="twm-bg-brown">Intership</span></div></td>
                                                            <td><a href="javascript:;" class="site-text-primary">05 Applied</a></td>
                                                            <td>
                                                                <span class="text-clr-green2">Active</span>
                                                            </td>

                                                            <td>
                                                                <div class="twm-table-controls">
                                                                    <ul class="twm-DT-controls-icon list-unstyled">
                                                                        <li>
                                                                            <button title="View profile" type="button" data-bs-toggle="tooltip" data-bs-placement="top">
                                                                                <span class="fa fa-eye"></span>
                                                                            </button>
                                                                        </li>

                                                                        <li>
                                                                            <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                                                <span class="far fa-trash-alt"></span>
                                                                            </button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <!--3-->
                                                        <tr>
                                                            <td>
                                                                <div class="twm-bookmark-list">

                                                                    <div class="twm-mid-content">
                                                                        <a href="#" class="twm-job-title">
                                                                            <h4>IT Department Manager</h4>
                                                                            <p class="twm-bookmark-address">
                                                                                <i class="feather-map-pin"></i>Sacramento, California
                                                                            </p>
                                                                        </a>

                                                                    </div>

                                                                </div>
                                                            </td>
                                                            <td>PHP Developer</td>
                                                            <td><div class="twm-jobs-category"><span class="twm-bg-purple">Fulltime</span></div></td>
                                                            <td><a href="javascript:;" class="site-text-primary">06 Applied</a></td>
                                                            <td>
                                                                <span class="text-clr-red">Reject</span>
                                                            </td>

                                                            <td>
                                                                <div class="twm-table-controls">
                                                                    <ul class="twm-DT-controls-icon list-unstyled">
                                                                        <li>
                                                                            <button title="View profile" type="button" data-bs-toggle="tooltip" data-bs-placement="top">
                                                                                <span class="fa fa-eye"></span>
                                                                            </button>
                                                                        </li>

                                                                        <li>
                                                                            <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                                                <span class="far fa-trash-alt"></span>
                                                                            </button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <!--4-->
                                                        <tr>
                                                            <td>
                                                                <div class="twm-bookmark-list">

                                                                    <div class="twm-mid-content">
                                                                        <a href="#" class="twm-job-title">
                                                                            <h4>Art Production Specialist</h4>
                                                                            <p class="twm-bookmark-address">
                                                                                <i class="feather-map-pin"></i>Sacramento, California
                                                                            </p>
                                                                        </a>

                                                                    </div>

                                                                </div>
                                                            </td>
                                                            <td>Product Designer</td>
                                                            <td><div class="twm-jobs-category"><span class="twm-bg-sky">Freelancer</span></div></td>
                                                            <td><a href="javascript:;" class="site-text-primary">13 Applied</a></td>
                                                            <td>
                                                                <span class="text-clr-green2">Active</span>
                                                            </td>

                                                            <td>
                                                                <div class="twm-table-controls">
                                                                    <ul class="twm-DT-controls-icon list-unstyled">
                                                                        <li>
                                                                            <button title="View profile" type="button" data-bs-toggle="tooltip" data-bs-placement="top">
                                                                                <span class="fa fa-eye"></span>
                                                                            </button>
                                                                        </li>

                                                                        <li>
                                                                            <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                                                <span class="far fa-trash-alt"></span>
                                                                            </button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <!--5-->
                                                        <tr>
                                                            <td>
                                                                <div class="twm-bookmark-list">

                                                                    <div class="twm-mid-content">
                                                                        <a href="#" class="twm-job-title">
                                                                            <h4>Recreation & Fitness Worker</h4>
                                                                            <p class="twm-bookmark-address">
                                                                                <i class="feather-map-pin"></i>Sacramento, California
                                                                            </p>
                                                                        </a>

                                                                    </div>

                                                                </div>
                                                            </td>
                                                            <td>Gym Trainer</td>
                                                            <td><div class="twm-jobs-category"><span class="twm-bg-golden">Temporary</span></div></td>
                                                            <td><a href="javascript:;" class="site-text-primary">08 Applied</a></td>
                                                            <td>
                                                                <span class="text-clr-yellow">Pending</span>
                                                            </td>

                                                            <td>
                                                                <div class="twm-table-controls">
                                                                    <ul class="twm-DT-controls-icon list-unstyled">
                                                                        <li>
                                                                            <button title="View profile" type="button" data-bs-toggle="tooltip" data-bs-placement="top">
                                                                                <span class="fa fa-eye"></span>
                                                                            </button>
                                                                        </li>

                                                                        <li>
                                                                            <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                                                <span class="far fa-trash-alt"></span>
                                                                            </button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <!--6-->
                                                        <tr>
                                                            <td>
                                                                <div class="twm-bookmark-list">

                                                                    <div class="twm-mid-content">
                                                                        <a href="#" class="twm-job-title">
                                                                            <h4>Senior Web Designer</h4>
                                                                            <p class="twm-bookmark-address">
                                                                                <i class="feather-map-pin"></i>Sacramento, California
                                                                            </p>
                                                                        </a>

                                                                    </div>

                                                                </div>
                                                            </td>
                                                            <td>Web Designer</td>
                                                            <td><div class="twm-jobs-category"><span class="twm-bg-green">New</span></div></td>
                                                            <td><a href="javascript:;" class="site-text-primary">14 Applied</a></td>
                                                            <td>
                                                                <span class="text-clr-yellow">Pending</span>
                                                            </td>

                                                            <td>
                                                                <div class="twm-table-controls">
                                                                    <ul class="twm-DT-controls-icon list-unstyled">
                                                                        <li>
                                                                            <button title="View profile" type="button" data-bs-toggle="tooltip" data-bs-placement="top">
                                                                                <span class="fa fa-eye"></span>
                                                                            </button>
                                                                        </li>

                                                                        <li>
                                                                            <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                                                <span class="far fa-trash-alt"></span>
                                                                            </button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!--7-->
                                                        <tr>
                                                            <td>
                                                                <div class="twm-bookmark-list">

                                                                    <div class="twm-mid-content">
                                                                        <a href="#" class="twm-job-title">
                                                                            <h4>Sr. Rolling Stock Technician</h4>
                                                                            <p class="twm-bookmark-address">
                                                                                <i class="feather-map-pin"></i>Sacramento, California
                                                                            </p>
                                                                        </a>

                                                                    </div>

                                                                </div>
                                                            </td>
                                                            <td>Product Manager</td>
                                                            <td><div class="twm-jobs-category"><span class="twm-bg-green">New</span></div></td>
                                                            <td><a href="javascript:;" class="site-text-primary">10 Applied</a></td>
                                                            <td>
                                                                <span class="text-clr-green2">Active</span>
                                                            </td>

                                                            <td>
                                                                <div class="twm-table-controls">
                                                                    <ul class="twm-DT-controls-icon list-unstyled">
                                                                        <li>
                                                                            <button title="View profile" type="button" data-bs-toggle="tooltip" data-bs-placement="top">
                                                                                <span class="fa fa-eye"></span>
                                                                            </button>
                                                                        </li>

                                                                        <li>
                                                                            <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                                                <span class="far fa-trash-alt"></span>
                                                                            </button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr> --}}

                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- OUR BLOG END -->



        </div>






<!-- CONTENT END -->

        <!-- FOOTER START -->
        <footer class="footer-dark" style="background-image: url(images/f-bg.jpg);">
            <div class="container">

                <!-- NEWS LETTER SECTION START -->
                <div class="ftr-nw-content">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="ftr-nw-title">
                                Join our email subscription now to get updates
                                on new jobs and notifications.
                            </div>
                        </div>
                        <div class="col-md-7">
                            <form>
                                <div class="ftr-nw-form">
                                    <input name="news-letter" class="form-control" placeholder="Enter Your Email" type="text">
                                    <button class="ftr-nw-subcribe-btn">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- NEWS LETTER SECTION END -->
                <!-- FOOTER BLOCKES START -->
                <div class="footer-top">
                    <div class="row">

                        <div class="col-lg-3 col-md-12">

                            <div class="widget widget_about">
                                <div class="logo-footer clearfix">
                                    <a href="index.html"><img src="images/logo-light.png" alt=""></a>
                                </div>
                                <p>Many desktop publishing packages and web page editors now.</p>
                                <ul class="ftr-list">
                                    <li><p><span>Address :</span>65 Sunset CA 90026, USA </p></li>
                                    <li><p><span>Email :</span>example@max.com</p></li>
                                    <li><p><span>Call :</span>555-555-1234</p></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-9 col-md-12">
                            <div class="row">

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">For Candidate</h3>
                                        <ul>
                                            <li><a href="dashboard.html">User Dashboard</a></li>
                                            <li><a href="dash-resume-alert.html">Alert resume</a></li>
                                            <li><a href="candidate-grid.html">Candidates</a></li>
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="blog-single.html">Blog single</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">For Employers</h3>
                                        <ul>
                                            <li><a href="dash-post-job.html">Post Jobs</a></li>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="job-list.html">Jobs Listing</a></li>
                                            <li><a href="job-detail.html">Jobs details</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">Helpful Resources</h3>
                                        <ul>
                                            <li><a href="faq.html">FAQs</a></li>
                                            <li><a href="employer-detail.html">Employer detail</a></li>
                                            <li><a href="dash-my-profile.html">Profile</a></li>
                                            <li><a href="error-404.html">404 Page</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">Quick Links</h3>
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about-1.html">About us</a></li>
                                            <li><a href="dash-bookmark.html">Bookmark</a></li>
                                            <li><a href="job-grid.html">Jobs</a></li>
                                            <li><a href="employer-list.html">Employer</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                <!-- FOOTER COPYRIGHT -->
                <div class="footer-bottom">

                    <div class="footer-bottom-info">

                        <div class="footer-copy-right">
                            <span class="copyrights-text">Copyright © 2023 by thewebmax All Rights Reserved.</span>
                        </div>
                        <ul class="social-icons">
                            <li><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-instagram"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-youtube"></a></li>
                        </ul>

                    </div>

                </div>

            </div>

        </footer>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

        <!--Model Popup Section Start-->
            <!--Signup popup -->
            <div class="modal fade twm-sign-up" id="sign_up_popup" aria-hidden="true" aria-labelledby="sign_up_popupLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form>

                            <div class="modal-header">
                                <h2 class="modal-title" id="sign_up_popupLabel">Sign Up</h2>
                                <p>Sign Up and get access to all the features of Jobzilla</p>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="twm-tabs-style-2">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                                    <!--Signup Candidate-->
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#sign-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                                    </li>
                                    <!--Signup Employer-->
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sign-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                                    </li>

                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                    <!--Signup Candidate Content-->
                                    <div class="tab-pane fade show active" id="sign-candidate">
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Email*">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Phone*">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="agree1">
                                                        <label class="form-check-label" for="agree1">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                                        <p>Already registered?
                                                            <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="site-button">Sign Up</button>
                                            </div>

                                        </div>
                                    </div>
                                    <!--Signup Employer Content-->
                                    <div class="tab-pane fade" id="sign-Employer">
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Email*">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Phone*">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="agree2">
                                                        <label class="form-check-label" for="agree2">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                                        <p>Already registered?
                                                            <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="site-button">Sign Up</button>
                                            </div>

                                        </div>
                                    </div>

                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <span class="modal-f-title">Login or Sign up with</span>
                                <ul class="twm-modal-social">
                                    <li><a href="javascript.html" class="facebook-clr"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="javascript.html" class="twitter-clr"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="javascript.html" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="javascript.html" class="google-clr"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
            <!--Login popup -->
            <div class="modal fade twm-sign-up" id="sign_up_popup2" aria-hidden="true" aria-labelledby="sign_up_popupLabel2" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <form>
                            <div class="modal-header">
                                <h2 class="modal-title" id="sign_up_popupLabel2">Login</h2>
                                <p>Login and get access to all the features of Jobzilla</p>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="twm-tabs-style-2">
                                    <ul class="nav nav-tabs" id="myTab2" role="tablist">

                                        <!--Login Candidate-->
                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#login-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                                        </li>
                                        <!--Login Employer-->
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#login-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                                        </li>

                                    </ul>

                                    <div class="tab-content" id="myTab2Content">
                                        <!--Login Candidate Content-->
                                        <div class="tab-pane fade show active" id="login-candidate">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                    </div>
                                                </div>


                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <div class=" form-check">
                                                            <input type="checkbox" class="form-check-input" id="Password3">
                                                            <label class="form-check-label rem-forgot" for="Password3">Remember me <a href="javascript:;">Forgot Password</a></label>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="site-button">Log in</button>
                                                    <div class="mt-3 mb-3">Don't have an account ?
                                                        <button class="twm-backto-login" data-bs-target="#sign_up_popup" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!--Login Employer Content-->
                                        <div class="tab-pane fade" id="login-Employer">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                    </div>
                                                </div>


                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <div class=" form-check">
                                                            <input type="checkbox" class="form-check-input" id="Password4">
                                                            <label class="form-check-label rem-forgot" for="Password4">Remember me <a href="javascript:;">Forgot Password</a></label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <button type="submit" class="site-button">Log in</button>
                                                    <div class="mt-3 mb-3">Don't have an account ?
                                                        <button class="twm-backto-login" data-bs-target="#sign_up_popup" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <span class="modal-f-title">Login or Sign up with</span>
                                <ul class="twm-modal-social">
                                    <li><a href="javascript.html" class="facebook-clr"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="javascript.html" class="twitter-clr"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="javascript.html" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="javascript.html" class="google-clr"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <!--Model Popup Section End-->

 	</div>


<!-- JAVASCRIPT  FILES ========================================= -->
<script  src="{{asset('jobnest')}}/js/jquery-3.6.0.min.js"></script><!-- JQUERY.MIN JS -->
<script  src="{{asset('jobnest')}}/js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script  src="{{asset('jobnest')}}/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="{{asset('jobnest')}}/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="{{asset('jobnest')}}/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script  src="{{asset('jobnest')}}/js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script  src="{{asset('jobnest')}}/js/waypoints-sticky.min.js"></script><!-- STICKY HEADER -->
<script  src="{{asset('jobnest')}}/js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
<script  src="{{asset('jobnest')}}/js/imagesloaded.pkgd.min.js"></script><!-- MASONRY  -->
<script  src="{{asset('jobnest')}}/js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script  src="{{asset('jobnest')}}/js/theia-sticky-sidebar.js"></script><!-- STICKY SIDEBAR  -->
<script  src="{{asset('jobnest')}}/js/lc_lightbox.lite.js" ></script><!-- IMAGE POPUP -->
<script  src="{{asset('jobnest')}}/js/bootstrap-select.min.js"></script><!-- Form js -->
<script  src="{{asset('jobnest')}}/js/dropzone.js"></script><!-- IMAGE UPLOAD  -->
<script  src="{{asset('jobnest')}}/js/jquery.scrollbar.js"></script><!-- scroller -->
<script  src="{{asset('jobnest')}}/js/bootstrap-datepicker.js"></script><!-- scroller -->
<script  src="{{asset('jobnest')}}/js/jquery.dataTables.min.js"></script><!-- Datatable -->
<script  src="{{asset('jobnest')}}/js/dataTables.bootstrap5.min.js"></script><!-- Datatable -->
<script  src="{{asset('jobnest')}}/js/chart.js"></script><!-- Chart -->
<script  src="{{asset('jobnest')}}/js/bootstrap-slider.min.js"></script><!-- Price range slider -->
<script  src="{{asset('jobnest')}}/js/swiper-bundle.min.js"></script><!-- Swiper JS -->
<script  src="{{asset('jobnest')}}/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script  src="{{asset('jobnest')}}/js/switcher.js"></script><!-- SHORTCODE FUCTIONS  -->

<!-- STYLE SWITCHER  ======= -->
<div class="styleswitcher">

    <div class="switcher-btn-bx">
        <a class="switch-btn">
            <span class="fa fa-cog fa-spin"></span>
        </a>
    </div>

    <div class="styleswitcher-inner">

        <h6 class="switcher-title">Color Skin</h6>
        <ul class="color-skins">
            <li><a class="theme-skin skin-1" href="employer-profilea39b.html?theme=css/skin/skin-1"></a></li>
            <li><a class="theme-skin skin-2" href="employer-profile61e7.html?theme=css/skin/skin-2"></a></li>
            <li><a class="theme-skin skin-3" href="employer-profilecce5.html?theme=css/skin/skin-3"></a></li>
            <li><a class="theme-skin skin-4" href="employer-profile13f7.html?theme=css/skin/skin-4"></a></li>
            <li><a class="theme-skin skin-5" href="employer-profile19a6.html?theme=css/skin/skin-5"></a></li>
            <li><a class="theme-skin skin-6" href="employer-profilefe5c.html?theme=css/skin/skin-6"></a></li>
            <li><a class="theme-skin skin-7" href="employer-profileab47.html?theme=css/skin/skin-7"></a></li>
            <li><a class="theme-skin skin-8" href="employer-profile5f8d.html?theme=css/skin/skin-8"></a></li>
            <li><a class="theme-skin skin-9" href="employer-profile5663.html?theme=css/skin/skin-9"></a></li>
            <li><a class="theme-skin skin-10" href="employer-profile28ac.html?theme=css/skin/skin-10"></a></li>

        </ul>

    </div>
</div>
<!-- STYLE SWITCHER END ==== -->

</body>


<!-- Mirrored from thewebmax.org/jobzilla/employer-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jan 2024 13:03:19 GMT -->
</html>