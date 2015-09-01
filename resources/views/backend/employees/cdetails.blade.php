@extends('backend.employees.includes.layouts.layout')

@section('eusi')
<div class="row">
    <div class="col-md-12">
	{!! Form::model($employee, ['method' => 'patch', 'route' => ['admin.employee.list.update', $employee->id], 'class' => 'form-horizontal']) !!}
	    <div class="box box-default">
		<div class="box-header with-border">
		    <h3 class="box-title"><i class="fa fa-user"></i> Contact Details</h3>
		</div><!-- box-header -->
		<div class="box-body">
		    <div class="form-group">
			<label class="col-sm-2 control-label">Addres Street 1</label>
			<div class="col-sm-6">
			    {!! Form::textarea('address1', null, ['size' => '30x2', 'class' => 'form-control', 'disabled' => 'true']) !!}
			</div>
		    </div><!-- -->
		    <div class="form-group">
			<label class="col-sm-2 control-label">Addres Street 2</label>
			<div class="col-sm-6">
			    {!! Form::textarea('address2', null, ['size' => '30x2', 'class' => 'form-control', 'disabled' => 'true']) !!}
			</div>
		    </div><!-- -->
		    <div class="form-group">
			<label class="col-sm-2 control-label">Provinsi</label>
			<div class="col-sm-3">
			    {!! Form::select('provinsi', $prov, null, ['class' => 'form-control select2', 'id' => 'prov', 'disabled' => 'true']) !!}
			</div>
		    </div><!-- -->
		    <div class="form-group">
			<label class="col-sm-2 control-label">Kabupaten / Kota</label>
			<div class="col-sm-3">
			    {!! Form::select('kabupaten', $kab, null, ['class' => 'form-control select2', 'id' => 'kab', 'disabled' => 'true']) !!}
			</div>
		    </div><!-- -->
		    <div class="form-group">
			<label class="col-sm-2 control-label">Kecamatan</label>
			<div class="col-sm-3">
			    {!! Form::select('kecamatan', $kec, null, ['class' => 'form-control select2', 'id' => 'kec', 'disabled' => 'true']) !!}
			</div>
		    </div><!-- -->
		    <div class="form-group">
			<label class="col-sm-2 control-label">Kelurahan</label>
			<div class="col-sm-3">
			    {!! Form::select('kelurahan', $kel, null, ['class' => 'form-control select2', 'id' => 'kel', 'disabled' => 'true']) !!}
			</div>
		    </div><!-- -->
		    <div class="form-group">
			<label class="col-sm-2 control-label">Zip/Postal Code</label>
			<div class="col-sm-2">
			    {!! Form::text('postal_code', null, ['class' => 'form-control', 'disabled' => 'true']) !!}
			</div>
		    </div><!-- -->
		    <hr />
		    <div class="form-group">
			<label class="col-sm-2 control-label">Home Phone</label>
			<div class="col-sm-3">
			    {!! Form::text('home_phone', null, ['class' => 'form-control', 'id' => 'hphone', "data-inputmask" => '"mask": "(9999) 9999-9999"', 'datamask' => '', 'disabled' => 'true']) !!}
			</div>
		    </div><!-- -->
		    <div class="form-group">
			<label class="col-sm-2 control-label">Mobile Phone</label>
			<div class="col-sm-3">
			    {!! Form::text('mobile_phone', null, ['class' => 'form-control', 'id' => 'mphone', "data-inputmask" => '"mask": "9999-9999-9999"', 'datamask' => '', 'disabled' => 'true']) !!}
			</div>
		    </div><!-- -->
		    <hr / >
		    <div class="form-group">
			<label class="col-sm-2 control-label">Private Email</label>
			<div class="col-sm-3">
			    {!! Form::email('private_email', null, ['class' => 'form-control', 'disabled' => 'true']) !!}
			</div>
		    </div><!-- -->
		    <div class="form-group">
			<label class="col-sm-2 control-label">Work Email</label>
			<div class="col-sm-3">
			    {!! Form::email('work_email', null, ['class' => 'form-control', 'disabled' => 'true']) !!}
			</div>
		    </div><!-- -->
		</div><!-- box-body -->
		<div class="box-footer">
		    <a href="#" id="btnSave" class="btn btn-primary" role="button"><i class="fa fa-pencil-square-o"></i> Edit</a>
		</div><!-- box-footer -->
	    </div><!-- box -->
	{!! Form::close() !!}
    </div>
</div><!-- -->
@stop

@section('scripts')
<script type="text/javascript">
$(document).ready(function($){
    
});
</script>
@stop
