@extends('layouts.master')
@section('title', 'Book')
@section('content')
        <div class="container-fluid">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add Book </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <form class="form-sample" action="/book/store" method="POST" enctype="multipart/form-data">
                      @csrf
                      <p class="card-description"> Personal info </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="title" value="{{old('title')}}" />
                              @error('title')
                            <div class="bg bg-danger p-3 mt-2">{{$message}}</div>
                          @enderror
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Cover</label>
                            <div class="col-sm-9">
                              <input type="file" class="form-control" name="cover" />
                              @error('cover')
                              <div class="bg bg-danger p-3 mt-2">{{$message}}</div>
                            @enderror
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                              <textarea name="description" class="form-control" id=""></textarea>
                              @error('description')
                              <div class="bg bg-danger p-3 mt-2">{{$message}}</div>
                            @enderror
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-9">
                              <select class="form-select" name="category_id">
                                <option value="">Select Category</option>
                                @foreach ($category as $category)
                                  <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                              </select>
                              @error('category_id')
                              <div class="bg bg-danger p-3 mt-2">{{$message}}</div>
                            @enderror
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Genre</label>
                            <div class="col-sm-9">
                              <select class="form-select" name="genre_id">
                                <option value="">Select Genres</option>
                                @foreach ($genre as $genre)
                                  <option value="{{$genre->id}}">{{$genre->name}}</option>
                                @endforeach
                              </select>
                              @error('genre_id')
                              <div class="bg bg-danger p-3 mt-2">{{$message}}</div>
                            @enderror
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Author</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="author" />
                              @error('author')
                              <div class="bg bg-danger p-3 mt-2">{{$message}}</div>
                            @enderror
                            </div>
                          </div>
                        </div>
                      </div>  
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Publisher</label>
                            <div class="col-sm-9">
                              <select class="form-select" name="publisher_id">
                                <option value="">Select Publisher</option>
                                @foreach ($publisher as $publisher)
                                  <option value="{{$publisher->id}}">{{$publisher->name}}</option>
                                @endforeach
                              </select>
                              @error('publisher_id')
                              <div class="bg bg-danger p-3 mt-2">{{$message}}</div>
                            @enderror
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Publish</label>
                            <div class="col-sm-9">
                              <input type="date" class="form-control" name="publish" />
                              @error('publish')
                              <div class="bg bg-danger p-3 mt-2">{{$message}}</div>
                            @enderror
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Price</label>
                            <div class="col-sm-9">
                              <input type="number" name="price" class="form-control" />
                              @error('price')
                              <div class="bg bg-danger p-3 mt-2">{{$message}}</div>
                            @enderror
                            </div> 
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Stock</label>
                            <div class="col-sm-9">
                              <input type="number" name="stock" class="form-control" />
                              @error('stock')
                              <div class="bg bg-danger p-3 mt-2">{{$message}}</div>
                            @enderror
                            </div> 
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary">Submit</button>
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

@endsection