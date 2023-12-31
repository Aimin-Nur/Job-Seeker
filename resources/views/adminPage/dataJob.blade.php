@include('adminPage.layouts.header')
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">
              Data Lowongan Pekerjaan
            </h2>
          </div>
          <div class="col-auto ms-auto d-print-none">
            <div class="btn-list">
              <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                Tambah Pekerjaan
              </a>
              <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
      <div class="container-xl">
          {{-- Notifikasi add karyawan berhasil --}}
          <?php
          $sukses = Session::get('success');
          if ($sukses) {
              echo '<div class="alert alert-success">' . $sukses . '</div>';
          }
          ?>
           <?php
           $sukses = Session::get('edit');
           if ($sukses) {
               echo '<div class="alert alert-info">' . $sukses . '</div>';
           }
           ?>
            <?php
            $sukses = Session::get('delete');
            if ($sukses) {
                echo '<div class="alert alert-danger">' . $sukses . '</div>';
            }
            ?>
          <div class="col-12">
            <div class="card">
              <div class="table-responsive">
                <table
    class="table table-vcenter table-mobile-md card-table">
                  <thead>
                    <tr>
                      <th>Nama Perusahaan</th>
                      <th>Posisi & Lokasi</th>
                      <th>Alamat Email</th>
                      <th class="w-1"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($dataJob as $job )
                    <tr>
                      <td data-label="Name" >
                        <div class="d-flex py-1 align-items-center">
                            <div class="company-img">
                                @if ($job->logo_company)
                                    <a href="#"><img src="{{ asset('landingPage/assets/img/icon/' . $job->logo_company) }}" style="max-width: 100px; max-height: 100px;" alt=""></a>
                                @else
                                    <a href="#"><img src="{{ asset('landingPage/assets/img/icon/default-logo.png') }}" alt="Default Logo"></a>
                                @endif
                            </div>
                          <div class="flex-fill ms-5">
                            <div class="font-weight-medium">{{$job->job}}</div>
                            <div class="text-muted"><a href="#" class="text-reset">{{$job->company}}</a></div>
                          </div>
                        </div>
                      </td>
                      <td data-label="Title" >
                        <div>{{$job->kategori}}</div>
                        <div class="text-muted">{{$job->lokasi}}</div>
                      </td>
                      <td class="text-muted" data-label="Role" >
                        {{$job->email_company}}
                      </td>
                      <td>
                        <div class="btn-list flex-nowrap">
                          <a href="#" data-bs-toggle="modal" data-bs-target="#modal-edit{{$job->id}}" class="btn">
                            Edit
                          </a>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#modal-danger{{$job->id}}" class="btn btn-danger">
                            Delete
                          </a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
{{--
{{-- Modal Edit data --}}
@foreach ($dataJob as $job )
<div class="modal modal-blur fade" id="modal-edit{{$job->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Data Pekerjaan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/editJob/{{$job->id}}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
        @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
        @endif
        <div class="mb-3">
          <label class="form-label">Posisi Pekerjaan</label>
          <input name="field_job" value="{{ $job->job }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Deskripsi Pekerjaan</label>
            <input name="field_descJob" value="{{ $job->desc_job }}" class="form-control">
          </div>
        <div class="mb-3">
          <label class="form-label">Nama Perusahaan</label>
          <input name="field_company" value="{{ $job->company }}" type="text" class="form-control" placeholder="Nama Lengkap">
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="mb-3">
              <label class="form-label">Email Perusahaan</label>
              <div class="input-group input-group-flat">
                <span class="input-group-text">
                </span>
                <input value="{{$job->email_company}}" name="field_email" class="form-control ps-0" autocomplete="off">
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mb-3">
              <label class="form-label">Kontak Perusahaan</label>
              <input value="{{$job->kontak_company}}" name="field_kontak" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="mb-3">
              <label class="form-label">Lokasi Penempatan</label>
              <input value="{{$job->lokasi}}" name="field_lokasi" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
              <div class="mb-3">
                <label class="form-label">Tersedia</label>
                <select value="{{$job->tersedia}}" name="field_tersedia" type="text" class="form-control">
                    <option value="1 Orang">1 Orang</option>
                    <option value="2 Orang">2 Orang</option>
                    <option value="3 Orang">3 Orang</option>
                </select>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
          Cancel
        </a>
        <button type="submit" class="btn btn-info ms-auto" data-bs-dismiss="modal">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
          Edit Data Karyawan
        </button>
      </div>
    </form>
    </div>
  </div>
  </div>
  @endforeach


  {{-- Modal Hapus Data Karyawan --}}
  @foreach ($dataJob as $job )
  <div class="modal modal-blur fade" id="modal-danger{{$job->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-status bg-danger"></div>
        <form action="/deleteJob/{{$job->id}}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="modal-body text-center py-4">
          <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
          <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z" /><path d="M12 9v4" /><path d="M12 17h.01" /></svg>
          <h3>Apakah Anda Yakin?</h3>
          <div class="text-muted">Tindakan ini akan menghapus pekerjaan dari perusahaan <b>{{$job->company}}</b> dengan posisi pekerjaan <b>{{$job->job}}</b>, penghapusan data ini akan bersifat permanen.</div>
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
  @endforeach


@include('adminPage.layouts.footer')
@include('adminPage.layouts.script')
