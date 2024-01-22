@include('adminPage.layouts.header')

<div class="page-body">
    <div class="container-xl">
      <div class="card">
        <div class="row g-0">
          <div class="col-3 d-none d-md-block border-end">
            <div class="card-body">
              <h4 class="subheader">Data Diri Anda</h4>
              <div class="list-group list-group-transparent">
                <a href="/cv" class="list-group-item list-group-item-action d-flex align-items-center">Tentang Anda</a>
                <a href="/pendidikan" class="list-group-item list-group-item-action d-flex align-items-center active">Riwayat Pendidikan</a>
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
            <div class="row">
                <?php
                $sukses = Session::get('success');
                if ($sukses) {
                    echo '<div class="alert alert-success">' . $sukses . '</div>';
                }
                ?>
                <div class="col-9">
                    <h2 class="mb-4">Pengalaman Organisasi</h2>
                    <p class="text-muted mb-4">Masukkan Riwayat Pendidikan Anda disini.</p>
                </div>
                <div class="col-3">
                    <a href="#" class="btn mt-4 ms-2 btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal-tambah">
                        Tambah Data Pendidikan
                      </a>
                </div>
            </div>

              <div class="row row-cards">
                <div class="col-12">
                    @foreach ($pendidikan as $didik)
                    <div class="card card-md">
                        <div class="card-body">
                          <div class="row align-items-center">
                            <div class="col">
                              <h2 class="h4">{{$didik->instansi}}</h2>
                              <p class="m-0 text-muted">Tabler is designed to work great for large enterprises. Take a look at our feature comparison.</p>
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
        <form action="/addPendidikan" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Lembaga Instansi Sekolah/Universitas</label>
              <input name="field_sekolah" class="form-control" placeholder="Nama Sekolah/kampus">
            </div>
            <div class="mb-3">
              <label class="form-label">Lokasi Sekolah/kampus</label>
              <input name="field_lokasi" type="text" class="form-control" placeholder="Lokasi">
            </div>
            <div class="mb-3">
                <label class="form-label">Jurusan</label>
                <input name="field_jurusan" type="text" class="form-control" placeholder="Jurusan">
              </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Tahun Masuk</label>
                  <div class="input-group input-group-flat">
                    <span class="input-group-text">
                    </span>
                    <input  name="field_tahun_masuk" type="number" placeholder="2023" class="form-control ps-0" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Tahun Lulus</label>
                  <div class="input-group input-group-flat">
                    <span class="input-group-text">
                    </span>
                    <input  name="field_tahun_lulus" type="number" placeholder="2024" class="form-control ps-0" autocomplete="off">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="mb-3">
                  <label class="form-label">Nilai IPK</label>
                  <input name="field_ipk" type="number" placeholder="Nilai IPK" class="form-control">
                </div>
              </div>
            </div>
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
