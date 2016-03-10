<div class="row">
	<div class="col-md-6">
		<div class="box-body">
    		<div class="form-group">
				<label class="col-sm-4 control-label">Name</label>
				<div class="col-sm-8">
	   	 			{!! Form::text('name', null, ['class' => 'form-control']) !!}
				</div>
    		</div><!--form control-->
    		<div class="form-group">
				<label class="col-sm-4 control-label">Type</label>
				<div class="col-sm-8">
	    			{!! Form::select('type', ['Company' => 'Company', 'Department' => 'Department', 'Head Office' => 'Head Office', 'Other' => 'Other', 'Regional Office' => 'Regional Office', 'Sub Unit' => 'Sub Unit', 'Unit' => 'Unit'],null, ['class' => 'form-control']) !!}
				</div>
    		</div><!--form control-->
    		<div class="form-group">
				<label class="col-sm-4 control-label">Parent Structure</label>
				<div class="col-sm-8">
	    			{!! Form::select('parent', $parents, null, ['class' => 'form-control']) !!}
				</div>
    		</div><!--form control-->
		</div>

		<div class="box-footer">
    		<div class="pull-left">
				<a href="{{route('admin.setup.company.structures.index')}}" class="btn btn-danger">Cancel</a> {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!} 
    		</div>
		</div>
	</div>
</div>