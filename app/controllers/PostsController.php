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
		$id    = Auth::id();

		$rules = [
		'title' =>'required',
		'body'  => 'required'
		];

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			if(Input::hasFile('image'))
			{
				$file     = Input::file('image');
				$filename = $file->getClientOriginalName();
				$destpath = 'assets/images/posts/'.str_random(8).'/';

				$file->move($destpath, $filename);
				$input['image'] = $destpath . $filename;
			} else {
				$input['image'] = '';
			}

			Post::create([
				'user_id' => $id,
				'title'   => $input['title'],
				'body'    => $input['body'],
				'link'    => $input['link'],
				'image'   => $input['image']
				]);
		}

		return Redirect::route('allposts');
	}

	public function show($id)
	{
		$post = Post::with('user')->findOrFail($id);
		$user = User::with('posts');
		$vote = Vote::with('posts');

		return View::make('posts.show', compact('post', 'user', 'vote'));
	}

}