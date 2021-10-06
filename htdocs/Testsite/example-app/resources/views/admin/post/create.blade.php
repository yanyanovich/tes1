@extends('layouts.admin_layout')

@section('title','Add Category')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Add Article</h1>
            </div>
            </div>
        </div>
    </div>
  
@if (session('success'))
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
    </div>
@endif

    <section class="content">
        <div class="container-fluid">
            <div class="row">
<div class="col-lg-12">
    <div class="card card-primary">
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('post.store') }}" method="POST" >
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter name of Article" required>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="">Select category</label>
                    <select name="cat_id" id="" class="form-control">
                        @foreach ($categories as $item)
                        <option value="{{ $item ['id'] }}">{{ $item ['title'] }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="form-group">
                <form method="post">
                    <textarea id="summernote" name="text" required></textarea>
                  </form>
                  
            </div>
         {{-- <div class="form-group">
            <textarea name="text" id="" cols="30" rows="10" class="editor"></textarea>
              </div>
              <div class="form-group">
              <label for="feature_image">Feature Image</label>
              <img src="" alt="" class="imguploaded">
              <input class="form-control" type="text" id="feature_image" name="feature_image" value="" readonly>
              <a href="" class="btn btn-primary mt-2"class="popup_selector" data-inputid="feature_image">Select Image</a>

              </div> --}}
              <div class="card card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                {{-- <form>
                  <div class="card-body">
                    <div class="form-group"> --}}
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile" name="img" required>
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    {{-- </div>
                  </div> --}}
                  <!-- /.card-body -->
                {{-- </form> --}}
              </div>
               {{-- <div class="card-body">
                <div class="form-group">
                  <label>Tags</label>
                  <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Select a Tags" style="width: 100%;">
                    @foreach ($tag as $item)
                      <option value="{{ $item->id}}">{{ $item->title}}</option>
                    @endforeach
                  </select>
                </div>
              </div>  --}}

          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
</div>
            </div>
        </div>        {{-- container-fluid --}}
    </section>
@endsection
    