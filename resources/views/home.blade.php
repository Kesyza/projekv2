@extends('layouts.rentcar')
@section('title','Home')
@section('content')
<!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
            <h1>Selamat Datang {{ Auth::user()->name }}</h1>
            <p>Ingin Menyewa Mobil?</p>
            <a href="../car-listing" class="btn">Pelajari Selengkapnya <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Banners -->

@endsection





