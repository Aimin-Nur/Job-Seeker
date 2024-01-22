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
                                    <li><a href="/jobByUser/{id}"><i class="fa fa-suitcase"></i> Applied Jobs</a></li>
                                    <li class="active"><a href="/resume/{id}"><i class="fa fa-receipt"></i> My Resume</a></li>
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
                        <div class="twm-right-section-panel site-bg-gray">

                                <!--Resume Headline-->
                                <div class="panel panel-default mb-3">
                                    <div class="panel-heading wt-panel-heading p-a20 panel-heading-with-btn ">
                                        <h4 class="panel-tittle m-a0">Deskripsi Tentang Diri Anda</h4>
                                        <a data-bs-toggle="modal" href="#Resume_Headline" role="button" title="Edit" class="site-text-primary">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                    </div>
                                    <div class="panel-body wt-panel-body p-a20 ">
                                        <div class="twm-panel-inner">
                                            <p>Senior UI / UX Designer and Developer at Google INC</p>
                                        </div>
                                    </div>
                                    <!--Modal Popup -->
                                    <div class="modal fade twm-saved-jobs-view" id="Resume_Headline" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <form>

                                                    <div class="modal-header">
                                                        <h2 class="modal-title">Tentang Anda</h2>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <p>It is the first thing recruiters notice in your profile. Write concisely what makes you unique and right person for the job you are looking for.</p>

                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group twm-textarea-full">
                                                                        <textarea class="form-control" placeholder="Type Description"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                    </div>

                                                    <div class="modal-footer">

                                                        <button type="button" class="site-button" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="site-button">Save</button>

                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!--Soft Skill-->
                                <div class="panel panel-default mb-3">
                                    <div class="panel-heading wt-panel-heading p-a20 panel-heading-with-btn ">
                                        <h4 class="panel-tittle m-a0">Soft Skill</h4>
                                        <a data-bs-toggle="modal" href="#Employment" role="button" title="Edit" class="site-text-primary">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                    </div>
                                    <div class="panel-body wt-panel-body p-a20 ">
                                        <div class="twm-panel-inner">
                                            <p><b>Senior UI / UX Designer and Developer</b></p>
                                            <p>Google INC</p>
                                            <p>Experience (6 Year)</p>
                                            <p>Available to join in 1 Months</p>
                                        </div>
                                    </div>

                                    <!--Employment -->
                                    <div class="modal fade twm-saved-jobs-view" id="Employment" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <form>

                                                    <div class="modal-header">
                                                        <h2 class="modal-title">Add Employment</h2>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">

                                                        <div class="row">
                                                            <div class="col-xl-12 col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Your Designation</label>
                                                                    <div class="ls-inputicon-box">
                                                                        <input class="form-control"  type="text" placeholder="Enter Your Designation">
                                                                        <i class="fs-input-icon fa fa-address-card"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Your Organization</label>
                                                                    <div class="ls-inputicon-box">
                                                                        <input class="form-control" type="text" placeholder="Enter Your Organization">
                                                                        <i class="fs-input-icon fa fa-building"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Is this your current company?</label>
                                                                    <div class="row twm-form-radio-inline">

                                                                        <div class="col-md-6">
                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                                Yes
                                                                            </label>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="S_no" checked>
                                                                            <label class="form-check-label" for="S_no">
                                                                                No
                                                                            </label>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--Start Date-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Started Working From</label>
                                                                    <div class="ls-inputicon-box">
                                                                        <input class="form-control datepicker" data-provide="datepicker" name="company_since" type="text" placeholder="mm/dd/yyyy">
                                                                        <i class="fs-input-icon far fa-calendar"></i>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--End Date-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Worked Till</label>
                                                                    <div class="ls-inputicon-box">
                                                                        <input class="form-control datepicker" data-provide="datepicker" name="company_since" type="text" placeholder="mm/dd/yyyy">
                                                                        <i class="fs-input-icon far fa-calendar"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group mb-0">
                                                                    <label>Describe your Job Profile</label>
                                                                    <textarea class="form-control" rows="3" placeholder="Describe your Job"></textarea>
                                                                </div>
                                                            </div>

                                                        </div>


                                                    </div>

                                                    <div class="modal-footer">

                                                        <button type="button" class="site-button" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="site-button">Save</button>

                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!--Education-->
                                <div class="panel panel-default mb-3">
                                    <div class="panel-heading wt-panel-heading p-a20 panel-heading-with-btn ">
                                        <h4 class="panel-tittle m-a0">Riwayat Pendidikan</h4>
                                        <a data-bs-toggle="modal" href="#Education" role="button" title="Edit" class="site-text-primary">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                    </div>
                                    <div class="panel-body wt-panel-body p-a20 ">
                                        <div class="twm-panel-inner">
                                            <p>Mention your employment details including your current and previous company work experience</p>
                                            <p>2004 to 2006</p>
                                            <p><b>BCA - Bachelor of Computer Applications</b></p>
                                            <p>2006 to 2008</p>
                                            <p><b>MCA - Master of Computer Application</b></p>
                                            <p>2008 to 20011</p>
                                            <p><b>Design Communication Visual</b></p>
                                            <p><a class="site-text-primary" href="javascript:;">Add Doctorate/PhD</a></p>
                                            <p><a class="site-text-primary" href="javascript:;">Add Masters/Post-Graduation</a></p>
                                            <p><a class="site-text-primary" href="javascript:;">Add Graduation/Diploma</a></p>
                                        </div>
                                    </div>

                                    <!--Education -->
                                    <div class="modal fade twm-saved-jobs-view" id="Education" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <form>

                                                    <div class="modal-header">
                                                        <h2 class="modal-title">Education</h2>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="row">

                                                            <div class="col-xl-12 col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Education</label>
                                                                    <div class="ls-inputicon-box">
                                                                        <select class="wt-select-box selectpicker"  data-live-search="true" title="" data-bv-field="size">
                                                                            <option class="bs-title-option" value="">Select Category</option>
                                                                            <option>Graduation/Diploma</option>
                                                                            <option>Masters/Post-Graduation</option>
                                                                        </select>
                                                                        <i class="fs-input-icon fa fa-user-graduate"></i>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-12 col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Course</label>
                                                                    <div class="ls-inputicon-box">
                                                                        <select class="wt-select-box selectpicker"  data-live-search="true" title=""  data-bv-field="size">
                                                                            <option class="bs-title-option" value="">Select Course</option>
                                                                            <option>BBA- Bachelor of Business Administration</option>
                                                                            <option>BFA- Bachelor of Fine Arts</option>
                                                                            <option>BSW- Bachelor of Social Work</option>
                                                                        </select>
                                                                        <i class="fs-input-icon fa fa-book"></i>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-12 col-lg-12">
                                                                <div class="form-group">
                                                                    <label>University/Institute</label>
                                                                    <div class="ls-inputicon-box">
                                                                        <select class="wt-select-box selectpicker"  data-live-search="true" title=""  data-bv-field="size">
                                                                            <option class="bs-title-option" value="">Select University</option>
                                                                            <option>University of Cambridge</option>
                                                                            <option>Stanford University</option>
                                                                            <option>Imperial College London</option>
                                                                        </select>
                                                                        <i class="fs-input-icon fas fa-book-reader"></i>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">

                                                        <button type="button" class="site-button" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="site-button">Save</button>

                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                                <!--Project-->
                                <div class="panel panel-default mb-3">
                                    <div class="panel-heading wt-panel-heading p-a20 panel-heading-with-btn ">
                                        <h4 class="panel-tittle m-a0">Project</h4>
                                        <a data-bs-toggle="modal" href="#Pro_ject" role="button" title="Edit" class="site-text-primary">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                    </div>
                                    <div class="panel-body wt-panel-body p-a20 ">
                                        <div class="twm-panel-inner">
                                            <p><b>Jobzilla</b></p>
                                            <p>Google INC</p>
                                            <p>January 2023 to Present</p>
                                            <p>Jobjilla Template</p>
                                        </div>
                                    </div>

                                    <!--Project -->
                                    <div class="modal fade twm-saved-jobs-view" id="Pro_ject" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <form>

                                                    <div class="modal-header">
                                                        <h2 class="modal-title">Add Project</h2>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">

                                                        <div class="row">
                                                            <div class="col-xl-12 col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Project Title</label>
                                                                    <div class="ls-inputicon-box">
                                                                        <input class="form-control"  type="text" placeholder="Enter Project Title">
                                                                        <i class="fs-input-icon fa fa-address-card"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Education</label>
                                                                    <div class="ls-inputicon-box">
                                                                        <select class="wt-select-box selectpicker"  data-live-search="true" title=""  data-bv-field="size">
                                                                            <option class="bs-title-option" value="">Select Category</option>
                                                                            <option>Graduation/Diploma</option>
                                                                            <option>Masters/Post-Graduation</option>
                                                                        </select>
                                                                        <i class="fs-input-icon fa fa-user-graduate"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Client</label>
                                                                    <div class="ls-inputicon-box">
                                                                        <input class="form-control" type="text" placeholder="Enter Client Name">
                                                                        <i class="fs-input-icon fa fa-user"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Project Status</label>
                                                                    <div class="row twm-form-radio-inline">

                                                                        <div class="col-md-6">
                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="In_Progress">
                                                                            <label class="form-check-label" for="In_Progress">
                                                                                In Progress
                                                                            </label>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="Finished" checked>
                                                                            <label class="form-check-label" for="Finished">
                                                                                Finished
                                                                            </label>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--Start Date-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Started Working From</label>
                                                                    <div class="ls-inputicon-box">
                                                                        <input class="form-control datepicker" data-provide="datepicker" name="company_since" type="text" placeholder="mm/dd/yyyy">
                                                                        <i class="fs-input-icon far fa-calendar"></i>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--End Date-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Worked Till</label>
                                                                    <div class="ls-inputicon-box">
                                                                        <input class="form-control datepicker" data-provide="datepicker" name="company_since" type="text" placeholder="mm/dd/yyyy">
                                                                        <i class="fs-input-icon far fa-calendar"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group mb-0">
                                                                    <label>Detail of Projects</label>
                                                                    <textarea class="form-control" rows="3" placeholder="Describe your Job"></textarea>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="modal-footer">

                                                        <button type="button" class="site-button" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="site-button">Save</button>

                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <!--Attach Resume-->
                                <div class="panel panel-default mb-3">
                                    <div class="panel-heading wt-panel-heading p-a20 panel-heading-with-btn ">
                                        <h4 class="panel-tittle m-a0">Attach Resume</h4>
                                    </div>
                                    <div class="panel-body wt-panel-body p-a20 ">
                                        <div class="twm-panel-inner">
                                            <p>Resume is the most important document recruiters look for. Recruiters generally do not look at profiles without resumes.</p>
                                            <div class="dashboard-cover-pic">
                                                <form action="https://thewebmax.org/jobzilla/upload.php" class="dropzone"></form>
                                                <p>Upload Resume File size is 3 MB</p>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <!--Sertifikasi-->
                                <div class="panel panel-default mb-3">
                                    <div class="panel-heading wt-panel-heading p-a20 panel-heading-with-btn ">
                                        <h4 class="panel-tittle m-a0">Sertifikasi</h4>
                                    </div>
                                    <div class="panel-body wt-panel-body p-a20 ">
                                        <div class="twm-panel-inner">
                                            <div class="twm-list-wrap">
                                                <div class="twm-list-inner d-flex justify-content-between">
                                                    <b>Online Profile</b>
                                                    <a data-bs-toggle="modal" href="#Online_Profile" role="button" title="Edit" class="site-text-primary">
                                                     <span class="fa fa-edit"></span>
                                                    </a>
                                                </div>
                                                <p>Add link to Online profiles (e.g. Linkedin, Facebook etc.).</p>
                                            </div>
                                            <!--Online Profile Modal -->
                                            <div class="modal fade twm-saved-jobs-view" id="Online_Profile" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form>

                                                            <div class="modal-header">
                                                                <h2 class="modal-title">Online Profiles</h2>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <div class="row">
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Social Profile</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Social Profile Name">
                                                                                <i class="fs-input-icon fa fa-address-card"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>URL</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Url">
                                                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="form-group mb-0">
                                                                            <label>Description</label>
                                                                            <textarea class="form-control" rows="3" placeholder="Type Description"></textarea>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">

                                                                <button type="button" class="site-button" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="site-button">Save</button>

                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="twm-list-wrap">
                                                <div class="twm-list-inner d-flex justify-content-between">
                                                    <b>Work Sample</b>
                                                    <a data-bs-toggle="modal" href="#Work_Sample" role="button" title="Edit" class="site-text-primary">
                                                     <span class="fa fa-edit"></span>
                                                    </a>
                                                </div>
                                                <p>Add link to your Projects (e.g. Github links etc.).</p>
                                            </div>
                                            <!--Work Sample Modal -->
                                            <div class="modal fade twm-saved-jobs-view" id="Work_Sample" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form>

                                                            <div class="modal-header">
                                                                <h2 class="modal-title">Work Sample</h2>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <div class="row">
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Work Title</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Work Title">
                                                                                <i class="fs-input-icon fa fa-address-card"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>URL</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Url">
                                                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>



                                                                    <!--Start Date-->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Duration From</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control datepicker" data-provide="datepicker" name="company_since" type="text" placeholder="mm/dd/yyyy">
                                                                                <i class="fs-input-icon far fa-calendar"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!--End Date-->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Duration to</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control datepicker" data-provide="datepicker" name="company_since" type="text" placeholder="mm/dd/yyyy">
                                                                                <i class="fs-input-icon far fa-calendar"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="Working_on" checked>
                                                                            <label class="form-check-label" for="Working_on">
                                                                                I am currently working on this
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="form-group mb-0">
                                                                            <label>Description</label>
                                                                            <textarea class="form-control" rows="3" placeholder="Type Description"></textarea>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">

                                                                <button type="button" class="site-button" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="site-button">Save</button>

                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="twm-list-wrap">
                                                <div class="twm-list-inner d-flex justify-content-between">
                                                    <b>White Paper / Research Publication / Journal Entry</b>
                                                    <a data-bs-toggle="modal" href="#Research_Publication" role="button" title="Edit" class="site-text-primary">
                                                     <span class="fa fa-edit"></span>
                                                    </a>
                                                </div>
                                                <p>Add links to your Online publications.</p>
                                            </div>
                                            <!--White Paper / Research Publication / Journal Entry Modal -->
                                            <div class="modal fade twm-saved-jobs-view" id="Research_Publication" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form>

                                                            <div class="modal-header">
                                                                <h2 class="modal-title">White Paper / Research Publication / Journal Entry</h2>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <div class="row">
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Title</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Title">
                                                                                <i class="fs-input-icon fa fa-address-card"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>URL</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Url">
                                                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>



                                                                    <!--Start Date-->
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>Published On</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control datepicker" data-provide="datepicker" name="company_since" type="text" placeholder="mm/dd/yyyy">
                                                                                <i class="fs-input-icon far fa-calendar"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="form-group mb-0">
                                                                            <label>Description</label>
                                                                            <textarea class="form-control" rows="3" placeholder="Type Description"></textarea>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">

                                                                <button type="button" class="site-button" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="site-button">Save</button>

                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="twm-list-wrap">
                                                <div class="twm-list-inner d-flex justify-content-between">
                                                    <b>Presentation</b>
                                                    <a data-bs-toggle="modal" href="#Presentation_modal" role="button" title="Edit" class="site-text-primary">
                                                     <span class="fa fa-edit"></span>
                                                    </a>
                                                </div>
                                                <p>Add links to your Online presentations (e.g. Slideshare presentation links etc.).</p>
                                            </div>
                                            <!--Presentation Modal -->
                                            <div class="modal fade twm-saved-jobs-view" id="Presentation_modal" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form>

                                                            <div class="modal-header">
                                                                <h2 class="modal-title">Presentation</h2>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <div class="row">
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Social Profile</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Social Profile Name">
                                                                                <i class="fs-input-icon fa fa-address-card"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>URL</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Url">
                                                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="form-group mb-0">
                                                                            <label>Description</label>
                                                                            <textarea class="form-control" rows="3" placeholder="Type Description"></textarea>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">

                                                                <button type="button" class="site-button" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="site-button">Save</button>

                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="twm-list-wrap">
                                                <div class="twm-list-inner d-flex justify-content-between">
                                                    <b>Certification</b>
                                                    <a data-bs-toggle="modal" href="#Certification_modal" role="button" title="Edit" class="site-text-primary">
                                                     <span class="fa fa-edit"></span>
                                                    </a>
                                                </div>
                                                <p>Add details of Certification you have filed.</p>
                                            </div>
                                            <!--Certification Modal -->
                                            <div class="modal fade twm-saved-jobs-view" id="Certification_modal" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form>

                                                            <div class="modal-header">
                                                                <h2 class="modal-title">Certification</h2>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <div class="row">
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Certification Name</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Certification Name">
                                                                                <i class="fs-input-icon fa fa-address-card"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Certification Body</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Certification Body">
                                                                                <i class="fs-input-icon fa fa-address-card"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group mb-0">
                                                                            <label>Year Onlabel</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <select class="wt-select-box selectpicker"  data-live-search="true" title=""  data-bv-field="size">
                                                                                    <option class="bs-title-option" value="">Year</option>
                                                                                    <option>2021</option>
                                                                                    <option>2020</option>
                                                                                    <option>2019</option>
                                                                                    <option>2018</option>
                                                                                    <option>2017</option>
                                                                                    <option>2016</option>
                                                                                    <option>2015</option>
                                                                                    <option>2014</option>
                                                                                    <option>2013</option>
                                                                                    <option>2012</option>
                                                                                    <option>2011</option>
                                                                                </select>
                                                                                <i class="fs-input-icon fa fa-calendar-alt"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">

                                                                <button type="button" class="site-button" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="site-button">Save</button>

                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="twm-list-wrap">
                                                <div class="twm-list-inner d-flex justify-content-between">
                                                    <b>Patent</b>
                                                    <a data-bs-toggle="modal" href="#Patent_modal" role="button" title="Edit" class="site-text-primary">
                                                     <span class="fa fa-edit"></span>
                                                    </a>
                                                </div>
                                                <p>Add details of Patents you have filed.</p>
                                            </div>
                                            <!--Patent Modal -->
                                            <div class="modal fade twm-saved-jobs-view" id="Patent_modal" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form>

                                                            <div class="modal-header">
                                                                <h2 class="modal-title">Patent</h2>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <div class="row">
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Title</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Title">
                                                                                <i class="fs-input-icon fa fa-address-card"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Url</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Url ">
                                                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Patent Office</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Patent Office">
                                                                                <i class="fs-input-icon fa fa-building"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Application Number</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Application Number">
                                                                                <i class="fs-input-icon fa fa-dice-d6"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Status</label>
                                                                            <div class="row twm-form-radio-inline">

                                                                                <div class="col-md-6">
                                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="Patent_Issued">
                                                                                    <label class="form-check-label" for="Patent_Issued">
                                                                                        Patent Issued
                                                                                    </label>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="Patent_pending" checked>
                                                                                    <label class="form-check-label" for="Patent_pending">
                                                                                        Patent pending
                                                                                    </label>
                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!--Start Date-->
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>Published On</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control datepicker" data-provide="datepicker" name="company_since" type="text" placeholder="mm/dd/yyyy">
                                                                                <i class="fs-input-icon far fa-calendar"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="form-group mb-0">
                                                                            <label>Description</label>
                                                                            <textarea class="form-control" rows="3" placeholder="Type Description"></textarea>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">

                                                                <button type="button" class="site-button" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="site-button">Save</button>

                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>



                                </div>


                                   <!--Pengalaman Kerja-->
                                   <div class="panel panel-default mb-3">
                                    <div class="panel-heading wt-panel-heading p-a20 panel-heading-with-btn ">
                                        <h4 class="panel-tittle m-a0">Pengalaman Kerja</h4>
                                    </div>
                                    <div class="panel-body wt-panel-body p-a20 ">
                                        <div class="twm-panel-inner">
                                            <div class="twm-list-wrap">
                                                <div class="twm-list-inner d-flex justify-content-between">
                                                    <b>Online Profile</b>
                                                    <a data-bs-toggle="modal" href="#Online_Profile" role="button" title="Edit" class="site-text-primary">
                                                     <span class="fa fa-edit"></span>
                                                    </a>
                                                </div>
                                                <p>Add link to Online profiles (e.g. Linkedin, Facebook etc.).</p>
                                            </div>
                                            <!--Online Profile Modal -->
                                            <div class="modal fade twm-saved-jobs-view" id="Online_Profile" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form>

                                                            <div class="modal-header">
                                                                <h2 class="modal-title">Online Profiles</h2>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <div class="row">
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Social Profile</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Social Profile Name">
                                                                                <i class="fs-input-icon fa fa-address-card"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>URL</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Url">
                                                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="form-group mb-0">
                                                                            <label>Description</label>
                                                                            <textarea class="form-control" rows="3" placeholder="Type Description"></textarea>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">

                                                                <button type="button" class="site-button" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="site-button">Save</button>

                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="twm-list-wrap">
                                                <div class="twm-list-inner d-flex justify-content-between">
                                                    <b>Work Sample</b>
                                                    <a data-bs-toggle="modal" href="#Work_Sample" role="button" title="Edit" class="site-text-primary">
                                                     <span class="fa fa-edit"></span>
                                                    </a>
                                                </div>
                                                <p>Add link to your Projects (e.g. Github links etc.).</p>
                                            </div>
                                            <!--Work Sample Modal -->
                                            <div class="modal fade twm-saved-jobs-view" id="Work_Sample" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form>

                                                            <div class="modal-header">
                                                                <h2 class="modal-title">Work Sample</h2>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <div class="row">
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Work Title</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Work Title">
                                                                                <i class="fs-input-icon fa fa-address-card"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>URL</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Url">
                                                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>



                                                                    <!--Start Date-->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Duration From</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control datepicker" data-provide="datepicker" name="company_since" type="text" placeholder="mm/dd/yyyy">
                                                                                <i class="fs-input-icon far fa-calendar"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!--End Date-->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Duration to</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control datepicker" data-provide="datepicker" name="company_since" type="text" placeholder="mm/dd/yyyy">
                                                                                <i class="fs-input-icon far fa-calendar"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="Working_on" checked>
                                                                            <label class="form-check-label" for="Working_on">
                                                                                I am currently working on this
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="form-group mb-0">
                                                                            <label>Description</label>
                                                                            <textarea class="form-control" rows="3" placeholder="Type Description"></textarea>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">

                                                                <button type="button" class="site-button" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="site-button">Save</button>

                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="twm-list-wrap">
                                                <div class="twm-list-inner d-flex justify-content-between">
                                                    <b>White Paper / Research Publication / Journal Entry</b>
                                                    <a data-bs-toggle="modal" href="#Research_Publication" role="button" title="Edit" class="site-text-primary">
                                                     <span class="fa fa-edit"></span>
                                                    </a>
                                                </div>
                                                <p>Add links to your Online publications.</p>
                                            </div>
                                            <!--White Paper / Research Publication / Journal Entry Modal -->
                                            <div class="modal fade twm-saved-jobs-view" id="Research_Publication" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form>

                                                            <div class="modal-header">
                                                                <h2 class="modal-title">White Paper / Research Publication / Journal Entry</h2>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <div class="row">
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Title</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Title">
                                                                                <i class="fs-input-icon fa fa-address-card"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>URL</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Url">
                                                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>



                                                                    <!--Start Date-->
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>Published On</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control datepicker" data-provide="datepicker" name="company_since" type="text" placeholder="mm/dd/yyyy">
                                                                                <i class="fs-input-icon far fa-calendar"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="form-group mb-0">
                                                                            <label>Description</label>
                                                                            <textarea class="form-control" rows="3" placeholder="Type Description"></textarea>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">

                                                                <button type="button" class="site-button" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="site-button">Save</button>

                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="twm-list-wrap">
                                                <div class="twm-list-inner d-flex justify-content-between">
                                                    <b>Presentation</b>
                                                    <a data-bs-toggle="modal" href="#Presentation_modal" role="button" title="Edit" class="site-text-primary">
                                                     <span class="fa fa-edit"></span>
                                                    </a>
                                                </div>
                                                <p>Add links to your Online presentations (e.g. Slideshare presentation links etc.).</p>
                                            </div>
                                            <!--Presentation Modal -->
                                            <div class="modal fade twm-saved-jobs-view" id="Presentation_modal" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form>

                                                            <div class="modal-header">
                                                                <h2 class="modal-title">Presentation</h2>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <div class="row">
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Social Profile</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Social Profile Name">
                                                                                <i class="fs-input-icon fa fa-address-card"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>URL</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Url">
                                                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="form-group mb-0">
                                                                            <label>Description</label>
                                                                            <textarea class="form-control" rows="3" placeholder="Type Description"></textarea>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">

                                                                <button type="button" class="site-button" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="site-button">Save</button>

                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="twm-list-wrap">
                                                <div class="twm-list-inner d-flex justify-content-between">
                                                    <b>Certification</b>
                                                    <a data-bs-toggle="modal" href="#Certification_modal" role="button" title="Edit" class="site-text-primary">
                                                     <span class="fa fa-edit"></span>
                                                    </a>
                                                </div>
                                                <p>Add details of Certification you have filed.</p>
                                            </div>
                                            <!--Certification Modal -->
                                            <div class="modal fade twm-saved-jobs-view" id="Certification_modal" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form>

                                                            <div class="modal-header">
                                                                <h2 class="modal-title">Certification</h2>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <div class="row">
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Certification Name</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Certification Name">
                                                                                <i class="fs-input-icon fa fa-address-card"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Certification Body</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Certification Body">
                                                                                <i class="fs-input-icon fa fa-address-card"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group mb-0">
                                                                            <label>Year Onlabel</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <select class="wt-select-box selectpicker"  data-live-search="true" title=""  data-bv-field="size">
                                                                                    <option class="bs-title-option" value="">Year</option>
                                                                                    <option>2021</option>
                                                                                    <option>2020</option>
                                                                                    <option>2019</option>
                                                                                    <option>2018</option>
                                                                                    <option>2017</option>
                                                                                    <option>2016</option>
                                                                                    <option>2015</option>
                                                                                    <option>2014</option>
                                                                                    <option>2013</option>
                                                                                    <option>2012</option>
                                                                                    <option>2011</option>
                                                                                </select>
                                                                                <i class="fs-input-icon fa fa-calendar-alt"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">

                                                                <button type="button" class="site-button" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="site-button">Save</button>

                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="twm-list-wrap">
                                                <div class="twm-list-inner d-flex justify-content-between">
                                                    <b>Patent</b>
                                                    <a data-bs-toggle="modal" href="#Patent_modal" role="button" title="Edit" class="site-text-primary">
                                                     <span class="fa fa-edit"></span>
                                                    </a>
                                                </div>
                                                <p>Add details of Patents you have filed.</p>
                                            </div>
                                            <!--Patent Modal -->
                                            <div class="modal fade twm-saved-jobs-view" id="Patent_modal" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form>

                                                            <div class="modal-header">
                                                                <h2 class="modal-title">Patent</h2>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <div class="row">
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Title</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Title">
                                                                                <i class="fs-input-icon fa fa-address-card"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Url</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Url ">
                                                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Patent Office</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Patent Office">
                                                                                <i class="fs-input-icon fa fa-building"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Application Number</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control"  type="text" placeholder="Enter Application Number">
                                                                                <i class="fs-input-icon fa fa-dice-d6"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Status</label>
                                                                            <div class="row twm-form-radio-inline">

                                                                                <div class="col-md-6">
                                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="Patent_Issued">
                                                                                    <label class="form-check-label" for="Patent_Issued">
                                                                                        Patent Issued
                                                                                    </label>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="Patent_pending" checked>
                                                                                    <label class="form-check-label" for="Patent_pending">
                                                                                        Patent pending
                                                                                    </label>
                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!--Start Date-->
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>Published On</label>
                                                                            <div class="ls-inputicon-box">
                                                                                <input class="form-control datepicker" data-provide="datepicker" name="company_since" type="text" placeholder="mm/dd/yyyy">
                                                                                <i class="fs-input-icon far fa-calendar"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="form-group mb-0">
                                                                            <label>Description</label>
                                                                            <textarea class="form-control" rows="3" placeholder="Type Description"></textarea>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">

                                                                <button type="button" class="site-button" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="site-button">Save</button>

                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>



                                </div>

                                <!--Profile Summary-->
                                <div class="panel panel-default mb-3">
                                    <div class="panel-heading wt-panel-heading p-a20 panel-heading-with-btn ">
                                        <h4 class="panel-tittle m-a0">Profile Summary</h4>
                                        <a data-bs-toggle="modal" href="#Profile_Summary" role="button" title="Edit" class="site-text-primary">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                    </div>
                                    <div class="panel-body wt-panel-body p-a20 ">
                                        <div class="twm-panel-inner">
                                            <p>Your Profile Summary should mention the highlights of your career and education, what your professional interests are, and what kind of a career you are looking for. Write a meaningful summary of more than 50 characters.</p>
                                        </div>
                                    </div>
                                    <!--Modal Popup -->
                                    <div class="modal fade twm-saved-jobs-view" id="Profile_Summary" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <form>

                                                    <div class="modal-header">
                                                        <h2 class="modal-title">Profile Summary</h2>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <p>Your Profile Summary should mention the highlights of your career and education, what your professional interests are, and what kind of a career you are looking for. Write a meaningful summary of more than 50 characters.</p>

                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group twm-textarea-full">
                                                                    <textarea class="form-control" placeholder="Detail of Project"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="modal-footer">

                                                        <button type="button" class="site-button" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="site-button">Save</button>

                                                    </div>

                                                </form>
                                            </div>
                                        </div>
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
 </div>



