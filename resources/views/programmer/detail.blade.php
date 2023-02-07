@extends('programmer/sidebar')
@section('konten')

<div class="detail-project"> 
    <table class="table-detailproject">
      <tr>
        <td>
            <div class="title-margin">
            <h3 class="font-weight-bold">Detail project</h3>
            </div>
        </td>
        <td rowspan="2">
          <div class="card bg-warning mb-3 float-right status-panel">
            <div class="card-header">
              <b>Status</b>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item color-text"><div class="color-text"><b>Proses</b></div></li>
            </ul>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="subtitle-space">
          <h5> Nama Aplikasi </h5>
          <div>Project 1</div>
        </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="subtitle-space">
            <h5> Deskripsi </h5>
            <div class="description-text"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore possimus explicabo consequuntur 
              corrupti beatae! Rem sed necessitatibus quo quas in aliquam voluptatem commodi molestiae iste aspernatur! 
              Pariatur itaque obcaecati a! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis consequuntur
               debitis fugit quasi blanditiis. A reprehenderit saepe quod rerum natus consequuntur totam, reiciendis tenetur,
                magni odit, recusandae voluptas iure eaque? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut,
                 voluptates eaque vel itaque vero laboriosam beatae? Accusantium velit enim, fugit ullam accusamus architecto 
                 nobis dolores praesentium iure. Nobis, quo voluptatem.</div>
        </div>
        </td>
        <td rowspan="2">
          <div class="float-right right-page-text">
              <h5>Tim Programmer</h5>
            <ul>
              <li><div class="ul-text">Evania Trafika</div></li>
              <li><div class="ul-text">Muhammad Rangga Saputra</div></li>
              <li><div class="ul-text">Bagas Tarangga</div></li>
            </ul>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="subtitle-space">
            <h5> Fitur - Fitur </h5>
            <ul>
              <li><div class="ul-text">Login</div></li>
              <li><div class="ul-text">Register</div></li>
              <li><div class="ul-text">Homepage Menu</div></li>
              <li><div class="ul-text">Buat Ajuan</div></li>
              <li><div class="ul-text">Cek Riwayat Ajuan</div></li>
            </ul>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="subtitle-space">
            <h5> Modul </h5>
            <link rel="stylesheet" href="#">
            <a href="#" class="link-decoration"><i class="fas fa-file"></i> Modul 1</a> <br>
            <a href="#" class="link-decoration"><i class="fas fa-file"></i> Modul 2</a> <br>
            <a href="#" class="link-decoration"><i class="fas fa-file"></i> Modul 3</a> <br>
          </div>
        </td>
      </tr>
    </table>

</div>

<div class="subtitle-space">
  <h5>Update Progres</h5>
<div class="col-md-12 grid-margin">
                <div class="table-responsive">
                    <table class="projectdetail-table" cellpadding="4">
                  <thead>
                    <tr>
                      <th>
                        Nama Fitur
                      </th>
                      <th>
                        Tanggal Update
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                        
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>
                          Login
                        </td>
                        <td>
                          -
                        </td>
                        <td>
                          Bagas tarangga
                        </td>
                        <td>
                          {{-- <a href="{{url('/edit')}}/{{$user->id}}" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalAdd"> --}}
                            <a href="" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalAdd">

                            Update</a>
                        </td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
  </div>


   <!-- Modal -->
  <div class="modal fade modal-lg" id="ModalAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header content-wrapper">
          <h5 class="modal-title" id="staticBackdropLabel">Update Progres</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body content-wrapper">
                      <div class="card ">
                        <div class="card-body">
                          <form class="forms-sample" action="" method="POST">
                            @csrf
                            <div class="form-group">
                            <div class="form-floating">
                              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" disabled value="Fitur Login" required>
                              <label for="floatingInput">Nama Fitur</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-floating">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                              <label for="floatingInput">Keterangan</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-floating">
                              <input type="text" class="form-control" name="password" id="password" placeholder="Password" required>
                              <label for="floatingInput">Link Github</label>
                            </div>
                            </div>

                            <div class="container">
                              <h3>Upload Gambar</h3>
                              <div class="drag-area">
                                <div class="icon">
                                  <i class="fa fa-images"></i>
                                </div>

                                <span class="header"> Drag & Drop </span>
                                <span class="header">or <span class="button"> Browse </span></span>
                                <input type="file" hidden name="inputimg" class="inputimg" id="inputimg" />
                                <span class="support">Support : JEPG, JPG, PNG</span>

                              </div>
                            </div>

                            <div class="form-group">
                                  <input type="hidden" class="form-control" name="jumlah_kinerja" id="jumlah_kinerja" value="0">
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="role" id="role" value="BPA">
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
                {{-- <form class="forms-sample" action="{{url('/update')}}/{{$user->id}}" method="POST"> --}}
                  <form class="forms-sample" action="" method="POST">

                  @csrf
                  <div class="form-group">
                  <div class="form-floating">
                    {{-- <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{$user->name}}" required> --}}
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="name" required>

                    <label for="floatingInput">Nama</label>
                  </div>
                  </div>
                  <div class="form-group">
                  <div class="form-floating">
                    {{-- <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}" required> --}}
                    <input type="email" class="form-control" name="email" id="email" value="email" required>

                    <label for="floatingInput">Email address</label>
                  </div>
                  </div>
                  <div class="form-group">
                  <div class="form-floating">
                    {{-- <input type="password" class="form-control" name="password" id="password" value="{{$user->password}}" required> --}}
                    <input type="password" class="form-control" name="password" id="password" value="password" required>

                    <label for="floatingInput">Password</label>
                  </div>
                  </div>
                  <div class="form-group">
                      <div class="form-floating">
                        {{-- <input type="text" class="form-control" name="no_hp" id="no_hp" value="{{$user->no_hp}}" required> --}}
                        <input type="text" class="form-control" name="no_hp" id="no_hp" value="no hp" required>

                        <label for="floatingInput">No. Handphone</label>
                  </div>
                  </div>
                  <div class="form-group">
                        {{-- <input type="hidden" class="form-control" name="jumlah_kinerja" id="jumlah_kinerja" value="{{$user->jumlah_kinerja}}"> --}}
                        <input type="hidden" class="form-control" name="jumlah_kinerja" id="jumlah_kinerja" value="jumlah kinerja">

                  </div>
                  <div class="form-group">
                      {{-- <input type="hidden" class="form-control" name="role" id="role" value="{{$user->role}}"> --}}
                      <input type="hidden" class="form-control" name="role" id="role" value="role">

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

@endsection