@extends ('backend.layouts.master')

@section ('title', 'News')

@section('page-header')
    <h1>
        News
        <small>Post</small>
    </h1>
@endsection

@section ('breadcrumbs')
    <li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">{!! link_to_route('admin.news.post.index', 'News') !!}</li>
@stop

@section('content')
    <div class="box box-primary">
	<div class="box-header with-border">
	    <h3 class="box-title">News from HR Department</h3>
	</div>
	<div class="box-body">
	    <div class="pull-right" style="margin-bottom:10px">
		<a href="{{route('admin.news.post.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Add New</a>
	    </div>
	
	    <div class="clearfix"></div>
	    
	    <table id="news" class="table table-striped table-bordered">
		<thead>
		    <tr>
			<th style="width:10px">#</th>
			<th>Title</th>
			<th>Author</th>
			<th>Action</th>
		    </tr>
		</thead>
		<tfoot></tfoot>
		<tbody>
		    @foreach ( $news as $v )
		    <tr>
			<td></td>
			<td>{!! $v -> title !!}</td>
			<td>{!! $v -> author_id !!}</td>
			<td>
			    <a href="{{route('admin.news.post.edit', $v->id)}}" class="btn btn-xs btn-info" data-toggle="tooltip" data-placement="left" title="Edit"><i class="fa fa-pencil"></i></a>
			    <a href="{{route('admin.news.post.delete', $v->id)}}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="right" title="Delete"><i class="fa fa-trash"></i></a>
			</td>
		    </tr>
		    @endforeach
		</tbody>
	    </table>
	</div>
	<div class="box-footer"></div>
    </div>
@stop

@section('scripts')
<script type="text/javascript">
  $(document).ready(function () {
    var cTable = $('#news').DataTable({
      "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]]
    });
     cTable.on( 'order.dt search.dt', function () {
        cTable.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
  });
</script>
@stop
