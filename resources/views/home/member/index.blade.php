@extends('layouts.master')
@section('title', 'Member')
@section('content')
      <!-- partial:../../partials/_navbar.html -->
     
      <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial -->
            <div class="content-wrapper">
                <div class="page-header">
                        <h3 class="page-title"> Members Data </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Data</h4>
                                    <a href="/member/create" class="btn btn-primary btn-sm">Tambah Data</a>
                                    <table class="table table-striped">
                                    <thead class="text-center">
                                        <tr>
                                        <th> No </th>
                                        <th> Name </th>
                                        <th> Date of Birth </th>
                                        <th> Address </th>
                                        <th> Level </th>
                                        <th> Status </th>
                                        <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach($member as $member)
                                        <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$member->name}}</td>
                                        <td>{{$member->dob}}</td>
                                        <td>{{$member->address}}</td>
                                        <td>{{$member->level}}</td>
                                        <td>{{$member->status}}</td>
                                        <td>
                                            <a href="/member/edit/{{$member->id}}" class="btn btn-primary btn-sm">edit</a>
                                            <a href="/member/detail/{{$member->id}}" class="btn btn-info btn-sm">Detail</a>
                                            <a href="/member/delete/{{$member->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data akan dihapus?')">Hapus</a>
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