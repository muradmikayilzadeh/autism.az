<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Hekimler;
use App\Meqale;
class HekimController extends Controller
{       
        public function index()
        {  
          $hekim=Hekimler::find($_SESSION['hekimId']);
          $meqale=Meqale::where('hekim_id',$_SESSION['hekimId'])->orderBy('created_at','desc')->get()[0];
          return view('hekimler.index',compact('hekim','meqale'));
        }
        public function login(Request $request)
        {
                $this->validate($request,[
                'email'=>'required',
                'password'=>'required',

                ]);
                $email=$request->email;
                $password=$request->password;
                if (isset($_SESSION)) {
                    if(Hekimler::where([['email',$email],['password',$password]])->first()){
                        $hekim=Hekimler::where([['email',$email],['password',$password]])->first();
                        $_SESSION['hekimTrue']='hekimSistemde';
                        $_SESSION['hekimId']=$hekim->id;
                        
                        return redirect('/hekim-panel');
                    }
                }
                else{
                    session_start();
                    $email=$request->email;
                    $password=$request->password;

                    if(Hekimler::where([['email',$email],['password',$password]])->first()){
                        $hekim=Hekimler::where([['email',$email],['password',$password]])->first();
                        $_SESSION['hekimTrue']='hekimSistemde';
                        $_SESSION['hekimId']=$hekim->id;
                        return redirect('/hekim-panel');
                    }
            }
        }

        public function logout()
        {
            if(isset($_SESSION['hekimTrue'])){
                session_unset($_SESSION['hekimTrue']);
                session_destroy();
                return redirect('/');
            }
        }


        public function settingsPage($id)
        {
            $id=Hekimler::find($id);
            return view('hekimler.settings',compact('id'));
        }

        public function saveSettings(Request $request)
        {
            $this->validate($request,[
                'name'=>'required',
                'surname'=>'required',
                'email'=>'required',
                'password'=>'required',
                ]);
            $hekim=Hekimler::find($_SESSION['hekimId']);
            $hekim->name=$request->name;
            $hekim->surname=$request->surname;
            $hekim->password=$request->password;
            $hekim->email=$request->email;
            $hekim->haqqinda=$request->about;

            if($request->hasFile('photo')){
                $file=$request->file('photo');
                $filename=time().'.'.$file->getClientOriginalExtension();
                $file->move('publicimages/post/',$filename);
                $path='publicimages/post/'.$filename;
                $hekim->avatar=$path;
            }
            $hekim->save();
            return back()->with('success','Məlumatlar Yeniləndi');
        }


        public function newMeqale(Request $request)
        {
             $this->validate($request,[
                'title'=>'required',
                'text'=>'required',
                'photo'=>'required',
            ]);
            $new=new Meqale;
            $new->title=$request->title;
            $new->text=$request->text;
            $new->hekim_id=$_SESSION['hekimId'];

            if($request->hasFile('photo')){
                $file=$request->file('photo');
                $filename=time().'.'.$file->getClientOriginalExtension();
                $file->move('publicimages/post/',$filename);
                $path='publicimages/post/'.$filename;
                $new->picture=$path;
            }

            $new->save();
            return back()->with('success','Məqalə əlavə edildi');
        }


        public function meqale()
        {
          $meqaleler=Meqale::where('hekim_id',$_SESSION['hekimId'])->get();
          return view('hekimler.meqaleler',compact('meqaleler'));
        }


        public function newMeqalePage()
        {
            return view('hekimler.add');
        }
    }
