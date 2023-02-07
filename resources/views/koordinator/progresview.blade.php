@extends('koordinator/sidebar')
@section('konten')

<div class="detail-project"> 
    <table class="table-detailproject">
      <tr>
        <td>
            <div class="title-margin">
            <h3 class="font-weight-bold">Progres</h3>
            - 3 Januari 2023
            </div>
        </td>
        <td>
          <div class="card bg-info mb-3 float-right status-panel">
            <div class="card-header">
              <b>Persentase</b>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item color-text"><div class="color-warning"><b>20 %</b></div></li>
            </ul>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="subtitle-space">
          <h5> Fitur </h5>
          <ul> 
            <li class="ul-text">Login</li>
          </ul>
        </div>
        </td>
        <td rowspan="2">
          <div class="float-right right-page-text">
              <h5>Diupload Oleh</h5>
            <ul>
              <li><div class="ul-text">Rangga Saputra</div></li>
            </ul>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="subtitle-space">
            <h5> Keterangan </h5>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Facere, voluptas. Velit, sunt. Atque id corrupti quaerat nobis ullam ad, 
              obcaecati assumenda voluptates ut expedita modi omnis, quibusdam reiciendis. Omnis, in! 
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="subtitle-space">
            <h5> Link Github </h5>
            <link rel="stylesheet" href="#">
            <a href="#" class="link-decoration"></i>https://github/project1</a> <br>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="subtitle-space">
            <h5> Bukti Tampilan </h5>
            <link rel="stylesheet" href="#">
            <img src="img/loginpage.jpg" alt="tidak ada gambar" class="image-adjust">
          </div>
        </td>
      </tr>
    </table>
</div>
@endsection