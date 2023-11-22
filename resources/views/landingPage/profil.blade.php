@include('landingPage.layouts.header')
    <div class="profile-area">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('landingPage')}}/assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Your Profile</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Profile Area -->
    <section class="profile-area">
        <div class="container box_1170">
            <h3 class="text-heading">User Profile</h3>
            <div class="profile-details">
                <div class="container mt-5">
                    <div class="row">
                        <!-- Kolom Kiri -->
                        <div class="col-md-6">
                            <form action="/submit-form" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="nama_lengkap" class="form-label">Nama Lengkap:</label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                                </div>

                                <div class="mb-3">
                                    <label for="nik" class="form-label">NIK:</label>
                                    <input type="text" class="form-control" id="nik" name="nik" required>
                                </div>

                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat:</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="nomor_hp" class="form-label">Nomor HP:</label>
                                    <input type="tel" class="form-control" id="nomor_hp" name="nomor_hp" required>
                                </div>
                            </form>
                        </div>

                        <!-- Kolom Kanan -->
                        <div class="col-md-6">
                            <form action="/submit-form" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                                </div>

                                <div class="mb-3">
                                    <label for="berkas_cv" class="form-label">Berkas CV:</label>
                                    <input type="file" class="form-control" id="berkas_cv" name="berkas_cv" accept=".pdf, .doc, .docx" required>
                                </div>

                                <div class="mb-3">
                                    <label for="ijazah" class="form-label">Ijazah:</label>
                                    <input type="file" class="form-control" id="ijazah" name="ijazah" accept=".pdf, .jpg, .jpeg, .png" required>
                                </div>

                                <div class="mb-3">
                                    <label for="surat_kesehatan" class="form-label">Surat Kesehatan:</label>
                                    <input type="file" class="form-control" id="surat_kesehatan" name="surat_kesehatan" accept=".pdf, .jpg, .jpeg, .png" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Profile Area -->


	<footer>
		<!-- Footer Start-->
		<div class="footer-area footer-bg footer-padding">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
					   <div class="single-footer-caption mb-50">
						 <div class="single-footer-caption mb-30">
							 <div class="footer-tittle">
								 <h4>About Us</h4>
								 <div class="footer-pera">
									 <p>Heaven frucvitful doesn't cover lesser dvsays appear creeping seasons so behold.</p>
								</div>
							 </div>
						 </div>

					   </div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
						<div class="single-footer-caption mb-50">
							<div class="footer-tittle">
								<h4>Contact Info</h4>
								<ul>
									<li>
									<p>Address :Your address goes
										here, your demo address.</p>
									</li>
									<li><a href="#">Phone : +8880 44338899</a></li>
									<li><a href="#">Email : info@colorlib.com</a></li>
								</ul>
							</div>

						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
						<div class="single-footer-caption mb-50">
							<div class="footer-tittle">
								<h4>Important Link</h4>
								<ul>
									<li><a href="#"> View Project</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Testimonial</a></li>
									<li><a href="#">Proparties</a></li>
									<li><a href="#">Support</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
						<div class="single-footer-caption mb-50">
							<div class="footer-tittle">
								<h4>Newsletter</h4>
								<div class="footer-pera footer-pera2">
								 <p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>
							 </div>
							 <!-- Form -->
							 <div class="footer-form" >
								 <div id="mc_embed_signup">
									 <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
									 method="get" class="subscribe_form relative mail_part">
										 <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
										 class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
										 onblur="this.placeholder = ' Email Address '">
										 <div class="form-icon">
											 <button type="submit" name="submit" id="newsletter-submit"
											 class="email_icon newsletter-submit button-contactForm"><img src="assets/img/icon/form.png" alt=""></button>
										 </div>
										 <div class="mt-10 info"></div>
									 </form>
								 </div>
							 </div>
							</div>
						</div>
					</div>
				</div>
			   <!--  -->
			   <div class="row footer-wejed justify-content-between">
					   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						  <!-- logo -->
						  <div class="footer-logo mb-20">
							<a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
						  </div>
					   </div>
					   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
						<div class="footer-tittle-bottom">
							<span>5000+</span>
							<p>Talented Hunter</p>
						</div>
					   </div>
					   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
							<div class="footer-tittle-bottom">
								<span>451</span>
								<p>Talented Hunter</p>
							</div>
					   </div>
					   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
							<!-- Footer Bottom Tittle -->
							<div class="footer-tittle-bottom">
								<span>568</span>
								<p>Talented Hunter</p>
							</div>
					   </div>
			   </div>
			</div>
		</div>
@include('landingPage.layouts.footer')
@include('landingPage.layouts.script')
