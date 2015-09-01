<div class="box-body">
    <div class="form-group">
	<label class="col-sm-3 control-label">NIK</label>
	<div class="col-sm-9">
	    {!! Form::text('nik', null, ['class' => 'form-control', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">First Name</label>
	<div class="col-sm-9">
	    {!! Form::text('first_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Middle Name</label>
	<div class="col-sm-9">
	    {!! Form::text('middle_name', null, ['class' => 'form-control']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Last Name</label>
	<div class="col-sm-9">
	    {!! Form::text('last_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Nationality</label>
	<div class="col-sm-9">
	    {!! Form::select('nationality_id', $nat, null, ['class' => 'form-control select2', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Birthday</label>
	<div class="col-sm-9">
	    <div class="input-group">
		<div class="input-group-addon">
		    <i class="fa fa-calendar"></i>
		</div>
		{!! Form::text('birthday', null, ['class' => 'form-control datepicker', 'id' => 'bday', 'required' => 'required']) !!}
	    </div>
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Gender</label>
	<div class="col-sm-9">
	    {!! Form::select('gender', ['' => 'Select', 'Male' => 'Male', 'Female' => 'Female'], null, ['class' => 'form-control select2', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Marital Status</label>
	<div class="col-sm-9">
	    {!! Form::select('marital_status', ['' => 'Select', 'Single' => 'Single', 'Married' => 'Married', 'Divorced' => 'Divorced', 'Widowed' => 'Widowed', 'Other' => 'Other'], null, ['class' => 'form-control select2', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">KTP</label>
	<div class="col-sm-9">
	    {!! Form::text('ktp', null, ['class' => 'form-control', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">SIM</label>
	<div class="col-sm-9">
	    {!! Form::text('sim', null, ['class' => 'form-control']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">NPWP</label>
	<div class="col-sm-9">
	    {!! Form::text('npwp', null, ['class' => 'form-control', 'id' => 'mask', "data-inputmask" => '"mask": "99.999.999.9-999.999"', 'datamask' => '']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Other ID</label>
	<div class="col-sm-9">
	    {!! Form::text('other_id', null, ['class' => 'form-control']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Employement Status</label>
	<div class="col-sm-9">
	    {!! Form::select('employment_status', $emps, null, ['class' => 'form-control select2']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Job Title</label>
	<div class="col-sm-9">
	    {!! Form::select('job_title', $jobs, null, ['class' => 'form-control select2']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Pay Grade</label>
	<div class="col-sm-9">
	    {!! Form::select('pay_grade', $pay, null, ['class' => 'form-control select2']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Address 1</label>
	<div class="col-sm-9">
	    {!! Form::textarea('address1', null, ['size' => '30x2', 'class' => 'form-control']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Address 2</label>
	<div class="col-sm-9">
	    {!! Form::textarea('address2', null, ['size' => '30x2', 'class' => 'form-control']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Provinsi</label>
	<div class="col-sm-9">
	    {!! Form::select('provinsi', $prov, null, ['class' => 'form-control select2', 'id' => 'prov']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Kabupaten</label>
	<div class="col-sm-9">
	    <select  name="kabupaten_id" class="form-control select2" id="kab" >
		<option>Select provinsi first</option>
	    </select>
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Kecamatan</label>
	<div class="col-sm-9">
	    <select  name="kecamatan_id" class="form-control select2" id="kec" >
		<option>Select kabupaten first</option>
	    </select>
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Kelurahan</label>
	<div class="col-sm-9">
	    <select  name="kelurahan_id" class="form-control select2" id="kel" >
		<option>Select kecamatan first</option>
	    </select>
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Postal Code</label>
	<div class="col-sm-9">
	    {!! Form::text('postal_code', null, ['class' => 'form-control']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Home Phone</label>
	<div class="col-sm-9">
	    <div class="input-group">
		<div class="input-group-addon">
		    <i class="fa fa-phone"></i>
		</div>
		{!! Form::text('home_phone', null, ['class' => 'form-control', 'id' => 'hphone', "data-inputmask" => '"mask": "(9999) 9999-9999"', 'datamask' => '']) !!}
	    </div>
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Mobile Phone</label>
	<div class="col-sm-9">
	    <div class="input-group">
		<div class="input-group-addon">
		    <i class="fa fa-mobile-phone"></i>
		</div>
		{!! Form::text('mobile_phone', null, ['class' => 'form-control', 'id' => 'mphone', "data-inputmask" => '"mask": "9999-9999-9999"', 'datamask' => '']) !!}
	    </div>
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Private Email</label>
	<div class="col-sm-9">
	    <div class="input-group">
		<div class="input-group-addon">
		    <i class="fa fa-inbox"></i>
		</div>
		{!! Form::email('private_email', null, ['class' => 'form-control']) !!}
	    </div>
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Work Email</label>
	<div class="col-sm-9">
	    <div class="input-group">
		<div class="input-group-addon">
		    <i class="fa fa-inbox"></i>
		</div>
		{!! Form::email('work_email', null, ['class' => 'form-control']) !!}
	    </div>
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Join Date</label>
	<div class="col-sm-9">
	    <div class="input-group">
		<div class="input-group-addon">
		    <i class="fa fa-calendar"></i>
		</div>
		{!! Form::text('joined_date', null, ['class' => 'form-control datepicker', 'id' => 'jdate']) !!}
	    </div>
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Confirmation Date</label>
	<div class="col-sm-9">
	    <div class="input-group">
		<div class="input-group-addon">
		    <i class="fa fa-calendar"></i>
		</div>
		{!! Form::text('confirmed_date', null, ['class' => 'form-control datepicker', 'id' => 'cdate']) !!}
	    </div>
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Department</label>
	<div class="col-sm-9">
	    {!! Form::select('company_structure_id', $dept, null, ['class' => 'form-control select2']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Supervisor</label>
	<div class="col-sm-9">
	    {!! Form::text('supervisor', null, ['class' => 'form-control']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-3 control-label">Image</label>
	<div class="col-sm-9">
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
