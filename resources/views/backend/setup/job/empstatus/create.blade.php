@extends ('backend.layouts.master')

@section ('title', 'Job Details Setup')

@section('page-header')
    <h1>
        Job Details Setup
        <small>Add New</small>
    </h1>
@endsection

@section ('breadcrumbs')
    <li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">{!! link_to_route('admin.setup.job.titles.index', 'Job Detail Setup') !!}</li>
    <li class="active">{!! link_to_route('admin.setup.job.employment-status.create', 'Add New') !!}</li>
@stop

@section('content')
    <div class="row">
	<div class="col-md-6">
	    <div class="box box-primary">
		<div class="box-header with-border">
		    <h3 class="box-title">Add New Employment Status</h3>
		</div>
		{!! Form::model(new App\Empstatus, ['route' => ['admin.setup.job.employment-status.store'], 'class' => 'form-horizontal']) !!}
		    @include('backend/setup/job/empstatus/includes/partials/_form', ['submit_text' => 'Save'])
		{!! Form::close() !!}
	    </div>
	</div>
    </div>
    
@stop
