<div class="box-body">
    <div class="form-group">
	<label class="col-sm-2 control-label">Language</label>
	<div class="col-sm-3">
	    {!! Form::select('language_id', $lang, null, ['class' => 'form-control select2', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">Reading</label>
	<div class="col-sm-3">
	    {!! Form::select('reading', ['' => 'Select', 'Elementary Proficiency' => 'Elementary Proficiency', 'Limited Working Proficiency' => 'Limited Working Proficiency', 'Professional Working Proficiency' => 'Professional Working Proficiency', 'Full Professional Proficiency' => 'Full Professional Proficiency', 'Native or Bilingual Proficiency' => 'Native or Bilingual Proficiency'], null, ['class' => 'form-control select2', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">Speaking</label>
	<div class="col-sm-3">
	    {!! Form::select('speaking', ['' => 'Select', 'Elementary Proficiency' => 'Elementary Proficiency', 'Limited Working Proficiency' => 'Limited Working Proficiency', 'Professional Working Proficiency' => 'Professional Working Proficiency', 'Full Professional Proficiency' => 'Full Professional Proficiency', 'Native or Bilingual Proficiency' => 'Native or Bilingual Proficiency'], null, ['class' => 'form-control select2', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">Writing</label>
	<div class="col-sm-3">
	    {!! Form::select('writing', ['' => 'Select', 'Elementary Proficiency' => 'Elementary Proficiency', 'Limited Working Proficiency' => 'Limited Working Proficiency', 'Professional Working Proficiency' => 'Professional Working Proficiency', 'Full Professional Proficiency' => 'Full Professional Proficiency', 'Native or Bilingual Proficiency' => 'Native or Bilingual Proficiency'], null, ['class' => 'form-control select2', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
    <div class="form-group">
	<label class="col-sm-2 control-label">Understanding</label>
	<div class="col-sm-3">
	    {!! Form::select('understanding', ['' => 'Select', 'Elementary Proficiency' => 'Elementary Proficiency', 'Limited Working Proficiency' => 'Limited Working Proficiency', 'Professional Working Proficiency' => 'Professional Working Proficiency', 'Full Professional Proficiency' => 'Full Professional Proficiency', 'Native or Bilingual Proficiency' => 'Native or Bilingual Proficiency'], null, ['class' => 'form-control select2', 'required' => 'required']) !!}
	</div>
    </div><!--form control-->
</div>

<div class="box-footer">
    <div class="pull-left">
	<a href="{{route('admin.employee.list.econtacts.index', $employee->id)}}" class="btn btn-danger">Cancel</a> {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!} 
    </div>
</div>
