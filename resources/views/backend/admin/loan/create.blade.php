@extends ('backend.layouts.master')

@section ('title', 'Company Loans')

@section('page-header')
    <h1>
        Company Loans
        <small>Add New</small>
    </h1>
@endsection

@section ('breadcrumbs')
    <li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">{!! link_to_route('admin.loan.types.index', 'Company Loans') !!}</li>
@stop

@section('content')
    <div class="row">
	<div class="col-md-6">
	    <div class="box box-primary">
		<div class="box-header with-border">
		    <h3 class="box-title">Add New Loan Types</h3>
		</div>
		{!! Form::model(new App\Loan, ['route' => ['admin.loan.types.store'], 'class' => 'form-horizontal']) !!}
		    @include('backend/admin/loan/includes/partials/_form', ['submit_text' => 'Save'])
		{!! Form::close() !!}
	    </div>
	</div>
    </div>
    
@stop
