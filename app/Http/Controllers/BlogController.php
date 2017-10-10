<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Model\Post;

class BlogController extends Controller
{
	use AuthenticatesUsers;

	public function getIndex()
	{
		$limit = 15;
		$posts = Post::where('publish','=',1)->where('show','=',1)->paginate($limit);
		return view('blog.index',compact('posts'));
	}

	public function getPost($slug)
	{
		$post = Post::where('slug',$slug)->first();
		if(!$post)
			return view('blog.404');

		return view('blog.postview',compact('post'));
	}

	public function getLogin(Request $request)
	{
		return view('blog.auth.login');
	}

	public function postLogin(Request $request)
	{	
		$this->validate($request, [
            'username' => 'required|exists:users,email',
            'password' => 'required',
        ]);



        if (\Auth::attempt(['email' => $request->username, 'password' => $request->password],$request->has('rememberme')?1:0)) {
            // Authentication passed...
            return redirect()->intended('admin/dashboard');
        }
        else
        {
        	return back()->withError(['error', 'Invalid Credential']);
        }
	}

	public function logout()
	{
		if(\Auth::check())
			\Auth::logout();

		return redirect('login');
	}


}
