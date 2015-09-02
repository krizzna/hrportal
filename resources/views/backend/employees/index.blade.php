@extends ('backend.layouts.master')

@section ('title', 'Employee Lists')

@section('page-header')
    <h1>
        Employee
        <small>Lists</small>
    </h1>
@endsection

@section ('breadcrumbs')
    <li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">{!! link_to_route('admin.employee.list.index', 'Employees') !!}</li>
@stop

@section('content')
    <div class="box box-primary">
	<div class="box-header with-border">
	    <h3 class="box-title">Employee Lists</h3>
	</div>
	<div class="box-body">
	    <div class="pull-right" style="margin-bottom:10px">
		<a href="{{route('admin.employee.list.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Add New</a>
	    </div>
	
	    <div class="clearfix"></div>
	    
	    <table id="news" class="table table-striped table-bordered">
		<thead>
		    <tr>
			<th style="width:10px">#</th>
			<th>NIK</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Department</th>
			<th>Mobile Phone</th>
			<th>Action</th>
		    </tr>
		</thead>
		<tfoot></tfoot>
		<tbody>
		    @foreach ( $employees as $v )
		    <tr>
			<td></td>
			<td>{!! $v->nik !!}</td>
			<td>{!! $v->first_name !!}</td>
			<td>{!! $v->last_name !!}</td>
			<td>{!! $v->company_structure->name !!}</td>
			<td>{!! $v->mobile_phone !!}</td>
			<td>
			    <a href="{{route('admin.employee.list.show', $v->id)}}" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="left" title="Show"><i class="fa fa-search"></i></a>
			    <a href="{{route('admin.employee.list.delete', $v->id)}}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="right" title="Delete"><i class="fa fa-trash"></i></a>
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
