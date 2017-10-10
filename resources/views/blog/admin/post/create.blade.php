@extends('blog.admin.mainLaout')


@section('container')
<div class="container-fluid">
	<form method="POST" action="{{url('admin/post')}}" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Title</label>
	    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Body</label>
	    <textarea class="form-control" id="body" name="body"></textarea>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Tags</label>
	    <input type="text" class="form-control" id="tags" name="tags"/>
	  </div>

	  	<div class="form-group">
			<label for="exampleInputPassword1">Preview content</label>
			<textarea class="form-control" id="preview_content" name="preview_content">{{$post->preview_content}}</textarea>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Post image</label>
			<input type="file" class="form-control" id="post_image" name="post_image"/>
		</div>

	  <div class="form-group">
	    <label for="exampleInputPassword1">SEO Text</label>
	    <input type="text" class="form-control" id="tags" name="seo"/>
	  </div>

	  <button type="submit" class="btn btn-default">Save As Draft</button>
	</form>
</div>
@endsection

@section('footer')
<script src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript">
window.onload = function() {
	CKEDITOR.replace('body');
	CKEDITOR.replace('preview_content');
};
</script>
@endsection