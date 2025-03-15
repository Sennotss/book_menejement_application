@extends('layouts.master')
@section('title', 'Book')
@section('content')
      <!-- partial:../../partials/_navbar.html -->
     
      <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial -->
            <div class="content-wrapper">
                <div class="page-header">
                        <h3 class="page-title"> Detail Book </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 grid-margin stretch-card">
                                            <div class="card">
                                            <div class="card-body">
                                                <img src="" alt="">
                                                @if($member->status === 'Active')
                                                    <div class="badge badge-success">Active</div>
                                                @else 
                                                    <div class="badge badge-danger">Non Active</div>
                                                @endif
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 grid-margin stretch-card">
                                            <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Data Member</h4>
                                                <form class="forms-sample">
                                                <div class="form-group row">
                                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                                                    <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="exampleInputUsername2" value="{{$member->name}}" readOnly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Date of Birth</label>
                                                    <div class="col-sm-9">
                                                    <input type="text" name="dob" class="form-control" value="{{$member->dob}}" readOnly></input> 
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Address</label>
                                                    <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="exampleInputMobile" value="{{$member->address}}" readOnly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Level</label>
                                                    <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="exampleInputPassword2" value="{{$member->level}}" readOnly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Point</label>
                                                    <div class="col-sm-9">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: {{$member->point}}%" aria-valuenow="{{$member->point}}" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="../" class="btn btn-danger">Cancel</a>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

@endsection