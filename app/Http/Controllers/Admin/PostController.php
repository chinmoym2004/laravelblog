<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::orderBy('created_at','DESC')->get();
        return view('blog.admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($subdomain,Request $request)
    {
        //
        $request['user_id']=$this->curentuser()->id;
        $request['slug'] = str_slug($request->title);

        $post = Post::create($request->all());


        if($request->hasFile('post_image'))
        {
            $post->post_image=$this->uploadtopublic($request,'post_image');
            $post->save();
        }



        return redirect('admin/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($subdomain,Post $post)
    {
        return view('blog.admin.post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Http\Response
     */

    public function edit($subdomain,Post $post)
    {
        return view('blog.admin.post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$subdomain, Post $post)
    {
        //
        //$request['user_id']=$this->curentuser()->id;

        $post->fill($request->all());
        $post->slug = str_slug($request->title);
        $post->publish = (int)$request->publish;
        $post->save();

        if($request->hasFile('post_image'))
        {
            $post->post_image=$this->uploadtopublic($request,'post_image');
            $post->save();
        }

        return redirect('admin/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Post  post
     * @return \Illuminate\Http\Response
     */
    public function destroy($subdomain,Post $post)
    {
        //
        $post->delete();
        return redirect('admin/post');
    }
}
