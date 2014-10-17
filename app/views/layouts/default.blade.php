<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>@yield('meta-title', 'Ponytalk')</title>
      <style> .flash { color: #0945CF; } </style>
      {{ HTML::style('assets/css/style.css') }}
</head>
<body>

      @include('layouts/partials/navbar')

      @if (Session::get('flash_message'))
            <div class="flash">
                  {{ Session::get('flash_message') }}
            </div>
      @endif
      
      <div class="container">
            @yield('content')
      </div>

      
      {{HTML::script('bower_components/jquery/dist/jquery.min.js')}}
      {{HTML::script('bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js')}}
</body>
</html>
