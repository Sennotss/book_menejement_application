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
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Laporan Transaksi</h4>
                                    <table class="table table-striped">
                                    <thead class="text-center">
                                        <tr>
                                        <th> No </th>
                                        <th> Cashier </th>
                                        <th> Total </th>
                                        <th> Payment </th>
                                        <th> Paid </th>
                                        <th> Discount </th>
                                        <th> Change </th>
                                        <th> Date </th>
                                        <th> Status </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach($transaction as $transaction)
                                        <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$transaction->user->name}}</td>
                                        <td>Rp. {{number_format($transaction->total)}}</td>
                                        <td>{{$transaction->payment->name}}</td>
                                        <td>Rp. {{number_format($transaction->amount_paid)}}</td>
                                        <td>{{$transaction->discount}}</td>
                                        <td>Rp. {{number_format($transaction->change)}}</td>
                                        <td>{{$transaction->created_at}}</td>
                                        <td>{{$transaction->status}}</td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                    </table>
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