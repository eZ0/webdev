<?php

class PostsController extends \BaseController {

	
	public function index()
	{
		$posts = Post::orderBy('created_at', 'desc')->get();
		return View::make('posts.index', compact('posts'));
	}

	public function store()
	{
		
		$input = Input::all();
		$id = Auth::id();

		Post::create([
			'user_id' => $id,
			'title' => $input['title'],
			'body' => $input['body']
		]);

		return Redirect::route('allposts');
	}

	public function show($id)
	{
		$post = Post::with('user')->findOrFail($id);
		$user = User::with('posts');
		$vote = Vote::with('posts');

		return View::make('posts.show', compact('post', 'user', 'vote'));
	}

	public function edit($id)
	{
		//
	}

	public function update($id)
	{
		//
	}

}