<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Default pg</title>
      <style> .flash { color: #0945CF; } </style>
</head>
<body>
      @if (Session::get('flash_message'))
            <div class="flash">
                  {{ Session::get('flash_message') }}
            </div>
      @endif

      <div class="container">
            @yield('content')
      </div>
	
</body>
</html>