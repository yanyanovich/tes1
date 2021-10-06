@extends('layouts.main')
@section('title-block')
    Blog
@endsection
@section('content')
<nav aria-label="breadcrumb" style="float: right">

    <ol class="breadcrumb">
    
    <li class="breadcrumb-item"><a href="{{route('main')}}" >Main</a></li>
    
    <li class="breadcrumb-item"><a>{{ $tmp->title }}</a></li>

    
    </ol>
    
    </nav> 
<main class="blog-post">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">{{ $tmp ->title }}</h1>
        <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">{{ $tmp->created_at }}</p>
        <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
            <img src="assets/images/blog-post-featured-img.png" alt="featured image" class="w-100">
        </section>
        <section class="post-content">
            <div class="row">
                <div class="col-lg-9 mx-auto" data-aos="fade-up">
                    <p>{{ $tmp->text }}</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4 mb-3" data-aos="fade-right">
                    <img src="assets/images/blog_post_1.jpg" alt="blog post" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-up">
                    <img src="assets/images/blog_post_2.jpg" alt="blog post" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-left">
                    <img src="assets/images/blog_post_3.jpg" alt="blog post" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <div class="col-md-4 mb-3" data-aos="fade-left">
                       
                    </div>
                </div>
            </div>
        </section>
        <section class="featured-posts-section">
            <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
        <p>
        </p>
            </div>
          </section>
    </div>
    
</main>
@endsection