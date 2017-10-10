<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	public function _construct()
	{
		$this->middleware('admin.auth');
	}


    //
    public function getIndex()
    {
    	
    	return redirect('admin/dashboard');
    }

    public function getDashboard()
    {
    	return view('blog.admin.dashboard');
    }
}
