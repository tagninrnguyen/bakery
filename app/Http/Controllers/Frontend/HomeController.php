<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Image;
use App\Slide;

class HomeController extends Controller
{
    public function index(){
    	$slide = DB::table('slides')->join('images', 'slides.image_id', '=', 'images.id')->get();
    	//dd($slide);
    	return view('frontend.home.index', compact('slide'));
    }
}
