@extends('backend.employees.includes.layouts.layout')

@section('eusi')
<div class="row">
    <div class="col-md-12">
	<div class="box box-default">
	    <div class="box-header with-border">
		<h3 class="box-title"><i class="fa fa-user"></i> Add Education</h3>
	    </div>
	    {!! Form::model(new App\Empqualification, ['route' => ['admin.employee.list.qualification.store', $employee->id], 'class' => 'form-horizontal']) !!}
		@include('backend/employees/qualification/partials/_form', ['submit_text' => 'Save'])
	    {!! Form::close() !!}
	</div>
    </div>
</div><!-- -->
@stop
