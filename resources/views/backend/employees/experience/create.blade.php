@extends('backend.employees.includes.layouts.layout')

@section('eusi')
<div class="row">
    <div class="col-md-12">
	<div class="box box-default">
	    <div class="box-header with-border">
		<h3 class="box-title"><i class="fa fa-user"></i> Add Work Experience</h3>
	    </div>
	    {!! Form::model(new App\Empwork, ['route' => ['admin.employee.list.experience.store', $employee->id], 'class' => 'form-horizontal']) !!}
		@include('backend/employees/experience/partials/_form', ['submit_text' => 'Save'])
	    {!! Form::close() !!}
	</div>
    </div>
</div><!-- -->
@stop
