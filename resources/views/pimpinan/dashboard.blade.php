@extends('programmer/sidebar')
@section('konten')

<div class="col-md-12 grid-margin">
      <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold">Welcome Back, {{auth()->user()->name}}</h3>
      </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card tale-bg">
        <div class="card-people mt-auto">
          <img src="images/dashboard/people.svg" alt="people">
          <div class="weather-info">
            <div class="d-flex">
              <div>
                <h3 class="mb-0 font-weight-normal"><?php
                    date_default_timezone_set('Asia/Jakarta');
                    echo date('l, d / M / Y');
                    echo "<br/>";
                    ?>
                    </h3><p ><h4 class="mb-8 font-weight-normal" style="text-align: right;"><?php echo date('h:i:s a'); ?>
                    </h4></p>

              </div>
            </div>
          </div>
      </div>
    </div>
</div>
</div>
</div>
@endsection
