<div class="box-body">
    <div class="form-group">
	<label class="col-sm-2 control-label">Name</label>
	<div class="col-sm-3">
	    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">Relationship</label>
	<div class="col-sm-3">
	    {!! Form::select('relationship', ['' => 'Select', 'Child' => 'Child', 'Spouse' => 'Spouse', 'parent' => 'Parent', 'Other' => 'Other'], null, ['class' => 'form-control select2', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">Date of Birth</label>
	<div class="col-sm-3">
	    <div class="input-group">
		{!! Form::text('dob', null, ['class' => 'form-control datepicker', 'id' => 'bday', 'required' => 'required']) !!}
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
