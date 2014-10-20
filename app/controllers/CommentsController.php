<?php

class CommentsController extends \BaseController {



	/**
	 * Leave a new comment
	 * POST /comments
	 *
	 * @return Response
	 */
	public function store()
	{
		// fetch the input 
		// execute a command to leave the comment on post
		// go back
		$input = Input::all();
		$id = Auth::id();
		//$post = Post::all();
		
		$post = Post::find(1);
		//var_dump($post->id);

		Comment::create([
			'user_id' => $id,
			'post_id' => $post->id,
			'body' => $input['body']
		]);

		return Redirect::back();
	}

	/**
	 * Display the specified resource.
	 * GET /comments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /comments/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /comments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /comments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}