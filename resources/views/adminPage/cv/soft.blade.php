@include('adminPage.layouts.header')

<div class="page-body">
    <div class="container-xl">
      <div class="card">
        <div class="row g-0">
          <div class="col-3 d-none d-md-block border-end">
            <div class="card-body">
              <h4 class="subheader">Dara Diri Anda</h4>
              <div class="list-group list-group-transparent">
                <a href="/cv" class="list-group-item list-group-item-action d-flex align-items-center">Tentang Anda</a>
                <a href="/pendidikan" class="list-group-item list-group-item-action d-flex align-items-center">Riwayat Pendidikan</a>
                <a href="/sertifikasi" class="list-group-item list-group-item-action d-flex align-items-center">Sertifikasi</a>
                <a href="/organisasi" class="list-group-item list-group-item-action d-flex align-items-center">Pengalaman Organisasi</a>
                <a href="/soft" class="list-group-item list-group-item-action d-flex align-items-center active">Soft Skil</a>
                <a href="/hard" class="list-group-item list-group-item-action d-flex align-items-center">Hard Skil</a>
              </div>
              <h4 class="subheader mt-4">Experience</h4>
              <div class="list-group list-group-transparent">
                <a href="#" class="list-group-item list-group-item-action">Generate CV</a>
              </div>
            </div>
          </div>
          <div class="col d-flex flex-column">
            <div class="row">
                <div class="col-12">
                    <?php
                        $sukses = Session::get('success');
                        if ($sukses) {
                            echo '<div class="alert alert-success">' . $sukses . '</div>';
                        }
                    ?>
                </div>
            </div>
            <div class="card-body">
            <div class="row">
                <div class="col-10">
                    <h2 class="mb-4">Soft Skill</h2>
                    <p class="text-muted mb-4">Masukkan Pengalaman Soft Skill yang Anda miliki.</p>
                </div>
                <div class="col-2">
                    <a href="#" class="btn mt-4 me-5 btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal-tambah">
                        Tambah Soft Skill
                      </a>
                </div>
            </div>

              <div class="row row-cards">
                <div class="col-6">
                @foreach ($soft as $sft )
                  <div class="card card-md">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col">
                          <h4 class="h4">{{$sft->soft_skill}}.</h4>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="btn">
                            Lihat Detail
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>


<div class="modal modal-blur fade" id="modal-tambah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-status bg-danger"></div>
        <form action="/addSoft" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="mb-3">
                  <label class="form-label">Soft Skill</label>
                  <input name="field_softSkill" type="text" placeholder="Deskripsi" class="form-control">
                </div>
              </div>
            </div>
            <small class="markdown text-muted">
              Masukkan Soft Skill yang Relevan dengan pekerjaan yang akan Anda apply.
            </small>
          </div>
        <div class="modal-footer">
          <div class="w-100">
            <div class="row">
              <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                  Cancel
                </a></div>
              <div class="col"><button type="submit" href="#" class="btn btn-danger w-100" data-bs-dismiss="modal">
                  Ya, Saya Yakin
                </button></div>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>

@include('adminPage.layouts.footer')
@include('adminPage.layouts.script')