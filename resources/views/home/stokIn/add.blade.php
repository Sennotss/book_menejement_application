@extends('layouts.master')
@section('title', 'StokIn')
@section('content')
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        
        <!-- partial -->
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add StokIn </h3>
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
                    
                    <form class="forms-sample" action="/stokIn/store" method="POST">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Supplier</label>
                        <select name="supplier_id" class="form-select" id="">
                          <option value="">Select Supplier</option>
                          @foreach($supplier as $supplier)
                          <option value="{{$supplier->id}}">{{$supplier->name}}</option>                            
                          @endforeach
                        </select>
                        @error('supplier_id')
                          <div class="bg bg-danger p-3 mt-2">{{$message}}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Book</label>
                        <select name="book_id" class="form-select" id="">
                          <option value="">Select Book</option>
                          @foreach($book as $book)
                          <option value="{{$book->id}}">{{$book->title}}</option>                            
                          @endforeach
                        </select>
                        @error('book_id')
                          <div class="bg bg-danger p-3 mt-2">{{$message}}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Amount</label>
                        <input type="number" name="amount" class="form-control" id="" placholder="Amount">
                        @error('amount')
                          <div class="bg bg-danger p-3 mt-2">{{$message}}</div>
                        @enderror
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <a href="./" class="btn btn-light">Cancel</a>
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