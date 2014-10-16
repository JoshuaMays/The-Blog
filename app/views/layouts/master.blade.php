<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Joshua Mays">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Freelancer Theme CSS -->
    <link href="{{ asset('/css/freelancer.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="{{ asset('/css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('//fonts.googleapis.com/css?family=Montserrat:400,700') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic') }}" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <div id="wrap">

        @include('partials.navigation')
        
        <div id="contentWrapper" class="container">

            @if (Session::has('successMessage'))
                <div class="alert alert-success alert-dismissible">{{{ Session::get('successMessage') }}}</div>
            @endif

            @if (Session::has('errorMessage'))
                <div class="alert alert-danger alert-dismissible">{{{ Session::get('errorMessage') }}}</div>
            @endif

        @yield('content')

        </div>
    </div><!-- /#pageWrap -->
    <!-- jQuery -->
    <script src="{{ asset("/jquery/jquery-1.11.1.js") }}"></script>
    <script src="{{ asset("/jquery/jquery-ui.min.js") }}"></script>
    <!-- Bootstrap JavaScript -->
    <script src="{{ asset("/bootstrap/js/bootstrap.min.js") }}"></script>
    <script>
        $("#searchInput").hide();
        $(document).ready(function()
        {
            
            
            $("#searchDrop").click(function(e)
            {
                e.preventDefault();
                $("#searchInput").slideToggle();
            });
        });
    </script>
    @yield('bottom-script')
    @include('partials.gaq')
</body>
</html>