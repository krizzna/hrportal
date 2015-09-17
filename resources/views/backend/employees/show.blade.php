@extends('backend.employees.includes.layouts.layout')

@section('eusi')
<div class="row">
    <div class="col-md-12">
	{!! Form::model($employee, ['method' => 'patch', 'route' => ['admin.employee.list.update', $employee->id], 'class' => 'form-horizontal']) !!}
	<div class="box box-warning">
	    <div class="box-header with-border">
		<h3 class="box-title"><i class="fa fa-user"></i> Personal Information</h3>
	    </div><!-- box-header -->
	    <div class="box-body">
		<div class="row">
		    <div class="col-md-12">
			<div class="form-group">
			    <label class="col-sm-2 control-label">Full Name</label>
			    <div class="col-sm-3">
				{!! Form::text('first_name', null, ['class' => 'form-control', 'required' => 'required', 'aria-describedby' => 'helpBlock', 'disabled' => 'true']) !!}
				<span id="helpBlock" class="help-block">First Name</span>
			    </div>
			    <div class="col-sm-3">
				{!! Form::text('middle_name', null, ['class' => 'form-control', 'aria-describedby' => 'helpBlock', 'disabled' => 'true']) !!}
				<span id="helpBlock" class="help-block">Middle Name</span>
			    </div>
			    <div class="col-sm-3">
				{!! Form::text('last_name', null, ['class' => 'form-control', 'required' => 'required', 'aria-describedby' => 'helpBlock', 'disabled' => 'true']) !!}
				<span id="helpBlock" class="help-block">Last Name</span>
			    </div>
			</div> <!-- Form group -->
			<hr />
			<div class="form-group">
			    <label class="col-sm-2 control-label">NIK</label>
			    <div class="col-sm-3">
				 {!! Form::text('nik', null, ['class' => 'form-control', 'required' => 'required', 'disabled' => 'true']) !!}
			    </div>
			</div> <!-- -->
			<div class="form-group">
			    <label class="col-sm-2 control-label">KTP</label>
			    <div class="col-sm-3">
				{!! Form::text('ktp', null, ['class' => 'form-control', 'required' => 'required', 'disabled' => 'true']) !!}
			    </div>
			    <label class="col-sm-2 control-label">NPWP</label>
			    <div class="col-sm-3">
				{!! Form::text('npwp', null, ['class' => 'form-control', 'disabled' => 'true']) !!}
			    </div>
			</div><!-- -->
			<div class="form-group">
			    <label class="col-sm-2 control-label">SIM</label>
			    <div class="col-sm-3">
				{!! Form::text('sim', null, ['class' => 'form-control', 'disabled' => 'true']) !!}
			    </div>
			    <label class="col-sm-2 control-label">SIM Expiry Date:</label>
			    <div class="col-sm-3">
				<div class="input-group">
				    {!! Form::text('exp_date', null, ['class' => 'form-control datepicker', 'id' => 'edate', 'disabled' => 'true']) !!}
				    <div class="input-group-addon">
					<i class="fa fa-calendar"></i>
				    </div>
				</div>
			    </div>
			</div>
			<div class="form-group">
			    <label class="col-sm-2 control-label">Other ID</label>
			    <div class="col-sm-3">
				{!! Form::text('other_id', null, ['class' => 'form-control', 'disabled' => 'true']) !!}
			    </div>
			</div><!-- -->
			<hr />
			<div class="form-group">
			    <label class="col-sm-2 control-label">Gender</label>
			    <div class="col-sm-3">
				{!! Form::select('gender', ['' => 'Select', 'Male' => 'Male', 'Female' => 'Female'], null, ['class' => 'form-control select2', 'required' => 'required', 'disabled' => 'true']) !!}
			    </div>
			    <label class="col-sm-2 control-label">Marital Status</label>
			    <div class="col-sm-3">
				{!! Form::select('marital_status', ['' => 'Select', 'Single' => 'Single', 'Married' => 'Married', 'Divorced' => 'Divorced', 'Widowed' => 'Widowed', 'Other' => 'Other'], null, ['class' => 'form-control select2', 'required' => 'required', 'disabled' => 'true']) !!}
			    </div>
			</div><!-- -->
			<div class="form-group">
			    <label class="col-sm-2 control-label">Nationality</label>
			    <div class="col-sm-3">
				{!! Form::select('nationality_id', $nat, null, ['class' => 'form-control select2', 'required' => 'required', 'disabled' => 'true']) !!}
			    </div>
			    <label class="col-sm-2 control-label">Date of Birth</label>
			    <div class="col-sm-3">
				<div class="input-group">
				    {!! Form::text('birthday', null, ['class' => 'form-control datepicker', 'id' => 'bday', 'required' => 'required', 'disabled' => 'true']) !!}
				    <div class="input-group-addon">
					<i class="fa fa-calendar"></i>
				    </div>
				</div>
			    </div>
			</div><!-- -->
		    </div>
		</div>
	    </div><!-- box-body -->
	    <div class="box-footer">
		<a href="#" id="btnEdit" class="btn btn-primary" role="button">Edit</a> {!! Form::submit('Save', ['id' => 'btnSave', 'class'=>'btn btn-primary hidden']) !!}
	    </div>
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
