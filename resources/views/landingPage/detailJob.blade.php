@include('landingPage.layouts.header')

<!-- Hero Area Start-->
 <div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('landingPage')}}/assets/img/hero/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>{{$jobDetail->job}}</h2>
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
                           <h4>Job Overview</h4>
                       </div>
                      <ul>
                          <li>Posted date : <span>12 Aug 2019</span></li>
                          <li>Location : <span>New York</span></li>
                          <li>Vacancy : <span>02</span></li>
                          <li>Job nature : <span>Full time</span></li>
                          <li>Salary :  <span>$7,800 yearly</span></li>
                          <li>Application date : <span>12 Sep 2020</span></li>
                      </ul>
                     <div class="apply-btn2">
                        <a href="#" class="btn">Apply Now</a>
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
    </div>
    <!-- job post company End -->

@include('landingPage.layouts.footer')
@include('landingPage.layouts.script')
