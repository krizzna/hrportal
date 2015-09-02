<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{{ csrf_token() }}" />
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Default Description')">
        <meta name="author" content="@yield('author', 'Anthony Rappa')">
        @yield('meta')

        @yield('before-styles-end')
        {!! HTML::style(elixir('css/backend.css')) !!}
        @yield('after-styles-end')

        <!-- Icons-->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        {!! HTML::script("js/vendor/modernizr-2.8.3.min.js") !!}

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    </head>
   <body class="skin-blue sidebar-mini">
        <div class="wrapper">
	    @include('backend.includes.header')
	    @include('backend.includes.sidebar')

	    <!-- Content Wrapper. Contains page content -->
	    <div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		    @yield('page-header')
		    <ol class="breadcrumb">
			@yield('breadcrumbs')
		    </ol>
		</section>
		
		<!-- Main content -->
		<section class="content">
		    @include('includes.partials.messages')
		    @yield('content')
		</section><!-- /.content -->
	    </div><!-- /.content-wrapper -->
		
	    @include('backend.includes.footer')
	</div><!-- ./wrapper -->
		
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="{{asset('js/vendor/jquery-1.11.2.min.js')}}"><\/script>')</script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

	@yield('before-scripts-end')
        {!! HTML::script(elixir('js/backend.js')) !!}
        @yield('after-scripts-end')

	@yield('scripts')

    </body>
</html>
