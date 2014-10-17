<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Default pg</title>
      <style> .flash { color: #0945CF; } </style>
      {{ HTML::style('assets/css/style.css') }}
</head>
<body>
      <div class="menu">
           {{ HTML::linkRoute('home', 'Home', array(), array('class' => 'btn')) }}
           @if (Auth::guest())
             {{ HTML::linkRoute('login', 'Sign In', array(), array('class' => 'btn')) }}
             {{ HTML::linkRoute('register', 'Sign Up', array(), array('class' => 'btn')) }}
            @else
              {{ HTML::linkRoute('profile', 'Profile', array(), array('class' => 'btn')) }}
              {{ HTML::linkRoute('logout', 'Sign Out', array(), array('class' => 'btn')) }}
            @endif
      </div>
      @if (Session::get('flash_message'))
            <div class="flash">
                  {{ Session::get('flash_message') }}
            </div>
      @endif
      
      <div class="container">
          <h2>Woop</h2>
            @yield('content')
      </div>
      {{HTML::script('bower_components/jquery/dist/jquery.min.js')}}
      {{HTML::script('bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js')}}
</body>
</html>
