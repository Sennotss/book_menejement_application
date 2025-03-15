<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}" />
  </head>

<div class="container-fluid page-body-wrapper">
        <!-- partial -->
            <div class="content-wrapper">
                <div class="page-header">
                        <div class="col-lg-5 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center">Chapter One</h3>
                                        <h5 class="text-center">Jl. Terusan Cibaduyut</h5>
                                    </div>
                                    <br>
                                    <div class="d-flex justify-content-between">
                                        <p class="font-weight-bold">Cashier :</p>
                                        <p>{{$transaction->user->name}}</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="font-weight-bold">Date :</p>
                                        <p>{{$transaction->created_at}}</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="font-weight-bold">No Transaction :</p>
                                        <p>{{$transaction->id}}</p>
                                    </div>
                                    <hr>
                                    <table class="table table-striped">
                                    <thead class="text-center">
                                        <tr>
                                        <th> Book </th>
                                        <th> Amount </th>
                                        <th> Subtotal </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach($transaction->detail as $detail)
                                        <tr>
                                            <td>{{$detail->book->title}}</td>
                                            <td>{{$detail->amount}}</td>
                                            <td>Rp. {{number_format($detail->subtotal)}}</td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td class="font-weight-bold">Discount</td>
                                            <td></td>
                                            <td>Rp. {{number_format($discount)}}</td>
                                        </tr>

                                        <tr>
                                            <td class="font-weight-bold">Total</td>
                                            <td></td>
                                            @if($discount > 1)
                                                <td><del>Rp. {{number_format($subtotal)}}</del></td>
                                            @else
                                                <td>Rp. {{number_format($subtotal)}}</td>
                                            @endif

                                        </tr>
                                        
                                    </tbody>
                                    </table>
                                    <br>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <p class="font-weight-bold">Total :</p>
                                        <p>Rp. {{number_format($transaction->total)}}</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="font-weight-bold">Paid :</p>
                                        <p>Rp. {{number_format($transaction->amount_paid)}}</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="font-weight-bold">Change :</p>
                                        <p>Rp. {{number_format($transaction->change)}}</p>
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
    <script>
        window.print();
    </script>