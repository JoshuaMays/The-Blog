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
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Freelancer Theme CSS -->
    <link href="/css/freelancer.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/css/style.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="/css/fonts.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrap">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{{ action('PostsController@index') }}}">ERMAGERD</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="{{{ action('PostsController@index') }}}"></a>
                        </li>
                        <li class="page-scroll">
                            <a href="{{{ action('PostsController@index') }}}">Home</a>
                        </li>
                        <li class="page-scroll">
                            <a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a>
                        </li>
                        <li class="page-scroll">
                            <a href="{{{ action('HomeController@showResume') }}}">Resume</a>
                        </li>
                        <li class="page-scroll">
                            <a href="{{{ action('PostsController@index') }}}">Blog</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container contentWrapper">
        
        @yield('content')
        
        </div>
        
    </div><!-- /#pageWrap -->
    @yield('footer')
    <!-- jQuery -->
    <script src="/jquery/jquery-1.11.1.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>