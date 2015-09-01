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
	    {!! Form::text('relationship', null, ['class' => 'form-control', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">Home Phone</label>
	<div class="col-sm-3">
	    {!! Form::text('home_phone', null, ['class' => 'form-control']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">Mobile Phone</label>
	<div class="col-sm-3">
	    {!! Form::text('mobile_phone', null, ['class' => 'form-control', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">Work Phone</label>
	<div class="col-sm-3">
	    {!! Form::text('work_phone', null, ['class' => 'form-control', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">Email</label>
	<div class="col-sm-3">
	    {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
</div>

<div class="box-footer">
    <div class="pull-left">
	<a href="{{route('admin.employee.list.econtacts.index', $employee->id)}}" class="btn btn-danger">Cancel</a> {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!} 
    </div>
</div>
