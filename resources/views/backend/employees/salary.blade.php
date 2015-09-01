@extends('backend.employees.includes.layouts.layout')

@section('eusi')
<div class="row">
    <div class="col-md-12">
	<div class="box box-danger">
	    <div class="box-header with-border">
		<h3 class="box-title"><i class="fa fa-user"></i> Salary Components</h3>
	    </div>
	    <div class="box-body">
		<div class="pull-right" style="margin-bottom:10px">
		    <a href="{{route('admin.employee.list.salary.create', $employee->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Add New</a>
		</div>
		
		<div class="clearfix"></div>

		<table id="salary" class="table table-striped table-bordered">
		    <thead>
			<tr>
			    <th style="width:20px">#</th>
			    <th>Salary Component</th>
			    <th>Amount</th>
			    <th>Details</th>
			    <th>Action</th>
			</tr>
		    </thead>
		    <tbody>
			@foreach( $employee->salary as $v)
			<tr>
			    <td></td>
			    <td>{!! $v->component !!}</td>
			    <td>{!! number_format($v->amount, 2, ',', '.') !!}</td>
			    <td>{!! $v->details !!}</td>
			    <td>
				<a href="{{route('admin.employee.list.salary.edit', [$employee->id, $v->id])}}" class="btn btn-xs btn-info" data-toggle="tooltip" data-placement="left" title="Edit"><i class="fa fa-pencil"></i></a>
				<a href="{{route('admin.employee.list.salary.delete', [$employee->id, $v->id])}}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="right" title="Delete"><i class="fa fa-trash"></i></a>
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
    var cTable = $('#salary').DataTable({
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
