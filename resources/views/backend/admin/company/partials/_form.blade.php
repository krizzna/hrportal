<div class="box-body">
    <div class="form-group">
	<label class="col-sm-2 control-label">Name</label>
	<div class="col-sm-10">
	    {!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">Type</label>
	<div class="col-sm-10">
	    {!! Form::select('type', ['Company' => 'Company', 'Department' => 'Department', 'Head Office' => 'Head Office', 'Other' => 'Other', 'Regional Office' => 'Regional Office', 'Sub Unit' => 'Sub Unit', 'Unit' => 'Unit'],null, ['class' => 'form-control']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">Parent Structure</label>
	<div class="col-sm-10">
	    {!! Form::select('parent', $parents, null, ['class' => 'form-control']) !!}
	</div>
    </div><!--form control-->
</div>

<div class="box-footer">
    <div class="pull-left">
	<a href="{{route('admin.company.structures.index')}}" class="btn btn-danger">Cancel</a> {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!} 
    </div>
</div>
