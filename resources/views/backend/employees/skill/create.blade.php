@extends('backend.employees.includes.layouts.layout')

@section('eusi')
<div class="row">
    <div class="col-md-12">
	<div class="box box-default">
	    <div class="box-header with-border">
		<h3 class="box-title"><i class="fa fa-user"></i> Add Skills</h3>
	    </div>
	    {!! Form::model(new App\Empskill, ['route' => ['admin.employee.list.skills.store', $employee->id], 'class' => 'form-horizontal']) !!}
		@include('backend/employees/skill/partials/_form', ['submit_text' => 'Save'])
	    {!! Form::close() !!}
	</div>
    </div>
</div><!-- -->
@stop
