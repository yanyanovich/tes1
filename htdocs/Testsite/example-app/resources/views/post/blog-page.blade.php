@extends('layouts.main')
@section('title-block')
    Blog
@endsection
@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Blog</h1>
        <section class="featured-posts-section">
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                    <div class="blog-post-thumbnail-wrapper">
                        <img src="assets/images/blog_1.jpg" alt="blog post">
                    </div>
                    <a href="{{route('show',$post->id)}}" class="blog-post-permalink">
                        <h6 class="blog-post-title">{{ $post->title }}</h6>
                    </a>
                    <a href="" class="blog-post-permalink">
                        <h2 class="blog-post-category">{{ $post->created_at }}</h2>
                    </a>

                </div>
                @endforeach
                

            </div>
            <div class="row">
                <div class="m-auto" style="margin-top: -40px">
                    {{ $posts->links() }}
                </div>
            </div>
        </section>
      <section class="featured-posts-section">
        <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">

        </div>
      </section>
</main>
@endsection