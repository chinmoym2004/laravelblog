@extends('blog.mianLayout')



@section('meta')
  <meta name="description" content="myworkdetails - skill up">
  <meta name="author" content="myworkdetails.com">
@endsection


@section('title')
<title>Laravel Blog</title>
@endsection

@section('header')

@endsection

@section('container')
<!-- Page Header -->
<header class="masthead" style="background-image: url({{asset('blog/img/home-bg.jpg')}})">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Clean Blog</h1>
          <span class="subheading">A Blog Theme by Start Bootstrap</span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      @foreach($posts as $post)
      <div class="post-preview">
        <a href="{{url('post/'.$post->slug)}}">
          <h2 class="post-title">
            {{$post->title}}
          </h2>
          <h3 class="post-subtitle">
            {{$post->preview_content}}
          </h3>
        </a>
        <p class="post-meta">Posted by
          <a href="#">{{$post->user->name}}</a>
          on {{date_format($post->created_at, 'jS F Y')}}</p>
      </div>
      <hr>
      @endforeach
      <!-- Pager -->
      <div class="clearfix">
        {{$posts->links()}}
      </div>
    </div>
  </div>
</div>
@endsection
