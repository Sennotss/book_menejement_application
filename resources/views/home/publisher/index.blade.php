@extends('layouts.master')
@section('title', 'Publisher')
@section('content')
      <!-- partial:../../partials/_navbar.html -->
     
      <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial -->
            <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                            <i class="fa fa-pencil"></i>
                            </span> Data Publisher
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
                                    <a href="/publisher/create" class="btn btn-primary btn-sm">Tambah Data</a>
                                    <table class="table table-striped">
                                    <thead class="text-center">
                                        <tr>
                                        <th> No </th>
                                        <th> Name </th>
                                        <th> Address </th>
                                        <th> Contact </th>
                                        <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach($publisher as $publisher)
                                        <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$publisher->name}}</td>
                                        <td>{{$publisher->address}}</td>
                                        <td>{{$publisher->contact}}</td>
                                        <td>
                                            <a href="/publisher/edit/{{$publisher->id}}" class="btn btn-primary btn-sm">edit</a>
                                            <a href="/publisher/delete/{{$publisher->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data akan dihapus?')">Hapus</a>
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