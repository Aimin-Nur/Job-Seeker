@include('adminPage.layouts.header')

<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
      <div class="card">
        <div class="row g-0">
          <div class="col-3 d-none d-md-block border-end">
            <div class="card-body">
              <h4 class="subheader">Data Diri Anda</h4>
              <div class="list-group list-group-transparent">
                <a href="/cv" class="list-group-item list-group-item-action d-flex align-items-center active">Tentang Anda</a>
                <a href="/pendidikan" class="list-group-item list-group-item-action d-flex align-items-center">Riwayat Pendidikan</a>
                <a href="/sertifikasi" class="list-group-item list-group-item-action d-flex align-items-center">Sertifikasi</a>
                <a href="/organisasi" class="list-group-item list-group-item-action d-flex align-items-center">Pengalaman Organisasi</a>
                <a href="/soft" class="list-group-item list-group-item-action d-flex align-items-center">Soft Skil</a>
                <a href="/hard" class="list-group-item list-group-item-action d-flex align-items-center">Hard Skil</a>
              </div>
              <h4 class="subheader mt-4">Experience</h4>
              <div class="list-group list-group-transparent">
                <a href="#" class="list-group-item list-group-item-action">Generate CV</a>
              </div>
            </div>
          </div>
          <div class="col d-flex flex-column">
            <div class="card-body">
              <h2 class="mb-4">My Account</h2>
              <h3 class="card-title">Profile Details</h3>
              <div class="row align-items-center">
                <div class="col-auto"><span class="avatar avatar-xl" style="background-image: url(./static/avatars/000m.jpg)"></span>
                </div>
                <div class="col-auto"><a href="#" class="btn">
                    Change avatar
                  </a></div>
                <div class="col-auto"><a href="#" class="btn btn-ghost-danger">
                    Delete avatar
                  </a></div>
              </div>
              <h3 class="card-title mt-4">Business Profile</h3>
                <div class="row g-3">
                    <div class="col-md">
                    <div class="form-label">Nama Lengkap</div>
                    <input type="text" value="{{$profil->name}}" class="form-control" value="Tabler">
                    </div>
                    <div class="col-md">
                    <div class="form-label">NIK</div>
                    <input type="text" value="{{$profil->NIK}}" class="form-control" value="560afc32">
                    </div>
                    <div class="col-md">
                    <div class="form-label">Gender</div>
                    <input type="text" class="form-control"
                            value="{{$profil->gender}}">
                    </div>
                </div>
                <div class="row g-3 mt-4">
                    <div class="col-md">
                    <div class="form-label">Email</div>
                    <input type="text" value="{{$profil->email}}" class="form-control" value="Tabler">
                    </div>
                    <div class="col-md">
                    <div class="form-label">Tanggal Lahir</div>
                    <input type="text" value="{{$profil->tgl_lahir}}" class="form-control" value="560afc32">
                    </div>
                    <div class="col-md">
                    <div class="form-label">Nomor Hp</div>
                    <input type="text" class="form-control"
                    value="{{$profil->no_hp}}">
                    </div>
                </div>
            </div>
            <div class="card-footer bg-transparent mt-auto">
              <div class="btn-list justify-content-end">
                <a href="#" class="btn">
                  Cancel
                </a>
                <a href="#" class="btn btn-primary">
                  Submit
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

  @include('adminPage.layouts.script')
  @include('adminPage.layouts.footer')
