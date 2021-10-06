@extends('layouts.admin_layout')

@section('title','Edit Article')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit Article : {{ $post['title'] }}</h1>
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
    <form action="{{ route('post.update',$post['id']) }}" method="POST">
            @csrf
            @method('PUT')
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" value="{{ $post['title'] }}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter name of article" required>
            </div>
          </div>
          <div class="form-group">
            <div class="form-group">
                <label for="">Select category</label>
                <select name="cat_id" id="" class="form-control">
                    @foreach ($categories as $item)
                    <option  req value="{{ $item ['id'] }}" @if ($item ['id']==$post['cat_id'])selected @endif>{{ $item ['title'] }}</option>
                    @endforeach
                </select>
            </div>

        </div>
          <div class="form-group">
                <textarea id="summernote" name="text"> {{ $post['text'] }} </textarea>           
        </div>
          <!-- /.card-body -->
      </div>

      <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <div class="input-group">
          <div class="custom-file">
            <img src="/{{ $post['img'] }}" alt="" class="img-uploaded" style="display: block" width="300px">
            <input type="file" class="custom-file-input" id="exampleInputFile" value="{{ $post['img'] }}" name="img">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
          
          <div class="input-group-append">
            <span class="input-group-text">Upload</span>
          </div>
        </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
            </div>
        </div>        {{-- container-fluid --}}
</section>
@endsection

