{{-- @include('landingPage.layouts.header')

<!-- Hero Area Start-->
 <div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('landingPage')}}/assets/img/hero/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>{{$jobDetail->job}} - {{$jobDetail->company}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Hero Area End -->
    <!-- job post company Start -->
    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-xl-7 col-lg-8">
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="job-items">
                            <div class="company-img company-img-details">
                                @if ($jobDetail->logo_company)
                                        <a href="#"><img src="{{ asset('landingPage/assets/img/icon/' . $jobDetail->logo_company) }}" style="max-width: 90px; max-height: 90px;" alt=""></a>
                                @else
                                        <a href="#"><img src="{{ asset('landingPage/assets/img/icon/default-logo.png') }}" alt="Default Logo"></a>
                                @endif
                            </div>
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>{{$jobDetail->job}}</h4>
                                </a>
                                <ul>
                                    <li>{{$jobDetail->company}}</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{$jobDetail->lokasi}}</li>
                                    <li>{{$jobDetail->gaji}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                      <!-- job single End -->

                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Job Description</h4>
                            </div>
                            <p>{{$jobDetail->desc_job}}<</p>
                        </div>
                        <div class="post-details2  mb-50">
                             <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Hard Skill Requitment</h4>
                            </div>
                           <ul>
                                @foreach($hardSkills as $skill)
                                <li>{{$skill}}</li>
                                @endforeach
                           </ul>
                        </div>
                        <div class="post-details2  mb-50">
                             <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Soft Skill Requitment</h4>
                            </div>
                           <ul>
                            @foreach($softSkills as $softSkill)
                            <li>{{$softSkill}}</li>
                            @endforeach
                           </ul>
                        </div>
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                       <div class="small-section-tittle">
                           <h4>Apply Job</h4>
                       </div>
                     <div class="apply-btn2">
                        <form action="/applyJob/{{$jobDetail->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="field_idJob" value="{{$jobDetail->id}}">
                            <input type="hidden" name="field_idUser" value="{{$userId}}">
                            <button type="submit" class="btn btn-primary">Apply Now</button>
                        {{-- <a href="" type="submit" class="btn">Apply Now</a> --}}
                        {{-- </form>
                     </div>
                   </div>
                    <div class="post-details4  mb-50">
                        <!-- Small Section Tittle -->
                       <div class="small-section-tittle">
                           <h4>Company Information</h4>
                       </div>
                          <span>{{$jobDetail->company}}</span>
                          <p>{{$jobDetail->desc_company}}</p>
                        <ul>
                            <li>Name : <span>{{$jobDetail->company}} </span></li>
                            <li>Email : <span>{{$jobDetail->email_company}}</span></li>
                            <li>Phone : <span>{{$jobDetail->kontak_company}}</span></li>
                        </ul>
                   </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- job post company End -->









{{-- @include('landingPage.layouts.footer')
@include('landingPage.layouts.script') --}}










@include('landingPage.layouts.header')


 <!-- CONTENT START -->
 <div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{asset('jobnest')}}/images/banner/1.jpg);">
        <div class="overlay-main site-bg-white opacity-01"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">{{$jobDetail->job}} - {{$jobDetail->nama_company}}</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="index.html">Home</a></li>
                            <li>Job Detail</li>
                        </ul>
                    </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->



    <!-- OUR BLOG START -->
    <div class="section-full  p-t120 p-b90 bg-white">
        <div class="container">

            <!-- BLOG SECTION START -->
            <div class="section-content">
                <div class="row d-flex justify-content-center">

                    <div class="col-lg-8 col-md-12">
                        <?php
                        $sukses = Session::get('sukses');
                        if ($sukses !== null) {
                            echo '<div class="alert alert-success">' . $sukses . '</div>';
                        }
                        ?>
                         <?php
                         $error = Session::get('error');
                         if ($error) {
                             echo '<div class="alert alert-alert">' . $error . '</div>';
                         }
                         ?>
                        <!-- Candidate detail START -->
                        <div class="cabdidate-de-info">
                            <div class="twm-job-self-wrap">
                                <div class="twm-job-self-info">
                                    <div class="twm-job-self-top">
                                        <div class="twm-media-bg">
                                            <img src="{{asset('jobnest')}}/images/job-detail-bg.jpg" alt="#">
                                            <div class="twm-jobs-category green"><span class="twm-bg-green">{{$jobDetail->kategori}}</span></div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <div class="twm-media">
                                                @if ($jobDetail->logo_company)
                                                    <img src="{{ asset('landingPage/assets/img/icon/' . $jobDetail->logo_company) }}" style="margin-top: 25px" alt="">
                                                @else
                                                    <img src="{{ asset('landingPage/assets/img/icon/default-logo.png') }}" alt="Default Logo">
                                                @endif
                                            </div>

                                            <h4 class="twm-job-title">{{$jobDetail->job}} - {{$jobDetail->nama_company}} <span class="twm-job-post-duration">/ 1 days ago</span></h4>
                                            <p class="twm-job-address"><i class="feather-map-pin"></i>{{$jobDetail->lokasi}}</p>
                                            <div class="twm-job-self-mid">
                                                <div class="twm-job-self-mid-left">
                                                    <a href="" class="twm-job-websites site-text-primary">{{$jobDetail->email_company}}</a>
                                                    <div class="twm-jobs-amount">{{$jobDetail->gaji}}<span>/ Month</span></div>
                                                </div>
                                                <div class="twm-job-apllication-area">Application ends:
                                                    <span class="twm-job-apllication-date">October 1, 2025</span>
                                                </div>
                                            </div>

                                            <div class="twm-job-self-bottom">
                                                <form action="/applyJob/{{$jobDetail->id}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="field_idJob" value="{{$jobDetail->id}}">
                                                    <input type="hidden" name="field_idUser" value="{{$userId}}">
                                                    <input type="hidden" name="field_company" value="{{$jobDetail->id_company}}">
                                                    <button type="submit" class="site-button btn btn-primary">Apply Now</button>
                                                {{-- <a href="" type="submit" class="btn">Apply Now</a> --}}
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <h4 class="twm-s-title">Information Company:</h4>
                            <p>{{$jobDetail->desc_company}}
                            </p>


                            <h4 class="twm-s-title">Job Description:</h4>
                            <p>{{$jobDetail->desc_job}}
                            </p>


                            <h4 class="twm-s-title">Hard Skill Requirments:</h4>
                            <ul class="description-list-2">
                                @foreach($hardSkills as $skill)
                                <li>
                                    <i class="feather-check"></i>
                                    {{$skill}}
                                </li>
                                @endforeach
                            </ul>

                            <h4 class="twm-s-title">Soft Skill Requirments:</h4>
                            <ul class="description-list-2">
                                @foreach($softSkills as $softSkill)
                                <li>
                                    <i class="feather-check"></i>
                                    {{$softSkill}}
                                </li>
                                @endforeach
                            </ul>

                            <h4 class="twm-s-title">Location</h4>
                            <div class="twm-m-map mb-5">
                                <div class="twm-m-map-iframe">
                                    <iframe height="310" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.8534521658976!2d-118.2533646842856!3d34.073270780600225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c6fd9829c6f3%3A0x6ecd11bcf4b0c23a!2s1363%20Sunset%20Blvd%2C%20Los%20Angeles%2C%20CA%2090026%2C%20USA!5e0!3m2!1sen!2sin!4v1620815366832!5m2!1sen!2sin"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 rightSidebar">

                        <div class="side-bar mb-4">
                            <div class="twm-s-info2-wrap mb-5">
                                <div class="twm-s-info2">
                                    <h4 class="section-head-small mb-4">Job Information</h4>
                                    <ul class="twm-job-hilites">
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span class="twm-title">Date Posted</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-eye"></i>
                                            <span class="twm-title">8160 Views</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-file-signature"></i>
                                            <span class="twm-title">6 Applicants</span>
                                        </li>
                                    </ul>
                                    {{-- <ul class="twm-job-hilites2">

                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-calendar-alt"></i>
                                                <span class="twm-title">Date Posted</span>
                                                <div class="twm-s-info-discription">April 22, 2023</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span class="twm-title">Location</span>
                                                <div class="twm-s-info-discription">Munchen, Germany</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-user-tie"></i>
                                                <span class="twm-title">Job Title</span>
                                                <div class="twm-s-info-discription">Web Developer</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-clock"></i>
                                                <span class="twm-title">Experience</span>
                                                <div class="twm-s-info-discription">3 Year</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-suitcase"></i>
                                                <span class="twm-title">Qualification</span>
                                                <div class="twm-s-info-discription">Bachelor Degree </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-venus-mars"></i>
                                                <span class="twm-title">Gender</span>
                                                <div class="twm-s-info-discription">Both</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">

                                                <i class="fas fa-money-bill-wave"></i>
                                                <span class="twm-title">Offered Salary</span>
                                                <div class="twm-s-info-discription">$2000-$2500 / Month</div>
                                            </div>
                                        </li>

                                    </ul> --}}

                                </div>
                            </div>

                            <div class="widget tw-sidebar-tags-wrap">
                                <h4 class="section-head-small mb-4">Job Skills</h4>

                                <div class="tagcloud">
                                    <a href="javascript:void(0)">Html</a>
                                    <a href="javascript:void(0)">Python</a>
                                    <a href="javascript:void(0)">WordPress</a>
                                    <a href="javascript:void(0)">JavaScript</a>
                                    <a href="javascript:void(0)">Figma</a>
                                    <a href="javascript:void(0)">Angular</a>
                                    <a href="javascript:void(0)">Reactjs</a>
                                    <a href="javascript:void(0)">Drupal</a>
                                    <a href="javascript:void(0)">Joomla</a>
                                </div>
                            </div>

                        </div>

                        <div class="twm-s-info3-wrap mb-5">
                            <div class="twm-s-info3">
                                <div class="twm-s-info-logo-section">
                                    <div class="twm-media">
                                        @if ($jobDetail->logo_company)
                                                    <img src="{{ asset('landingPage/assets/img/icon/' . $jobDetail->logo_company) }}"alt="">
                                                @else
                                                    <img src="{{ asset('landingPage/assets/img/icon/default-logo.png') }}" alt="Default Logo">
                                                @endif
                                    </div>
                                    <h4 class="twm-title">{{$jobDetail->job}}</h4>
                                </div>
                                <ul>

                                    <li>
                                        <div class="twm-s-info-inner">
                                            <i class="fas fa-building"></i>
                                            <span class="twm-title">Company</span>
                                            <div class="twm-s-info-discription"><small>{{$jobDetail->desc_company}}</small></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="twm-s-info-inner">
                                            <i class="fas fa-at"></i>
                                            <span class="twm-title">Email</span>
                                            <div class="twm-s-info-discription">{{$jobDetail->email_company}}</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="twm-s-info-inner">
                                            <i class="fas fa-desktop"></i>
                                            <span class="twm-title">Website</span>
                                            <div class="twm-s-info-discription">https://themeforest.net</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="twm-s-info-inner">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span class="twm-title">Address</span>
                                            <div class="twm-s-info-discription">{{$jobDetail->lokasi}}</div>
                                        </div>
                                    </li>

                                </ul>
                                <a href="about-1.html" class=" site-button">Vew Profile</a>
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





<!-- Pop-up Modal Info Update Berhasil -->

<div class="modal fade show" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Apply Job Success</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Silahkan tunggu informasi penjadwalan interview dari Admin.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="/home">Close</a></button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade show" id="UnsuccessModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Apply Job Failed</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Silahkan Lengkapi berkas Anda terlebih dahulu.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="/profil/{id}">Update Profile</a></button>
            </div>
        </div>
    </div>
</div>


<!-- Script untuk menangkap pesan berhasil dari Controller -->
@if(isset($updateBerhasil) && $updateBerhasil)
<script>
    $(document).ready(function () {
        $('#successModal').modal('show');
    });
</script>
@endif

@if(isset($updateGagal) && $updateGagal)
<script>
    $(document).ready(function () {
        $('#UnsuccessModal').modal('show');
    });
</script>
@endif







@include('landingPage.layouts.footer')
@include('landingPage.layouts.script')
