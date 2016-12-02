<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Meqale;
use App\Hekimler;
use App\Comment;
use App\rate;

class StatController extends Controller
{
    public function find($id){
    	$meqale=Meqale::find($id);
    	$hekim=Hekimler::where('id',$meqale->hekim_id)->first();
    	$comments=Comment::where('article_id',$id)->get();
    	$rates=Rate::where('article_id',$meqale->id)->get();
    	return view('kids.stat',compact('meqale','hekim','comments','rates'));
    }
}
