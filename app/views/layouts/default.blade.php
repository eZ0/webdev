<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>@yield('meta-title', 'Ponytalk')</title>
      <style> .flash { color: #0945CF; } </style>
      {{ HTML::style('assets/css/style.css') }}
</head>
<body>
      <div class="container">
            @include('layouts/partials/navbar')
            <div class="row">
                  <div class="col-md-12">
                        @if (Session::get('flash_message'))
                              <div class="flash">
                                    {{ Session::get('flash_message') }}
                              </div>
                        @endif

                        @yield('content')
                        
                  </div>
            </div>
      </div>

      {{HTML::script('bower_components/jquery/dist/jquery.min.js')}}
      {{HTML::script('bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js')}}
      {{HTML::script('assets/js/script.js')}}
    
</body>
</html>
