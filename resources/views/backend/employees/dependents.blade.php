@extends('backend.employees.includes.layouts.layout')

@section('eusi')
<div class="row">
    <div class="col-md-12">
	<div class="box box-warning">
	    <div class="box-header with-border">
		<h3 class="box-title"><i class="fa fa-user"></i> Dependents</h3>
	    </div>
	    <div class="box-body">
		<div class="pull-right" style="margin-bottom:10px">
		    <a href="{{route('admin.employee.list.dependents.create', $employee->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Add New</a>
		</div>
		
		<div class="clearfix"></div>

		<table id="dependents" class=" table table-striped table-bordered">
		    <thead>
			<tr>
			    <th style="width:20px">#</th>
			    <th>Name</th>
			    <th>Relationship</th>
			    <th>Date of Birth</th>
			    <th>Action</th>
			</tr>
		    </thead>
		    <tbody>
			@foreach ( $employee->dependents as $k )
			<tr>
			    <td style="width:10px"></td>
			    <td>{!! $k->name !!}</td>
			    <td>{!! $k->relationship !!}</td>
			    <td>{!! $k->dob !!}</td>
			    <td>
				<a href="{{route('admin.employee.list.dependents.edit', [$employee->id, $k->id])}}" class="btn btn-xs btn-info" data-toggle="tooltip" data-placement="left" title="Edit"><i class="fa fa-pencil"></i></a>
				<a href="{{route('admin.employee.list.dependents.delete', [$employee->id, $k->id])}}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="right" title="Delete"><i class="fa fa-trash"></i></a>
			    </td>
			</tr>
			@endforeach
		    </tbody>
		</table>
	    </div>
	</div>
    </div>
</div><!-- -->
@stop

@section('scripts')
<script type="text/javascript">
$(document).ready(function($){
    var cTable = $('#dependents').DataTable({
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
