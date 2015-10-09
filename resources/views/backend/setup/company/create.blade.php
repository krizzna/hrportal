@extends ('backend.layouts.master')

@section ('title', 'Company Structure')

@section('page-header')
    <h1>
        Company Structure
        <small>Add New</small>
    </h1>
@endsection

@section ('breadcrumbs')
    <li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li>{!! link_to_route('admin.setup.company.structures.index', 'Company Structure') !!}</li>
    <li class="active">{!! link_to_route('admin.setup.company.structures.create', 'Add New') !!}</li>
@stop

@section('content')
    <div class="row">
	<div class="col-md-6">
	    <div class="box box-primary">
		<div class="box-header with-border">
		    <h3 class="box-title">Add New Company Structure</h3>
		</div>
		{!! Form::model(new App\CompanyStructure, ['route' => ['admin.setup.company.structures.store'], 'class' => 'form-horizontal']) !!}
		    @include('backend/setup/company/partials/_form', ['submit_text' => 'Save'])
		{!! Form::close() !!}
	    </div>
	</div>
    </div>
    
@stop
