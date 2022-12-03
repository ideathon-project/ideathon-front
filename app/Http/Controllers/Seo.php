<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
class Seo extends Controller
{



    function SEO($title ,  $description,$keywords,$image)
    {
        return view('header',['title' =>$title,'description'=>$description,'keywords'=>$$keywords,'image'=>$image]);

    }

    //
}
