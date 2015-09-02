@extends('backend.employees.includes.layouts.layout')

@section('eusi')
<div class="row">
    <div class="col-md-12">
	<div class="nav-tabs-custom">
	    <ul class="nav nav-tabs">
		<li><a href="{!! route('admin.employee.list.qualification.index', $employee->id) !!}">Educations</a></li>
		<li><a href="{!! route('admin.employee.list.experience.index', $employee->id) !!}">Work Experience</a></li>
		<li><a href="{!! route('admin.employee.list.skills.index', $employee->id) !!}">Skills</a></li>
		<li><a href="{!! route('admin.employee.list.certification.index', $employee->id) !!}">Certifications</a></li>
		<li class="active"><a href="{!! route('admin.employee.list.languages.index', $employee->id) !!}">Languages</a></li>
	    </ul>
	    <div class="tab-content">
		<div class="tab-pane active" id="titles">
		    <div class="pull-right" style="margin-bottom:10px">
			<a href="{{route('admin.employee.list.languages.create', $employee->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Add New</a>
		    </div>
		    
		    <div class="clearfix"></div>
    
		    <table id="cert" class="table table-bordered table-striped">
			<thead>
			    <tr>
				<th style="width:10px">#</th>
				<th>Language</th>
				<th>Reading</th>
				<th>Speaking</th>
				<th>Writing</th>
				<th>Understanding</th>
				<th>Action</th>
			    </tr>
			</thead>
			<tfoot></tfoot>
			<tbody>
			    @foreach( $employee->languages as $v )
			    <tr>
				<td></td>
				<td>{!! $v->language->name !!}</td>
				<td>{!! $v->reading !!}</td>
				<td>{!! $v->speaking !!}</td>
				<td>{!! $v->writing !!}</td>
				<td>{!! $v->understanding !!}</td>
				<td>
				    <a href="{{route('admin.employee.list.languages.edit', [$employee->id, $v->id])}}" class="btn btn-xs btn-info" data-toggle="tooltip" data-placement="left" title="Edit"><i class="fa fa-pencil"></i></a>
				    <a href="{{route('admin.employee.list.languages.delete', [$employee->id, $v->id])}}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="right" title="Delete"><i class="fa fa-trash"></i></a>
				</td>
			    </tr>
			    @endforeach
			</tbody>
		    </table>
		    
		</div><!-- titles -->
	    </div><!-- tab content -->
	</div><!-- Tabs -->
    </div>
</div><!-- -->
@stop

@section('scripts')
<script type="text/javascript">
$(document).ready(function($){
    var cTable = $('#cert').DataTable({
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
