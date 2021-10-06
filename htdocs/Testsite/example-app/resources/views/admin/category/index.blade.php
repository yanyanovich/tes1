@extends('layouts.admin_layout')

@section('title','All Categories')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">All Categories</h1>
            </div>
            </div>
            @if (session('success'))
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
    </div>
@endif
        </div>
    </div>
  


    <section class="content">
        <div class="container-fluid">
                <div class="card">

                    <div class="card-body p-0">
                      <table class="table table-striped projects">
                          <thead>
                              <tr>
                                  <th style="width: 5%">
                                      ID
                                  </th>
                                  <th >
                                       Name
                                  </th>
                                  <th style="width: 40%">
                                  </th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($categories as $item)
                              <tr>
                                  <td>
                                      {{ $item['id'] }}
                                  </td>
                                  <td>
                                    {{ $item['title'] }}
                                  </td>
                                  <td class="project-actions text-right">
                                      <a class="btn btn-info btn-sm" href="{{ route('category.edit', $item['id']) }}">
                                          <i class="fas fa-pencil-alt">
                                          </i>
                                          Edit
                                      </a>
                                      <form action="{{ route('category.destroy', $item['id']) }}" method="POST" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm delete-btn" >
                                            <i class="fas fa-trash">
                                            </i>
                                                Delete 
                                            </button>
                                      </form>
                                      </a>
                                  </td>
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
        </div>        {{-- container-fluid --}}
    </section>
@endsection
    