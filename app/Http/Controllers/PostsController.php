<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts= Post::all();
        return view('home.feed',[
            'posts'=>$posts,
          ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.feed');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,
      [
            'post_text' => 'required',
            'post_image' => ['file','image','required'],
      ],
      );


        $newPost= new Post;

        $newPost->post_text=$request->post_text;


        // dd($request->file('post_image'));
        $path = $request->file('post_image')->store('public');
        $file=basename($path);

        $newPost->post_image=$file;
        $newPost->user_id = Auth::user()->id;

        $newPost->save();



        return redirect('post');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function isLikedByMe($id)
{
    $post = Post::findOrFail($id)->first();
    if (Like::whereUserId(Auth::id())->wherePostId($post->id)->exists()){
        return 'true';
    }
    return 'false';
}







}
