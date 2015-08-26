@extends ('backend.layouts.master')

@section ('title', 'Employee Lists')

@section('page-header')
    <h1>
        Employee List
        <small>Add New</small>
    </h1>
@endsection

@section ('breadcrumbs')
    <li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li>{!! link_to_route('admin.employee.list.index', 'Employees') !!}</li>
    <li class="active">{!! link_to_route('admin.employee.list.create', 'Add New Employee') !!}</li>
@stop

@section('content')
    <div class="row">
	<div class="col-md-6">
	    <div class="box box-primary">
		<div class="box-header with-border">
		    <h3 class="box-title">Add New Employee</h3>
		</div>
		{!! Form::model(new App\Employee, ['route' => ['admin.employee.list.store'], 'class' => 'form-horizontal']) !!}
		    @include('backend/employees/includes/partials/_form', ['submit_text' => 'Save'])
		{!! Form::close() !!}
	    </div>
	</div>
    </div>
    
@stop

@section('scripts')
<script type="text/javascript">
$(document).ready(function($){
    
});
</script>
@stop
