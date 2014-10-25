
<div class="header">
	<ul class="nav nav-pills pull-right">
           		<li>{{ HTML::linkRoute('home', 'Home', array(), array('class' => 'btn')) }}</li>
           		<li>{{ HTML::linkRoute('allposts', 'All Posts', array(), array('class' => 'btn')) }}</li>
           	@if (Auth::guest())
           		<li>{{ HTML::linkRoute('login', 'Sign In', array(), array('class' => 'btn')) }}</li>
            	<li>{{ HTML::linkRoute('register', 'Sign Up', array(), array('class' => 'btn')) }}</li>
           	@else
              <li>{{ link_to('/'. Auth::user()->username, 'Profile') }}</li>
              <li>{{ HTML::linkRoute('logout', 'Sign Out', array(), array('class' => 'btn')) }}</li>
            @endif
	</ul>
	<h3 class="text-muted">Ponytalk</h3>
</div>