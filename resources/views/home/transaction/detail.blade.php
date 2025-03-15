
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
              <h3 class="page-title"> Detail Transaction : {{$transaction->id}} </h3>
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
                        <div class="row">
                            <div class="col-md-4">
                                <form class="forms-sample" action="/transaction/detail/scan/{{$transaction->id}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="transaction_id" value="{{$transaction->id}}">
                                        <div class="col-md-12">
                                            <label for="exampleInputName1">Book</label>
                                            <select name="book_id" id="" class="form-select">
                                                <option value="">Select Book</option>
                                                @foreach($book as $book)
                                                    <option value="{{$book->id}}">{{$book->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label for="exampleInputName1">Amount</label>
                                            <input type="number" name="amount" id="" placeholder="Add Amount" class="form-control">
                                        </div>
                                    </div>
                                <button type="submit" class="btn btn-gradient-primary me-2">Add</button>
                                </form>
                            </div>
                            <div class="col-md-8">
                                <table class="table table-striped">
                                <thead class="text-center">
                                    <tr>
                                    <th> Book </th>
                                    <th> Price </th>
                                    <th> Amount </th>
                                    <th> Subtotal </th>
                                    <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach($detail as $detail)
                                    <tr>
                                        <td>{{$detail->book->title}}</td>
                                        <td>Rp. {{number_format($detail->book->price)}}</td>
                                        <td>{{$detail->amount}}</td>
                                        <td>Rp. {{number_format($detail->subtotal)}}</td>
                                        <td><a href="/transaction/detail/delete/{{$detail->id}}"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td>Total</td>
                                        <td></td>
                                        <td></td>
                                        <td>Rp. {{number_format($cost)}}</td>
                                        <td></td>
                                    </tr>
                                    
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="forms-sample" action="/transaction/detail/update/{{$transaction->id}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label for="exampleInputName1">Paid</label>
                                            <input type="number" name="amount_paid" id="" placeholder="Add Paid" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label for="exampleInputName1">Discount</label>
                                            <input type="number" name="discount" id="" value="0" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="">Change</label>
                                    <input type="number" name="change" id="" class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-gradient-primary me-2">Check Out</button>
                            <a href="../" class="btn btn-danger">Cancel</a>
                        </form>
                    </div>
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