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
                    <form class="form-sample" action="/book/update/{{$book->id}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="title" value="{{$book->title}}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Cover</label>
                            <div class="col-sm-9">
                              <input type="file" class="form-control" name="cover" value="{{$book->cover}}" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                              <input type="text" name="description" id="" class="form-control" value="{{$book->description}}">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-9">
                              <select class="form-select" name="category_id">
                                <option value="{{$book->genre->id}}">{{$book->category->name}}</option>
                                @foreach ($category as $category)
                                  @if($category->id != $book->category->id)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                  @endif
                                @endforeach
                              </select>
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
                                <option value="{{$book->genre->id}}">{{$book->genre->name}}</option>
                                @foreach ($genre as $genre)
                                  @if($genre->id != $book->genre->id)
                                    <option value="{{$genre->id}}">{{$genre->name}}</option>
                                  @endif
                                @endforeach
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Author</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="author" value="{{$book->author}}" />
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
                                <option value="{{$book->publisher->id}}">{{$book->publisher->name}}</option>
                                @foreach ($publisher as $publisher)
                                  @if($publisher->id != $book->publisher->id)
                                    <option value="{{$publisher->id}}">{{$publisher->name}}</option>
                                  @endif
                                @endforeach
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Publish</label>
                            <div class="col-sm-9">
                              <input type="date" class="form-control" name="publish" value="{{$book->publish}}" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Price</label>
                            <div class="col-sm-9">
                              <input type="number" name="price" class="form-control"  value="{{$book->price}}" />
                            </div> 
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Stock</label>
                            <div class="col-sm-9">
                              <input type="number" name="stock" class="form-control"  value="{{$book->stock}}" />
                            </div> 
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary">Submit</button>
                      <a href="../" class="btn btn-light">Cancel</a>
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