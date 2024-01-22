@include('landingPage.layouts.header')
{{-- !-- LOADING AREA START ===== --> --}}
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->


     <!-- CONTENT START -->
     <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{asset('jobnest')}}/images/banner/1.jpg);">
            <div class="overlay-main site-bg-white opacity-01"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="wt-title">Profile</h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->

                        <div>
                            <ul class="wt-breadcrumb breadcrumb-style-2">
                                <li><a href="/">Home</a></li>
                                <li>Profile</li>
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

                                <img src="{{asset('jobnest')}}/images/user-avtar/pic4.jpg" alt="">
                                <div class="upload-btn-wrapper">

                                    <div id="upload-image-grid"></div>
                                    <button class="site-button button-sm">Upload Photo</button>
                                    <input type="file" name="myfile" id="file-uploader" accept=".jpg, .jpeg, .png">
                                </div>

                            </div>
                            <div class="twm-mid-content text-center">
                                <a href="candidate-detail.html" class="twm-job-title">
                                    <h4>{{$user->name}}</h4>
                                </a>
                                <p>IT Contractor</p>
                            </div>

                            <div class="twm-nav-list-1">
                                <ul>
                                    <li><a href="candidate-dashboard.html"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
                                    <li><a href="candidate-profile.html"><i class="fa fa-user"></i> My Pfofile</a></li>
                                    <li class="active"><a href="candidate-jobs-applied.html"><i class="fa fa-suitcase"></i> Applied Jobs</a></li>
                                    <li><a href="/resume/{id}"><i class="fa fa-receipt"></i> My Resume</a></li>
                                    <li><a href="candidate-saved-jobs.html"><i class="fa fa-file-download"></i> Saved Jobs</a></li>
                                    <li><a href="candidate-cv-manager.html"><i class="fa fa-paperclip"></i> CV Manager</a></li>
                                    <li><a href="candidate-job-alert.html"><i class="fa fa-bell"></i> Job Alerts</a></li>
                                    <li><a href="candidate-change-password.html"><i class="fa fa-fingerprint"></i> Change Passeord</a></li>
                                    <li><a href="candidate-chat.html"><i class="fa fa-comments"></i>Chat</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>

                    <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
                        <div class="twm-right-section-panel candidate-save-job site-bg-gray">
                            <!--Filter Short By-->
                            <div class="product-filter-wrap d-flex justify-content-between align-items-center">
                                <span class="woocommerce-result-count-left">Applied 250 jobs</span>

                                <form class="woocommerce-ordering twm-filter-select" method="get">
                                    <span class="woocommerce-result-count">Short By</span>
                                    <select class="wt-select-bar-2 selectpicker"  data-live-search="true" data-bv-field="size">
                                        <option>Most Recent</option>
                                        <option>Freelance</option>
                                        <option>Full Time</option>
                                        <option>Internship</option>
                                        <option>Part Time</option>
                                        <option>Temporary</option>
                                    </select>
                                    <select class="wt-select-bar-2 selectpicker"  data-live-search="true" data-bv-field="size">
                                        <option>Show 10</option>
                                        <option>Show 20</option>
                                        <option>Show 30</option>
                                        <option>Show 40</option>
                                        <option>Show 50</option>
                                        <option>Show 60</option>
                                    </select>
                                </form>

                            </div>

                            <div class="twm-jobs-list-wrap">
                                <ul>
                                    @foreach ($job as $jobs )
                                    <li>
                                        <div class="twm-jobs-list-style1 mb-5">
                                            <div class="twm-media">
                                                <img src="{{ asset('landingPage/assets/img/icon/' . $jobs->job->logo_company) }}"alt="">
                                            </div>
                                            <div class="twm-mid-content">
                                                <a href="job-detail.html" class="twm-job-title">
                                                    <h4>{{$jobs->job->job}}<span class="twm-job-post-duration">/ 1 days ago</span></h4>
                                                </a>
                                                <p class="twm-job-address">{{$jobs->job->lokasi}}</p>
                                                <a href="https://themeforest.net/user/thewebmax/portfolio" class="twm-job-websites site-text-primary">{{$jobs->job->email_company}}</a>
                                            </div>
                                            <div class="twm-right-content">
                                                <div class="twm-jobs-category green"><span class="twm-bg-green">{{$jobs->job->kategori}}</span></div>
                                                <div class="twm-jobs-amount">{{$jobs->job->gaji}} <span>/ Month</span></div>
                                                <a data-bs-toggle="modal" href="#saved-jobs-view{{$jobs->id}}" class="twm-jobs-browse site-text-primary">Apply Job</a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="pagination-outer">
                                <div class="pagination-style1">
                                    <ul class="clearfix">
                                        <li class="prev"><a href="javascript:;"><span> <i class="fa fa-angle-left"></i> </span></a></li>
                                        <li><a href="javascript:;">1</a></li>
                                        <li class="active"><a href="javascript:;">2</a></li>
                                        <li><a href="javascript:;">3</a></li>
                                        <li><a class="javascript:;" href="javascript:;"><i class="fa fa-ellipsis-h"></i></a></li>
                                        <li><a href="javascript:;">5</a></li>
                                        <li class="next"><a href="javascript:;"><span> <i class="fa fa-angle-right"></i> </span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- OUR BLOG END -->



    </div>
    <!-- CONTENT END -->

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

@foreach ($job as $jobs)
<div class="modal fade twm-saved-jobs-view" id="saved-jobs-view{{$jobs->id}}" aria-hidden="true" aria-labelledby="sign_up_popupLabel-3" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form>

                <div class="modal-header">
                    <h2 class="modal-title" id="sign_up_popupLabel-3">{{$jobs->job->nama_company}}</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <ul class="list-unstyled">
                        <li><strong>Job Title :</strong><p> {{$jobs->job->job}}</p></li>
                        <li><strong>Experience :</strong><p>{{$jobs->job->kategori}}, {{$jobs->job->gaji}}/bulan</p></li>
                        <li><strong>Deseription :</strong>
                            @if ($jobs->tgl_interview == NULL)
                            <p>Masih diseleksi</p>
                            @else
                            <p>Selamat, Anda lulus tahap pemberkasa. Berikut adalah tanggal interview Anda</p>
                            @endif
                        </li>
                    </ul>
                </div>

                <div class="modal-footer">

                    <button type="button" class="site-button" data-bs-dismiss="modal">Close</button>

                </div>

            </form>
        </div>
    </div>

</div>
@endforeach


@include('landingPage.layouts.footer')
@include('landingPage.layouts.script')

