<div class="box-body">
    <div class="form-group">
	<label class="col-sm-2 control-label">Skill</label>
	<div class="col-sm-4">
	    {!! Form::select('skill_id', $skills, null, ['class' => 'form-control select2', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">Details</label>
	<div class="col-sm-4">
	    {!! Form::textarea('details', null, ['size' => '30x5', 'class' => 'form-control']) !!}
	</div>
    </div><!--form control-->
</div>

<div class="box-footer">
    <div class="pull-left">
	<a href="{{route('admin.employee.list.skills.index', $employee->id)}}" class="btn btn-danger">Cancel</a> {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!} 
    </div>
</div>
