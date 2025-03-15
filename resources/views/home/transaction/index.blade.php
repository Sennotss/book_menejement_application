@extends('layouts.master')
@section('title', 'Transaction')
@section('content')
      <!-- partial:../../partials/_navbar.html -->
     
      <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial -->
            <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                            <i class="fa fa-shopping-cart"></i>
                            </span> Data Transaction
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">
                                <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                            </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Data</h4>
                                    <a href="/transaction/create" class="btn btn-primary btn-sm">Tambah Data</a>
                                    <a href="/transaction/laporan" class="btn btn-success btn-sm">Print</a>
                                    <table class="table table-striped">
                                    <thead class="text-center">
                                        <tr>
                                        <th> No </th>
                                        <th> Cashier </th>
                                        <th> Customer </th>
                                        <th> Total Pemasukan </th>
                                        <th> Payment </th>
                                        <th> Status </th>
                                        <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach($transaction as $transaction)
                                        <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$transaction->user->name}}</td>
                                        <td>{{$transaction->customer}}</td>
                                        <td>Rp. {{number_format($transaction->total)}}</td>
                                        <td>{{$transaction->payment->name}}</td>
                                        <td>
                                            @if($transaction->status === 'Pending')
                                                <div class="badge badge-danger">Pending</div>
                                            @else
                                                <div class="badge badge-success">Completed</div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($transaction->status === 'Pending')
                                                <a href="/transaction/detail/{{$transaction->id}}" class="btn btn-primary btn-sm">Detail</a>
                                                <a href="/transaction/delete/{{$transaction->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data akan dihapus?')">Hapus</a>
                                            @else
                                                <a href="/transaction/struk/{{$transaction->id}}" class="btn btn-info btn-sm"><i class="fa fa-print"></i></a>
                                            @endif
                                        </td>
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

@endsection