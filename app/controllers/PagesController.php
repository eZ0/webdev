<?php

class PagesController extends \BaseController {

	public function index()
	{
		$posts = Post::orderBy('vote', 'desc')->get();
		return View::make('pages.index', compact('posts'));
	}

}