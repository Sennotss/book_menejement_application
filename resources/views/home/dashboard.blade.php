@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')

<div class="content-wrapper">
    <!-- judul halaman pake icon -->
     
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
    <!-- end judul halaman pake icon -->
    @if(Auth()->user()->level === 'Admin')
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Data Income <i class="fa fa-book fa-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">Rp. {{number_format($transaction)}}</h2>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Data Users <i class="fa fa-user fa-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">{{$user}}</h2>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Stok In <i class="fa fa-truck fa-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">{{$stokIn}}</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
    @else
    <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Data Book <i class="fa fa-book fa-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">{{$book}}</h2>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Data Transaction <i class="fa fa-user fa-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">{{$transaction_jumlah}}</h2>
                  </div>
                </div>
             </div>
            </div>
          </div>
    @endif
@endsection