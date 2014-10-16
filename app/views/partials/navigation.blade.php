        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div id="navBox"class="container">
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
                            <a href="#"></a>
                        </li>
                        <li class="page-scroll">
                            {{ link_to_action('HomeController@index', 'Home') }}
                        </li>
                        <li class="page-scroll">
                            {{ link_to_action('HomeController@showPortfolio','Portfolio') }}
                        </li>
                        <li class="page-scroll">
                            {{ link_to_action('HomeController@showResume', 'Resume') }}
                        </li>
                        <li class="page-scroll">
                            {{ link_to_action('PostsController@index', 'Blog') }}
                        </li>
                        <li class="page-scroll">

                        @if (Auth::check())

                            {{ link_to_action('PostsController@create', 'Write') }}

                        </li>
                        <li class="page-scroll">
                            {{ link_to_action('HomeController@doLogout', 'Logout') }}

                        @else

                            {{ link_to_action('HomeController@showLogin', 'Login') }}

                        @endif

                        </li>
                        <li class="page-scroll">
                            <a id="searchDrop"><i class="glyphicon glyphicon-search"></i></a>
                        </li>
                        <li class="page-scroll">
                                {{ Form::open(array('action' => 'PostsController@index', 'class' => 'form-inline', 'method' => 'GET')) }}
                                    <div id="searchInput" class="form-group">
                                        {{ Form::text('search', Input::get('search'), array('class' =>'form-control', 'id' => 'search', 'placeholder' => "Search")) }}
                                        {{ Form::submit('GO', array('class' => "btn btn-xs")) }}
                                    </div>
                                {{ Form::close() }}
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>