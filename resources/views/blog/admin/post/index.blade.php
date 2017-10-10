@extends('blog.admin.mainLaout')


@section('container')
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Tables</li>
  </ol>
  <!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> All Posts
      <a href="{{url('admin/post/create')}}" class="btn btn-primary pull-right">New Post</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Title</th>
              <th>Status</th>
              <th>Created</th>
              <th>Author</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            @foreach($posts as $key=>$post)
            <tr>
              <td>{{$post->title}}</td>
              <td>{{$post->publish?"Published":"Not Published"}}</td>
              <td>{{$post->created_at->diffForHumans()}}</td>
              <td>{{$post->user->name}}</td>
              <td>
                <a href="{{url('admin/post/'.$post->id.'/edit')}}">Edit</a>
                @if(!$post->publish)
                <a href="{{url('admin/post/publish/'.$post->id)}}" class="publish">Publish</a>
                @else
                <a href="{{url('admin/post/ubpublish/'.$post->id)}}" class="unpublish">Un-Publish</a>
                @endif
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>
</div>
@endsection
@section('footer')
<script type="text/javascript">
  $(".publish").click(function(event){
    if(!confirm("Are you sure to Publish?"))
      event.preventDefault();

  });
  $(".unpublish").click(function(event){
    if(!confirm("Are you sure to Un-Publish?"))
      event.preventDefault();

  });
</script>
@endsection