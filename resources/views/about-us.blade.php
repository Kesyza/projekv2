@extends('layouts.rentcar')
@section('title','About Us')
@section('content')

<section class="page-header aboutus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">

      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="home">Home</a></li>
        <li><a href="#">About Us </a></li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>

<!-- /About-us-->

<div class="container">
    <div class="row">
        <h2>Tentang saya</h2>
        <hr />
        <div class="row pt-md">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 team">
                <div class="img-box">
                    <img class="img-responsive" alt="Responsive Team Profiles" src="img/chandra.jpg" />
                    <ul class="text-center">
                        <a href="#">
                            <li><i class="fa fa-facebook"></i></li>
                        </a>
                        <a href="#">
                            <li><i class="fa fa-twitter"></i></li>
                        </a>
                        <a href="#">
                            <li><i class="fa fa-linkedin"></i></li>
                        </a>
                    </ul>
                </div>
                <h1>Adi Chandra</h1>
                <h2>Co-founder/ Operations</h2>
                <hr />
                <p class="text-justify">Jangan berlari lebih baik berjalan, Karna hidup itu perjalanan bukan pelarian</p>
            </div>
        </div>
    </div>
</div>



@endsection

