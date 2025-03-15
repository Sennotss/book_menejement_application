@extends('layouts.master')
@section('title', 'User')
@section('content')
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        
        <!-- partial -->
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add User </h3>
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
                    
                    <form class="forms-sample" action="/user/update/{{$user->id}}" method="POST">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$user->name}}" id="exampleInputName1" placeholder="Name">
                        @error('name')
                            <div class="bg bg-danger p-3 mt-2">{{$message}}</div>
                          @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email</label>
                        <input type="email" class="form-control" name="email" value="{{$user->email}}" id="exampleInputEmail3" placeholder="Email">
                        @error('email')
                            <div class="bg bg-danger p-3 mt-2">{{$message}}</div>
                          @enderror
                      </div>
                      <div class="form-group">
                        <label for="selectLevel">Level</label>
                        <select class="form-select" id="selectLevel" name="level" value="{{$user->level}}">
                            <option value="{{$user->level}}">{{$user->level}}</option>
                            @if($user->level === 'Admin')
                                <option value="Cashier">Cashier</option>
                            @else
                                <option value="Admin">Admin</option>
                            @endif
                        </select>
                        @error('level')
                            <div class="bg bg-danger p-3 mt-2">{{$message}}</div>
                          @enderror
                      </div>
                      <div class="form-group">
                        <label for="selectStatus">Status</label>
                        <select class="form-select" id="selectStatus" name="status" value="{{$user->level}}">
                            <option value="{{$user->status}}">{{$user->status}}</option>
                            @if($user->status === 'Active')
                                <option value="Non-Active">Non Active</option>
                            @else
                                <option value="Active">Active</option>
                            @endif
                        </select>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <a href="../" class="btn btn-light">Cancel</a>
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