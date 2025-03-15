@extends('layouts.master')
@section('title', 'Book')
@section('content')
      <!-- partial:../../partials/_navbar.html -->
     
      <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial -->
            <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                            <i class="fa fa-book"></i>
                            </span> Data Books
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
                                    @if(Auth()->user()->level === 'Admin')
                                        <a href="/book/create" class="btn btn-primary btn-sm">Tambah Data</a>
                                    @endif
                                    <table class="table table-striped">
                                    <thead class="text-center">
                                        <tr>
                                        <th> No </th>
                                        <th> Title </th>
                                        <th> Cover </th>
                                        <th> Price </th>
                                        <th> Stock </th>
                                        @if(Auth()->user()->level === 'Admin')
                                            <th> Action </th>
                                        @endif
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach($book as $book)
                                        <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$book->title}}</td>
                                        <td>
                                            <img src="{{ asset('/storage/covers/'. $book->cover)}}" class="rounded" style="width: 150px; height: 200px;">
                                        </td>
                                        <td>Rp. {{ number_format($book->price)}}</td>
                                        <td>{{$book->stock}}</td>
                                        <td>
                                            @if(Auth()->user()->level === 'Admin')
                                                <a href="/book/edit/{{$book->id}}" class="btn btn-primary btn-sm">edit</a>
                                                <a href="/book/detail/{{$book->id}}" class="btn btn-info btn-sm">Detail</a>
                                                <a href="/book/delete/{{$book->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data akan dihapus?')">Hapus</a>
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