<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Meqale;
use App\Hekimler;

class StatController extends Controller
{
    public function find($id){
    	$meqale=Meqale::find($id);
    	$hekim=Hekimler::where('id',$meqale->hekim_id)->first();
    	return view('kids.stat',compact('meqale','hekim'));
    }
}
