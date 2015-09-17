<div class="box-body">
    <div class="form-group">
	<label class="col-sm-2 control-label">Full Name</label>
	<div class="col-sm-3">
	    {!! Form::text('first_name', null, ['class' => 'form-control', 'required' => 'required', 'aria-describedby' => 'helpBlock']) !!}
	    <span id="helpBlock" class="help-block">First Name</span>
	</div>
	<div class="col-sm-3">
	    {!! Form::text('middle_name', null, ['class' => 'form-control', 'aria-describedby' => 'helpBlock']) !!}
	    <span id="helpBlock" class="help-block">Middle Name</span>
	</div>
	<div class="col-sm-3">
	    {!! Form::text('last_name', null, ['class' => 'form-control', 'required' => 'required', 'aria-describedby' => 'helpBlock']) !!}
	    <span id="helpBlock" class="help-block">Last Name</span>
	</div>
    </div> <!-- Form group -->
    <div class="form-group">
	<label class="col-sm-2 control-label">NIK</label>
	<div class="col-sm-3">
	    {!! Form::text('nik', null, ['class' => 'form-control', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">Image</label>
	<div class="col-sm-3">
	    {!! Form::file('image', null) !!}
	</div>
    </div>
    @if (Session::has("message"))
       {{ Session::get("message") }}
     @endif
</div>

<div class="box-footer">
    <div class="pull-left">
	<a href="{{route('admin.employee.list.index')}}" class="btn btn-danger">Cancel</a> {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!} 
    </div>
</div>
