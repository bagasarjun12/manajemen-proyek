@extends('koordinator/sidebar')
@section('konten')
    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold">Detail Project</h3>
            </div>
        <div class="col-md-12 grid-margin">
        <div class="card">
          <div class="card-body">
          <h6 class="font-weight-bold">Tanggal Target : {{$projects->target}}</h5>
            <h6 class="font-weight-bold">Tanggal Mulai : {{$projects->mulai}}</h5>
                <h6 class="font-weight-bold">Jenis Project : {{$projects->jenis}}</h5>
                    <h6 class="font-weight-bold">Pengaju : {{$projects->pengaju}}</h5>
          <h6 class="font-weight-bold">Nama Project : {{$projects->nama_project}}</h5>
            <h6 class="font-weight-bold">Deskripsi : {{$projects->deskripsi}}</h5>
          </div>
                </div>
              </div>
              @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{session('success')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
                </div>
    @endif
<!-- Tabs -->
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Programmer</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Fitur</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <form class="forms-sample" action="/detailverifikasi/programmer/{id}" method="POST">
                        @csrf
                        <div class="form-group col-lg-6">
                            <select class="form-control" id="user_id" name="user_id" required>
                              <option selected disabled>Pilih Programmer</option>
                              @foreach ( $users as $user)
                              <option value="{{$user->id}}">{{$user->name}}</option>
                              @endforeach
                            </select>
                      </div>
                      <div class="form-group">
                        <input type="hidden" class="form-control" name="project_id" id="project_id" value="{{$projects->id}}">
                    </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end col-lg-6">
                        <button type="submit" class="btn btn-primary me-md-2">Submit</button>
                        </div>
                    </form>
                    <table class="table col-lg-6">
                        <thead>
                          <tr>
                            <th>
                              No
                            </th>
                            <th>
                              Nama
                            </th>
                            <th>
                              Aksi
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($programmers as $programmer)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $programmer->user->name }}</td>
                              <td>
                                   <a type="button" class="btn btn-danger" href="{{url('/detailverifikasi/programmer/$id')}}/{{$programmer->id}}">
                                  <i class="icon-trash menu-icon" style="color: black"></i></a>
                              </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <form class="forms-sample" action="/detailverifikasi/fitur/{id}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" class="form-control" name="user_id" id="user_id" value="{{auth()->user()->id}}">
                        <input type="hidden" class="form-control" name="project_id" id="project_id" value="{{$projects->id}}">
                        <div class="form-group col-lg-6">
                            <div class="form-floating">
                              <input type="text" class="form-control" name="nama_fitur" id="nama_fitur" placeholder="Nama Fitur" required>
                              <label for="floatingInput">Nama Fitur</label>
                        </div>
                        </div>
                        <div class="form-group col-lg-6 ">
                            <label for="nama_file" class="form-label">Dokumen / Modul</label>
                                <input type="file" class="form-control" name="nama_file" id="nama_file" value="">
                            </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end col-lg-6">
                        <button type="submit" class="btn btn-primary me-md-2">Submit</button>
                        </div>
                    </form>
                    <table class="table col-lg-6">
                        <thead>
                          <tr>
                            <th>
                              No
                            </th>
                            <th>
                              Nama Fitur
                            </th>
                            <th>
                                Modul
                            </th>
                            <th>
                              Aksi
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($fiturs as $fitur)
                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $fitur->nama_fitur }}</td>
                              <td>
                                @if($fitur->nama_file)
                                <a href="{{asset('storage/'. $fitur->nama_file)}}"><button class="btn btn-success" type="button">Download</button></a>
                                @else
                                    Tidak Ada Modul
                                @endif
                              </td>
                              <td>
                                   <a type="button" class="btn btn-danger" href="{{url('/detailverifikasi/fitur/$id')}}/{{$fitur->id}}">
                                  <i class="icon-trash menu-icon" style="color: black"></i></a>
                              </td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                </div>
                </div>
              </div><br><br>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-danger" type="button" href="/projectpage">Cancel</a>
                <button class="btn btn-success" type="submit">Verifikasi</button>
                </div>

@endsection
