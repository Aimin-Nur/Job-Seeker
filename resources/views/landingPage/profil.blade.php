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
                                    <li class="active"><a href="candidate-profile.html"><i class="fa fa-user"></i> My Pfofile</a></li>
                                    <li><a href="/jobByUser/{id}"><i class="fa fa-suitcase"></i> Applied Jobs</a></li>
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
                        <!--Filter Short By-->
                        <div class="twm-right-section-panel site-bg-gray">
                            <form>


                                <!--Basic Information-->
                                <div class="panel panel-default">
                                    <div class="panel-heading wt-panel-heading p-a20">
                                        <h4 class="panel-tittle m-a0">Basic Informations</h4>
                                    </div>
                                    <div class="panel-body wt-panel-body p-a20 m-b30 ">

                                        <div class="row">

                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Nama Lengkap</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control"  value="{{$user->name}}"  name="field_name" type="text" placeholder="Devid Smith">
                                                            <i class="fs-input-icon fa fa-user "></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>NIK</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" value="{{$user->NIK}}" name="filed_nik" type="text" placeholder="(251) 1234-456-7890">
                                                            <i class="fs-input-icon fa fa-user-edit"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" value="{{$user->email}}" name="filed_email" type="email" placeholder="Devid@example.com">
                                                            <i class="fs-input-icon fas fa-at"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Tanggal Lahir</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" name="company_website" type="date" value="{{$user->tgl_lahir}}">
                                                            <i class="fs-input-icon fa fa-globe-americas"></i>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" name="company_since" type="text" placeholder="BTech">
                                                            <i class="fs-input-icon fa fa-user-graduate"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Nomor Hp</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" name="company_since" type="number" value="{{$user->no_hp}}">
                                                            <i class="fs-input-icon fa fa-phone-alt"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-12 col-lg-12">
                                                    <div class="form-group city-outer-bx has-feedback">
                                                        @if($user->ijazah)
                                                            <label for="ijazah">Ijazah - <span class="text-primary">(File Sudah Diunggah)</span></label>
                                                        @else
                                                            <label for="ijazah">Ijazah - (File Belum Diunggah)</label>
                                                        @endif
                                                        <input class="form-control" name="ijazah" type="file" accept=".pdf">
                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-lg-12 col-lg-12">
                                                    <div class="form-group city-outer-bx has-feedback">
                                                        @if($user->cv)
                                                        <label for="ijazah">Curiculum Vitae - <span class="text-primary">(File Sudah Diunggah)</span></label>
                                                        @else
                                                            <label for="ijazah">Cv - (File Belum Diunggah)</label>
                                                        @endif
                                                        <input class="form-control" name="ijazah" type="file" accept=".pdf">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-lg-12 col-lg-12">
                                                    <div class="form-group city-outer-bx has-feedback">
                                                        @if($user->sehat)
                                                        <label for="ijazah">Portofolio - <span class="text-primary">(File Sudah Diunggah)</span></label>
                                                        @else
                                                            <label for="ijazah">Portofolio - (File Belum Diunggah)</label>
                                                        @endif
                                                        <input class="form-control" name="ijazah" type="file" accept=".pdf">
                                                    </div>
                                                </div>



                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="form-group city-outer-bx has-feedback">
                                                        <label>Full Address</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" name="field_alamat" value="{{$user->alamat}}" type="text" placeholder="1363-1385 Sunset Blvd Angeles, CA 90026 ,USA">
                                                            <i class="fs-input-icon fas fa-map-marker-alt"></i>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-lg-12 col-lg-12">
                                                    <div class="form-group">
                                                        <label>Pekerjaan</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" name="company_since" type="text" placeholder="BTech">
                                                            <i class="fs-input-icon fa fa-user-graduate"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <textarea class="form-control" rows="3" name="filed_bio">Greetings! when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</textarea>
                                                    </div>
                                                </div>

                                        </div>

                                    </div>
                                </div>

                                <!--Social Network-->
                                <div class="panel panel-default">
                                    <div class="panel-heading wt-panel-heading p-a20">
                                        <h4 class="panel-tittle m-a0">Social Network</h4>
                                    </div>
                                    <div class="panel-body wt-panel-body p-a20 m-b30 ">
                                        <div class="row">
                                                <div class="col-xl-4 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Instagram</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control wt-form-control" name="company_name" type="text" placeholder="https://www.instagram.com/">
                                                            <i class="fs-input-icon fab fa-instagram"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Twitter</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control wt-form-control" name="company_name" type="text" placeholder="https://twitter.com/">
                                                            <i class="fs-input-icon fab fa-twitter"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>linkedin</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control wt-form-control" name="company_name" type="text" placeholder="https://in.linkedin.com/">
                                                            <i class="fs-input-icon fab fa-linkedin-in"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                            <div class="col-lg-12 col-md-12">
                                                    <div class="text-left">
                                                        <button type="submit" class="site-button">Save Changes</button>
                                                    </div>
                                                </div>


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
