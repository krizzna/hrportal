@extends ('backend.layouts.master')

@section ('title', 'Employee Lists')

@section('page-header')
    <h1>
        Employee Details
        <small>{!! $employee->first_name .' '. $employee->last_name!!}</small>
    </h1>
@endsection

@section ('breadcrumbs')
    <li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li>{!! link_to_route('admin.employee.list.index', 'Employees') !!}</li>
    <li class="active">Employee</li>
@stop

@section('content')
    <!-- Personal Information -->
    <div class="row">
	<div class="col-md-2">
	    <div class="row">
		<div class="col-md-12">
		    <div class="box box-default">
			<div class="box-header with-border">
			    <h3 class="box-title">{!! $employee->first_name .' '. $employee->last_name!!}</h3>
			</div>
			<div class="box-body">
			    <div class="thumbnail">
				<img src='{!! asset($employee->image) !!}'>
			    </div>
			</div>
		    </div>
		</div>
	    </div>
	    <div class="row">
		<div class="col-md-12">
		    <div style="margin-bottom:20px">
			<a href="{!! route('admin.employee.list.show', $employee->id) !!}" class="btn btn-info btn-block btn-flat" role="button">Personal Details</a>
			<a href="{!! route('admin.employee.list.cdetails', $employee->id) !!}" class="btn btn-info btn-block btn-flat" role="button">Contact Details</a>
			<a href="{!! route('admin.employee.list.econtacts.index', $employee->id) !!}" class="btn btn-info btn-block btn-flat" role="button">Emergency Contacts</a>
			<a href="{!! route('admin.employee.list.dependents.index', $employee->id) !!}" class="btn btn-info btn-block btn-flat" role="button">Dependents</a>
			<a href="{!! route('admin.employee.list.job', $employee->id) !!}" class="btn btn-info btn-block btn-flat" role="button">Job</a>
			<a href="{!! route('admin.employee.list.salary.index', $employee->id) !!}" class="btn btn-info btn-block btn-flat" role="button">Salary</a>
			<a href="{!! route('admin.employee.list.qualification.index', $employee->id) !!}" class="btn btn-info btn-block btn-flat" role="button">Qualifications</a>
		    </div>
		</div>
	    </div>
	</div>
	<div class="col-md-10">
	    @yield('eusi')
	</div>
    </div>
@stop


