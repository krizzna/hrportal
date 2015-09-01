<div class="box-body">
    <div class="form-group">
	<label class="col-sm-2 control-label">Salary Component</label>
	<div class="col-sm-3">
	    {!! Form::text('component', null, ['class' => 'form-control', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">Amount</label>
	<div class="col-sm-3">
	    <div class="input-group">
		<div class="input-group-addon">
		    Rp
		</div>
		{!! Form::text('amount', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    </div>
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">Details</label>
	<div class="col-sm-3">
	    {!! Form::text('details', null, ['class' => 'form-control', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
</div>

<div class="box-footer">
    <div class="pull-left">
	<a href="{{route('admin.employee.list.econtacts.index', $employee->id)}}" class="btn btn-danger">Cancel</a> {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!} 
    </div>
</div>
