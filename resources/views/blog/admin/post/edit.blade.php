@extends('blog.admin.mainLaout')


@section('container')
<div class="container-fluid">
	<form method="POST" action="{{url('admin/post/'.$post->id)}}" enctype="multipart/form-data">
		<input type="hidden" name="_method" value="PUT">
		<div class="form-group">
			<label for="exampleInputEmail1">Title</label>
			<input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$post->title}}">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Body</label>
			<textarea class="form-control" id="body" name="body">{{$post->body}}</textarea>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Tags</label>
			<input type="text" class="form-control" id="tags" name="tags" value="{{$post->tags}}" />
		</div>

		<div class="form-group">
			<label for="exampleInputPassword1">Preview content</label>
			<textarea class="form-control" id="preview_content" name="preview_content">{{$post->preview_content}}</textarea>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Post image</label>
			<input type="file" class="form-control" id="post_image" name="post_image"/>
			
			@if($post->post_image)
			<img src="{{asset($post->post_image)}}" class="img-responsive" style=height: 200px>
			@endif

		</div>

		<div class="form-group">
			<label for="exampleInputPassword1">SEO Text</label>
			<input type="text" class="form-control" id="seo" name="seo" value="{{$post->seo}}" />
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Publish?</label>
			<select class="form-control" name="publish" id="publish">
				<option value="0" {{$post->publish==0?'selected':''}}>No</option>
				<option value="1" {{$post->publish==1?'selected':''}}>Yes</option>
			</select>
		</div>
		<button type="submit" class="btn btn-default">Update</button>
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