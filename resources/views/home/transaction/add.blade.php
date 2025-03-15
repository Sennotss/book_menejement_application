@extends('layouts.master')
@section('title', 'Transaction')
@section('content')
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        
        <!-- partial -->
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add Transaction </h3>
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
                    
                    <form class="forms-sample" action="/transaction/store" method="POST">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Cashier</label>
                        <select name="user_id" id="" class="form-select">
                          <option value="">Select User</option>
                          @foreach($user as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Customer</label>
                        <input type="text" class="form-control" name="customer" value="{{old('customer')}}" id="exampleInputEmail3" placeholder="Customer">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Total</label>
                        <input type="number" class="form-control" name="total" value="0" id="exampleInputPassword4" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Payment</label>
                        <select name="payment_id" id="" class="form-select">
                          <option value="">Select Payment</option>
                          @foreach($payment as $payment)
                            <option value="{{$payment->id}}">{{$payment->name}}</option>
                          @endforeach
                        </select>
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