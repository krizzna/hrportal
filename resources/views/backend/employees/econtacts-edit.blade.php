@extends('backend.employees.includes.layouts.layout')

@section('eusi')
<div class="row">
    <div class="col-md-12">
	<div class="box box-default">
	    <div class="box-header with-border">
		<h3 class="box-title"><i class="fa fa-user"></i> Add Emergency Contacts</h3>
	    </div>
	    {!! Form::model($econtacts, ['method' => 'patch', 'route' => ['admin.employee.list.econtacts.update', $employee->id, $econtacts->id], 'class' => 'form-horizontal']) !!}
		@include('backend/employees/includes/partials/_form-econtacts', ['submit_text' => 'Save'])
	    {!! Form::close() !!}
	</div>
    </div>
</div><!-- -->
@stop
