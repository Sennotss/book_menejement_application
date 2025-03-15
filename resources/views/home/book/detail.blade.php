@extends('layouts.master')
@section('title', 'Book')
@section('content')
      <!-- partial:../../partials/_navbar.html -->
     
      <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial -->
            <div class="content-wrapper">
                <div class="page-header">
                        <h3 class="page-title"> Detail Book </h3>
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
                                    <div class="row">
                                        <div class="col-md-4 grid-margin stretch-card">
                                            <div class="card">
                                            <div class="card-body">
                                            <img src="{{ asset('/storage/covers/'. $book->cover)}}" style="width: 220px; height: 270px;">
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 grid-margin stretch-card">
                                            <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Data Book</h4>
                                                <form class="forms-sample">
                                                <div class="form-group row">
                                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Title</label>
                                                    <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="exampleInputUsername2" value="{{$book->title}}" readOnly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Description</label>
                                                    <div class="col-sm-9">
                                                        <textarea name="description" placeholder="{{$book->description}}" id="" class="form-control" readOnly ></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Category</label>
                                                    <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="exampleInputMobile" value="{{$book->category->name}}" readOnly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Genre</label>
                                                    <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="exampleInputPassword2" value="{{$book->genre->name}}" readOnly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Author</label>
                                                    <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="exampleInputConfirmPassword2" value="{{$book->author}}" readOnly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Publisher</label>
                                                    <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="exampleInputConfirmPassword2" value="{{$book->publisher->name}}" readOnly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Publish</label>
                                                    <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="exampleInputConfirmPassword2" value="{{$book->publish}}" readOnly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Price</label>
                                                    <div class="col-sm-9">
                                                    <input type="number" class="form-control" id="exampleInputConfirmPassword2" value="{{$book->price}}" readOnly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Stock</label>
                                                    <div class="col-sm-9">
                                                    <input type="stock" class="form-control" id="exampleInputConfirmPassword2" value="{{$book->stock}}" readOnly>
                                                    </div>
                                                </div>
                                                <a href="../" class="btn btn-danger">Cancel</a>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
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

@endsection