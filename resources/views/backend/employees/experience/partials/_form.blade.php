<div class="box-body">
    <div class="form-group">
	<label class="col-sm-2 control-label">Company</label>
	<div class="col-sm-3">
	    {!! Form::text('company', null, ['class' => 'form-control', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">Job Title</label>
	<div class="col-sm-3">
	    {!! Form::text('job_title', null, ['class' => 'form-control', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">From</label>
	<div class="col-sm-3">
	    <div class="input-group">
		{!! Form::text('from_date', null, ['class' => 'form-control datepicker', 'id' => 'bday', 'required' => 'required']) !!}
		<div class="input-group-addon">
		    <i class="fa fa-calendar"></i>
		</div>
	    </div>
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">To</label>
	<div class="col-sm-3">
	    <div class="input-group">
		{!! Form::text('to_date', null, ['class' => 'form-control datepicker', 'id' => 'jdate', 'required' => 'required']) !!}
		<div class="input-group-addon">
		    <i class="fa fa-calendar"></i>
		</div>
	    </div>
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">Comment</label>
	<div class="col-sm-3">
	    {!! Form::textarea('comment', null, ['size' => '30x5', 'class' => 'form-control']) !!}
	</div>
    </div>
</div>

<div class="box-footer">
    <div class="pull-left">
	<a href="{{route('admin.employee.list.experience.index', $employee->id)}}" class="btn btn-danger">Cancel</a> {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!} 
    </div>
</div>
