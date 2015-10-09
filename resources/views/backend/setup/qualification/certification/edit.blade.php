@extends ('backend.layouts.master')

@section ('title', 'Qualifications Setup')

@section('page-header')
    <h1>
        Qualifications Setup
        <small>Edit</small>
    </h1>
@endsection

@section ('breadcrumbs')
    <li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">{!! link_to_route('admin.setup.qualification.certifications.index', 'Qualifications Setup') !!}</li>
@stop

@section('content')
    <div class="row">
	<div class="col-md-6">
	    <div class="box box-primary">
		<div class="box-header with-border">
		    <h3 class="box-title">Edit Certifications</h3>
		</div>
		{!! Form::model($cert, ['method' => 'patch', 'route' => ['admin.setup.qualification.certifications.update',$cert->id], 'class' => 'form-horizontal']) !!}
		    @include('backend/setup/qualification/includes/partials/_form', ['submit_text' => 'Save'])
		{!! Form::close() !!}
	    </div>
	</div>
    </div>
    
@stop
