@extends('blog.mianLayout')


@section('meta')
  <meta name="description" content="{{$post->seo}}">
  <meta name="author" content="{{$post->user->name}}">


  <meta property="og:url"           content="{{url('post/'.$post->slug)}}" />
  <meta property="og:type"          content="education" />
  <meta property="og:title"         content="MyWorkDetails - {{$post->title}}" />
  <meta property="og:description"   content="{{$post->preview_content}}" />
  <meta property="og:image"         content="{{$post->post_image}}" />
@endsection

@section('title')
<title>Laravel Blog - {{$post->title}}</title>
@endsection

@section('header')

@endsection

@section('container')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{asset($post->post_image?$post->post_image:'blog/img/home-bg.jpg')}})">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>{{$post->title}}</h1>
              <h2 class="subheading">
                <div class="fb-share-button" 
                  data-href="{{url('blog/'.$post->slug)}}" 
                  data-layout="button_count">
                </div>
              </h2>
              <span class="meta">Posted by
                <a href="#">{{$post->user->name}}</a>
                on {{date_format($post->created_at, 'jS F Y')}}</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <?php echo $post->body; ?>
          </div>
        </div>
      </div>
    </article>

@endsection
