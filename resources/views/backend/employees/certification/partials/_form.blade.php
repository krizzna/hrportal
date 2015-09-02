<div class="box-body">
    <div class="form-group">
	<label class="col-sm-2 control-label">Certification</label>
	<div class="col-sm-4">
	    {!! Form::select('certification_id', $certs, null, ['class' => 'form-control select2', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">Institute</label>
	<div class="col-sm-4">
	    {!! Form::text('institute', null, ['class' => 'form-control', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">Granted On</label>
	<div class="col-sm-3">
	    <div class="input-group">
		{!! Form::text('date_start', null, ['class' => 'form-control datepicker', 'id' => 'bday', 'required' => 'required']) !!}
		<div class="input-group-addon">
		    <i class="fa fa-calendar"></i>
		</div>
	    </div>
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">Valid Thru</label>
	<div class="col-sm-3">
	    <div class="input-group">
		{!! Form::text('date_end', null, ['class' => 'form-control datepicker', 'id' => 'jdate', 'required' => 'required']) !!}
		<div class="input-group-addon">
		    <i class="fa fa-calendar"></i>
		</div>
	    </div>
	</div>
    </div><!--form control-->
</div>

<div class="box-footer">
    <div class="pull-left">
	<a href="{{route('admin.employee.list.econtacts.index', $employee->id)}}" class="btn btn-danger">Cancel</a> {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!} 
    </div>
</div>
