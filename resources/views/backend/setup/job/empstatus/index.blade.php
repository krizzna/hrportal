@extends ('backend.layouts.master')

@section ('title', 'Job Details Setup')

@section('page-header')
    <h1>
        Job Details Setup
        <small>Employment Status</small>
    </h1>
@endsection

@section ('breadcrumbs')
    <li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">{!! link_to_route('admin.setup.job.titles.index', 'Job Detail Setup') !!}</li>
@stop

@section('content')
    <div class="nav-tabs-custom">
	<ul class="nav nav-tabs">
	    <li><a href="{{route('admin.setup.job.titles.index')}}">Job Titles</a></li>
	    <li><a href="{{route('admin.setup.job.paygrades.index')}}">Pay Grades</a></li>
	    <li class="active"><a href="{{route('admin.setup.job.employment-status.index')}}">Employment Status</a></li>
	</ul>
	<div class="tab-content">
	    <div class="tab-pane active" id="titles">
		<div class="pull-right" style="margin-bottom:10px">
		    <a href="{{route('admin.setup.job.employment-status.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Add New</a>
		</div>
		
		<div class="clearfix"></div>

		<table id="empstatus" class="table table-bordered table-striped">
		    <thead>
			<tr>
			    <th style="width:10px">#</th>
			    <th>Name</th>
			    <th>Description</th>
			    <th>Action</th>
			</tr>
		    </thead>
		    <tfoot></tfoot>
		    <tbody>
			@foreach ( $emps as $v )
			<tr>
			    <td></td>
			    <td>{!! $v->name !!}</td>
			    <td>{!! $v->description !!}</td>
			    <td>
				<a href="{{route('admin.setup.job.employment-status.edit', $v->id)}}" class="btn btn-xs btn-info" data-toggle="tooltip" data-placement="left" title="Edit"><i class="fa fa-pencil"></i></a>
				<a href="{{route('admin.setup.job.employment-status.delete', $v->id)}}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="right" title="Delete"><i class="fa fa-trash"></i></a>
			    </td>
			</tr>
			@endforeach
		    </tbody>
		</table>
		
	    </div><!-- titles -->
	</div><!-- tab content -->
    </div><!-- Tabs -->
@stop

@section('scripts')
<script type="text/javascript">
  $(document).ready(function () {
    var cTable = $('#empstatus').DataTable({
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
