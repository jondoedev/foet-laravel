<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndex()
    {
    	return view('index');
    }

    public function getGallery()
    {
	    $thumbnails = scandir(__DIR__. '/../../../public/img/gallery/small');
	    unset($thumbnails[0], $thumbnails[1]);

    	return view('gallery')->with([
    		'images' => $thumbnails
	    ]);
    }
}
