@extends('koordinator/sidebar')
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
  <h5>Progres</h5>
<div class="col-md-12 grid-margin">
                <div class="table-responsive">
                    <table class="table" cellpadding="4">
                  <thead>
                    <tr>
                      <th>
                        Tanggal
                      </th>
                      <th>
                        Aktor
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                        Aktivitas
                      </th>
                      <th>
                        
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>
                          3 Januari 2023
                        </td>
                        <td>
                          Programmer
                        </td>
                        <td>
                          Rangga Saputra
                        </td>
                        <td>
                          Mengupdate progres (<b>Fitur Login</b>)
                        </td>
                        <td>
                          <a href="/progresview"><button type="button" class="btn btn-info"><i class="icon-pencil menu-icon" style="color: black"> Detail</i></button></a>
                        </td>
                    </tr>
                    <tr>
                      <td>
                        1 Januari 2023
                      </td>
                      <td>
                        Koordinator
                      </td>
                      <td>
                        Fidya
                      </td>
                      <td>
                        Membuat Project
                      </td>
                      <td>
                        <a href="/progresview"><button type="button" class="btn btn-info"><i class="icon-pencil menu-icon" style="color: black"> Detail</i></button></a>
                      </td>
                  </tr>
                  </tbody>
                </table>
            </div>
        </div>
  </div>
@endsection