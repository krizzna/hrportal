<div class="row">
	<div class="col-md-6">
		<div class="box-body">
    <div class="form-group">
	<label class="col-sm-3 control-label">Name</label>
	<div class="col-sm-9">
	    {!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Min Salary</label>
	<div class="col-sm-9">
	    <div class="input-group">
		<span class="input-group-addon">Rp</span>
		{!! Form::text('min_salary', null, ['class' => 'form-control']) !!}
	    </div>
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Max Salary</label>
	<div class="col-sm-9">
	    <div class="input-group">
		<span class="input-group-addon">Rp</span>
		{!! Form::text('max_salary', null, ['class' => 'form-control']) !!}
	    </div>
	</div>
    </div><!--form control-->
</div>

<div class="box-footer">
    <div class="pull-left">
	<a href="{{route('admin.setup.job.paygrades.index')}}" class="btn btn-danger">Cancel</a> {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!} 
    </div>
</div>

	</div>
</div>