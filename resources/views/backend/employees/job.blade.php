@extends('backend.employees.includes.layouts.layout')

@section('eusi')
<div class="row">
    <div class="col-md-12">
	{!! Form::model($employee, ['method' => 'patch', 'route' => ['admin.employee.list.update', $employee->id], 'class' => 'form-horizontal']) !!}
	    <div class="box box-info">
		<div class="box-header with-border">
		    <h3 class="box-title"><i class="fa fa-user"></i> Job</h3>
		</div><!-- box-header -->
		<div class="box-body">
		    <div class="form-group">
			<label class="col-md-2 control-label">Job Title</label>
			<div class="col-md-3">
			    {!! Form::select('job_title', $jobs, null, ['class' => 'form-control select2', 'disabled' => 'true']) !!}
			</div>
		    </div><!-- -->
		    <div class="form-group">
			<label class="col-md-2 control-label">Job Description</label>
			<div class="col-md-4">
			    {!! Form::textarea(null, null, ['size' => '30x4', 'class' => 'form-control', 'disabled' => 'true']) !!}
			</div>
		    </div><!-- -->
		    <div class="form-group">
			<label class="col-md-2 control-label">Employement Status</label>
			<div class="col-md-3">
			    {!! Form::select('employment_status', $emps, null, ['class' => 'form-control select2', 'disabled' => 'disabled']) !!}
			</div>
		    </div><!-- -->
		    <div class="form-group">
			<label class="col-md-2 control-label">Department</label>
			<div class="col-md-3">
			    {!! Form::select('company_structure_id', $dept, null, ['class' => 'form-control select2','disabled' => 'true']) !!}
			</div>
		    </div><!-- -->
		    <div class="form-group">
			<label class="col-md-2 control-label">Supervisor</label>
			<div class="col-md-3">
			    {!! Form::text('supervisor', null, ['class' => 'form-control', 'disabled' => 'true']) !!}
			</div>
		    </div><!-- -->
		    <div class="form-group">
			<label class="col-md-2 control-label">Join Date</label>
			<div class="col-md-3">
			    <div class="input-group">
				{!! Form::text('joined_date', null, ['class' => 'form-control datepicker', 'id' => 'edate', 'disabled' => 'true']) !!}
				<div class="input-group-addon">
				    <i class="fa fa-calendar"></i>
				</div>
			    </div>
			</div>
		    </div><!-- -->
		</div><!-- box-body -->
		<div class="box-footer">
		    <a href="#" id="btnEdit" class="btn btn-primary" role="button"><i class="fa fa-pencil-square-o"></i> Edit</a>
		    {!! Form::submit('Save', ['id' => 'btnSave', 'class'=>'btn btn-primary hidden']) !!}
		</div><!-- box-footer -->
	    </div><!-- box -->
	{!! Form::close() !!}
	
	{!! Form::model($contracts, ['method' => 'patch', 'route' => ['admin.employee.list.update', $contracts->id], 'class' => 'form-horizontal']) !!}
	    <div class="box box-success">
		<div class="box-header with-border">
		    <h3 class="box-title"><i class=" fa fa-file"></i> Employement Contract</h3>
		</div><!-- box-header -->
		<div class="box-body">
		    <div class="form-group">
			<label class="col-md-2 control-label">Start Date</label>
			<div class="col-md-3">
			    <div class="input-group">
				{!! Form::text('start_date', null, ['class' => 'form-control datepicker', 'id' => 'jdate', 'disabled' => 'true']) !!}
				<div class="input-group-addon">
				    <i class="fa fa-calendar"></i>
				</div>
			    </div>
			</div>
		    </div><!-- -->
		    <div class="form-group">
			<label class="col-md-2 control-label">End Date</label>
			<div class="col-md-3">
			    <div class="input-group">
				{!! Form::text('end_date', null, ['class' => 'form-control datepicker', 'id' => 'cdate', 'disabled' => 'true']) !!}
				<div class="input-group-addon">
				    <i class="fa fa-calendar"></i>
				</div>
			    </div>
			</div>
		    </div><!-- -->
		</div><!-- box-body -->
		<div class="box-footer">
		    <a href="#" id="btnEdit" class="btn btn-primary" role="button"><i class="fa fa-pencil-square-o"></i> Edit</a>
		    {!! Form::submit('Save', ['id' => 'btnSave', 'class'=>'btn btn-primary hidden']) !!}
		    <a href="#" id="btnTerminate" class="btn btn-danger" role="button"><i class="fa fa-warning"></i> Terminate Employement</a>
		</div><!-- box-footer -->
	    </div>
	{!! Form::close() !!}
    </div>
</div><!-- -->
@stop

@section('scripts')
<script type="text/javascript">
$(document).ready(function($){
    $('#btnEdit').click(function() {
	$('input, select').prop('disabled', false);

	$('#btnEdit').addClass('hidden');
	$('#btnSave').removeClass('hidden');
    });

    $('btnSave').click(function($){
	$('input, select').prop('disabled', true);

	$('#btnEdit').removeClass('hidden');
	$('#btnSave').addClass('hidden');
    });
});
</script>
@stop
