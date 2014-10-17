<div class="menu">
           		{{ HTML::linkRoute('home', 'Home', array(), array('class' => 'btn')) }}
           	@if (Auth::guest())
           		{{ HTML::linkRoute('login', 'Sign In', array(), array('class' => 'btn')) }}
            	{{ HTML::linkRoute('register', 'Sign Up', array(), array('class' => 'btn')) }}
           	@else
			{{ link_to('/'. Auth::user()->username, 'Profile') }}
              	{{ HTML::linkRoute('logout', 'Sign Out', array(), array('class' => 'btn')) }}
            @endif
</div>