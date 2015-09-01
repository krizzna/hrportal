@extends('backend.employees.includes.layouts.layout')

@section('eusi')
<div class="row">
    <div class="col-md-12">
	<div class="box box-default">
	    <div class="box-header with-border">
		<h3 class="box-title"><i class="fa fa-user"></i> Emergency Contacts</h3>
	    </div>
	    <div class="box-body">
		<div class="pull-right" style="margin-bottom:10px">
		    <a href="{{route('admin.employee.list.econtacts.create', $employee->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Add New</a>
		</div>
		
		<div class="clearfix"></div>
		
		<table id="econtacts" class="table table-striped table-bordered">
		    <thead>
			<tr>
			    <th>#</th>
			    <th>Name</th>
			    <th>Relationship</th>
			    <th>Home Phone</th>
			    <th>Mobile Phone</th>
			    <th>Email</th>
			    <th>Action</th>
			</tr>
		    </thead>
		    <tbody>
			@foreach( $employee->emergency_contacts as $econtact )
			 <tr>
			     <td></td>
			     <td>{!! $econtact->name !!}</td>
			     <td>{!! $econtact->relationship !!}</td>
			     <td>{!! $econtact->home_phone !!}</td>
			     <td>{!! $econtact->mobile_phone !!}</td>
			     <td>{!! $econtact->email !!}</td>
			     <td>
				 <a href="{{route('admin.employee.list.econtacts.edit', [$employee->id, $econtact->id])}}" class="btn btn-xs btn-info" data-toggle="tooltip" data-placement="left" title="Edit"><i class="fa fa-pencil"></i></a>
				<a href="{{route('admin.employee.list.econtacts.delete', [$employee->id, $econtact->id])}}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="right" title="Delete"><i class="fa fa-trash"></i></a>
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
    var cTable = $('#econtacts').DataTable({
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
