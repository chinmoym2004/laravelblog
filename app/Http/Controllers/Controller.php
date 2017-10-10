<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function uploadtopublic(\Illuminate\Http\Request $request,$field)
    {
        $file = $request->file($field);

	    $originalName = $file->getClientOriginalName();
	    $extension = $file->getClientOriginalExtension();
	    $originalNameWithoutExt = substr($originalName, 0, strlen($originalName) - strlen($extension) - 1);

	    $filename = uniqid().'.'.$extension;

	    $storage = \Storage::disk('public');
		$storage->put($filename, file_get_contents($file), 'public');
		
		return  \Storage::url($filename);
		
    }


    public function curentuser()
    {
    	return \Auth::user();
    }
}
