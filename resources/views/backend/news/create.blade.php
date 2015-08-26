@extends ('backend.layouts.master')

@section ('title', 'News')

@section('page-header')
    <h1>
        News
        <small>Add New Post</small>
    </h1>
@endsection

@section ('breadcrumbs')
    <li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">{!! link_to_route('admin.news.post.index', 'News') !!}</li>
   <li class="active">{!! link_to_route('admin.news.post.create', 'New Post') !!}</li>
@stop

@section('content')
    <script type="text/javascript" src="{{ asset('/js/vendor/tinymce/tinymce.min.js') }}"></script>
    <script type="text/javascript">
      tinymce.init({
	selector : "textarea",
	plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
	toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
      });
    </script>
    <div class="row">
	<div class="col-md-8">
	    <div class="box box-primary">
		<div class="box-header with-border">
		    <h3 class="box-title">Add New Post</h3>
		</div>
		{!! Form::model(new App\Post, ['route' => ['admin.news.post.store']]) !!}
		    @include('backend/news/includes/partials/_form', ['submit_text' => 'Save'])
		{!! Form::close() !!}
	    </div>
	</div>
    </div>
    
@stop
