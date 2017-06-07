<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Laravel Blog</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    	<header>
    		<h1 class="text-center">Welcome to Blog!</h1>
             @if (Auth::guest())
                <a href="/auth/login">Login</a>
             @else
                <ul class="dropdown-menu" role="menu">
                    @if (Auth::user()->is_admin())
                    <li>
                      <a href="{{ url('/new-post') }}">Add new post</a>
                    </li>
                    @endif
                    <li>
                      <a href="{{ url('/auth/logout') }}">Logout</a>
                    </li>
                </ul>
             @endif
    	</header>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>