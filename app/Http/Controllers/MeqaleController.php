<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Meqale;

use App\Hekimler;

class MeqaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meqaleler=Meqale::all();

        return view('hekimler.index',compact('meqaleler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function meqaleler()
    {
        $meqaleler=Meqale::orderBy('created_at','desc')->get();
        return view('kids.meqaleler',compact('meqaleler'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hekim= Hekimler::find(auth()->guard('hekimler')->user()->id);

        $meqale = new Meqale;

        $meqale->title=$request->title;
        $meqale->text=$request->text;

        $hekim->meqale()->save($meqale);
        return redirect('/hekimler');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $found=Meqale::find($id);
        return view('hekimler.show',compact('found'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $meqale = Meqale::find($id);
        return view('hekimler.update',compact('meqale'));
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
        $this->validate($request,[
                'title'=>'required',
                'text'=>'required',
            ]);
        $meqale=Meqale::find($id);

        $meqale->title=$request->title;
            $meqale->text=$request->text;
            $meqale->hekim_id=$_SESSION['hekimId'];

            if($request->hasFile('photo')){
                $file=$request->file('photo');
                $filename=time().'.'.$file->getClientOriginalExtension();
                $file->move('publicimages/post/',$filename);
                $path='publicimages/post/'.$filename;
                $meqale->picture=$path;
            }
        $meqale->save();
        return back()->with('success','Məqalə Dəyişdirildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meqale=Meqale::find($id);
        $meqale->delete();
        return back();
    }

    public function find($id)
    {
        $tapildi=Meqale::where('id',$id)->first();
        $tapildi2=$tapildi->hekimler_id;

        $tapildiSon=Hekimler::where('id',$tapildi2)->first();
        $finishName=$tapildiSon->name;
        $finishSurname=$tapildiSon->surname;
        $finishAbout=$tapildiSon->about;
        return view('kids.profiles',compact('finishName','finishSurname','finishAbout'));
    }
}
