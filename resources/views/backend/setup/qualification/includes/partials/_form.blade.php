<div class="box-body">
    <div class="form-group">
	<label class="col-sm-2 control-label">Name</label>
	<div class="col-sm-10">
	    {!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">Description</label>
	<div class="col-sm-10">
	    {!! Form::textarea('description', null, ['size' => '30x5', 'class' => 'form-control']) !!}
	</div>
    </div><!--form control-->
</div>

<div class="box-footer">
    <div class="pull-left">
	<a href="{{route('admin.setup.qualification.skills.index')}}" class="btn btn-danger">Cancel</a> {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!} 
    </div>
</div>
