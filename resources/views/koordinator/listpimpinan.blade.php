@extends('koordinator/sidebar')
@section('konten')
@if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{session('success')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
                </div>
    @endif
    <div class="col-md-12 grid-margin">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
    <h3 class="font-weight-bold">Data Pimpinan</h3>
        </div>
</div>
    <div class="col-md-12 grid-margin">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalAdd">Buat Akun</button><br><br>
                    <div class="table-responsive">
                        <table class="table col-lg-8">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            Nama
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            No.Handphone
                          </th>
                          <th align="center">
                            Aksi
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                {{ $user->email}}
                            </td>
                            <td>
                                {{ $user->no_hp }}
                            </td>
                            <td>
                                <a href="{{url('/edit')}}/{{$user->id}}" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalEdit">
                                    <i class="icon-eye menu-icon" style="color: black"></i></a>
                                 <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalDel">
                                <i class="icon-trash menu-icon" style="color: black"></i></button>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


  <!-- Modal -->
  <div class="modal fade modal-lg" id="ModalAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header content-wrapper">
          <h5 class="modal-title" id="staticBackdropLabel">Form Tambah User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body content-wrapper">
                      <div class="card ">
                        <div class="card-body">
                          <form class="forms-sample" action="/register" method="POST">
                            @csrf
                            <div class="form-group">
                            <div class="form-floating">
                              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required>
                              <label for="floatingInput">Nama</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-floating">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                              <label for="floatingInput">Email address</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-floating">
                              <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                              <label for="floatingInput">Password</label>
                            </div>
                            </div>
                            <div class="form-group">
                                <div class="form-floating">
                                  <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No. Handphone" required>
                                  <label for="floatingInput">No. Handphone</label>
                            </div>
                            </div>
                            <div class="form-group">
                                  <input type="hidden" class="form-control" name="jumlah_kinerja" id="jumlah_kinerja" value="0">
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="role" id="role" value="pimpinan">
                          </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary me-md-2">Submit</button>
                            <button class="btn btn-danger">Cancel</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
    </div>
    </div>
  </div>
  <div class="modal fade modal-lg" id="ModalEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header content-wrapper">
          <h5 class="modal-title" id="staticBackdropLabel">Form Edit User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body content-wrapper">
            <div class="card ">
              <div class="card-body">
                <form class="forms-sample" action="{{url('/update')}}/{{$user->id}}" method="POST">
                  @csrf
                  <div class="form-group">
                  <div class="form-floating">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{$user->name}}" required>
                    <label for="floatingInput">Nama</label>
                  </div>
                  </div>
                  <div class="form-group">
                  <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}" required>
                    <label for="floatingInput">Email address</label>
                  </div>
                  </div>
                  <div class="form-group">
                  <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="password" value="{{$user->password}}" required>
                    <label for="floatingInput">Password</label>
                  </div>
                  </div>
                  <div class="form-group">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="no_hp" id="no_hp" value="{{$user->no_hp}}" required>
                        <label for="floatingInput">No. Handphone</label>
                  </div>
                  </div>
                  <div class="form-group">
                        <input type="hidden" class="form-control" name="jumlah_kinerja" id="jumlah_kinerja" value="{{$user->jumlah_kinerja}}">
                  </div>
                  <div class="form-group">
                      <input type="hidden" class="form-control" name="role" id="role" value="{{$user->role}}">
                </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button type="submit" class="btn btn-primary me-md-2">Update</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
                    </div>
    </div>
</div>

<!--Modal Delete-->
<div class="modal fade modal-lg" id="ModalDel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header content-wrapper">
          <h5 class="modal-title" id="staticBackdropLabel">Hapus User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body content-wrapper">
                      <div class="card ">
                        <div class="card-body">
                            Apakah Anda Yakin Untuk Menghapus?

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{url('/delete')}}/{{$user->id}}" type="button" class="btn btn-danger">
                                <i class="icon-trash menu-icon" style="color: black"></i></a>
                        </div>
                    </div>
                        </div>
                      </div>
                    </div>
    </div>
</div>

@endsection
