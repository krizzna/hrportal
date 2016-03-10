@extends ('backend.layouts.master')

@section ('title', 'Company Loans')

@section('page-header')
    <h1>
        Company Loans
        <small>Edit</small>
    </h1>
@endsection

@section ('breadcrumbs')
    <li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">{!! link_to_route('admin.setup.loan.types.index', 'Company Loans') !!}</li>
@stop

@section('content')
    <div class="row">
	<div class="col-md-12">
	    <div class="box box-primary">
		<div class="box-header with-border">
		    <h3 class="box-title">Edit Loan Type</h3>
		</div>
		{!! Form::model($loan, ['method' => 'patch', 'route' => ['admin.setup.loan.types.update', $loan->id], 'class' => 'form-horizontal']) !!}
		    @include('backend/setup/loan/includes/partials/_form', ['submit_text' => 'Save'])
		{!! Form::close() !!}
	    </div>
	</div>
    </div>
    
@stop
