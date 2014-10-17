<!-- extending master page default.blade.php -->
@extends('layouts.default')

@section('content')
	<p>
		{{ Auth::check() ? 'Welcome, ' . Auth::user()->username : 'Why dont you sign up?' }}
	</p>
@stop