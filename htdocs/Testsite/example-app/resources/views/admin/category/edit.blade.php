 @extends('layouts.admin_layout')

@section('title','Edit Category')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit Category : {{ $category['title'] }}</h1>
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
        <form action="{{ route('category.update',$category['id']) }}" method="POST">
            @csrf
            @method('PUT')
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" value="{{ $category['title'] }}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter name of category" required>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
</div>
            </div>
        </div>        {{-- container-fluid --}}
</section>
@endsection