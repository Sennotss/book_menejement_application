@extends('layouts.master')
@section('title', 'Supplier')
@section('content')
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        
        <!-- partial -->
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Edit Supplier </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <form class="forms-sample" action="/supplier/update/{{$supplier->id}}" method="POST">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$supplier->name}}" id="exampleInputName1" placeholder="Name">
                        @error('name')
                          <div class="bg bg-danger p-3 mt-2">{{$message}}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Address</label>
                        <input type="text" name="address" class="form-control" id="" value="{{$supplier->address}}"></input type="text">
                        @error('address')
                          <div class="bg bg-danger p-3 mt-2">{{$message}}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Contact</label>
                        <input type="number" name="contact" class="form-control" value="{{$supplier->contact}}" id=""></input>
                        @error('contact')
                          <div class="bg bg-danger p-3 mt-2">{{$message}}</div>
                        @enderror
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
         ->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
@endsection