@include('landingPage.layouts.footer')
@include('landingPage.layouts.script')

  <!-- Start Profile Area -->
  <section class="profile-area">
    <div class="container box_1170">
        <div class="profile-details">
            <div class="container mt-5">
                <div class="row">
                    <!-- Kolom Kiri -->
                    <div class="col-md-6">
                        <form action="/updateProfil/{{$user->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap:</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="field_name" required>
                            </div>

                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK:</label>
                                <input type="text" class="form-control" id="nik" name="field_nik" required>
                            </div>

                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender:</label>
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="field_gender" id="male" value="Laki-laki" required>
                                            <label class="form-check-label" for="male">Laki-Laki</label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="field_gender" id="female" value="Perempuan" required>
                                        <label class="form-check-label" for="female">Perempuan</label>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat:</label>
                                <textarea class="form-control" id="alamat" name="field_alamat" rows="3" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="nomor_hp" class="form-label">Nomor HP:</label>
                                <input type="tel" class="form-control" id="field_hp" name="field_hp" required>
                            </div>
                    </div>
                    <!-- Kolom Kanan -->
                    <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                                <input type="date" class="form-control" id="field_tglLahir" name="field_tglLahir" required>
                            </div>

                            <div class="mb-3">
                                <label for="berkas_cv" class="form-label">Berkas CV:</label>
                                <input type="file" class="form-control" id="field_cv" name="field_cv" accept=".pdf, .doc, .docx" required>
                            </div>

                            <div class="mb-3">
                                <label for="ijazah" class="form-label">Ijazah:</label>
                                <input type="file" class="form-control" id="ijazah" name="field_ijazah" accept=".pdf, .jpg, .jpeg, .png" required>
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">Surat Kesehatan:</label>
                                <input type="file" class="form-control" id="surat_kesehatan" name="field_sehat" accept=".pdf, .jpg, .jpeg, .png" required>
                            </div>
                            <div class="mb-3">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Profile Area -->


<!-- Pop-up Modal Info Update Berhasil -->

{{-- <div class="modal fade show" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Update Berhasil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Berhasil Update Data. Silahkan pilih lamaran pekerjaan Anda.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="/job">Close</a></button>
            </div>
        </div>
    </div>
</div>


<!-- Script untuk menangkap pesan berhasil dari Controller -->
@if(session('updateBerhasil'))
<script>
    $(document).ready(function () {
        $('#successModal').modal('show');
    });
</script>
@endif --}}
