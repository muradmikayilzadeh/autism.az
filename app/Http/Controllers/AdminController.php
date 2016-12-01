<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Admin;
use App\User;
use App\Meqale;
use App\Hekimler;
use App\Http\Controllers\Controller;
class AdminController extends Controller
{
       public function index()
    {

       return view('admin.index');
    }

    public function login()
    {
        
         return view('logins.admin');
    }

    public function checkLogin(Request $request)
    {
            $email=$request->email;
            $password=$request->password;
            if (isset($_SESSION)) {
                if(Admin::where([['email',$email],['password',$password]])->first()){
                    $admin=Admin::where([['email',$email],['password',$password]])->first();
                    $_SESSION['adminTrue']='adminSistemde';
                    $_SESSION['adminId']=$admin->id;
                    return view('admin.index',compact('admin'));
                }
            }
            else{
                session_start();
                $email=$request->email;
                $password=$request->password;

                if(muellim::where([['email',$email],['password',$password]])->first()){
                    $admin=Admin::where([['email',$email],['password',$password]])->first();
                    $_SESSION['adminTrue']='adminSistemde';
                    $_SESSION['adminId']=$admin->id;
                    return view('admin.index',compact('admin'));
                }
        }
    }

    public function users()
    {
        $users=User::all();
        return view('admin.users',compact('users'));
    }

    public function show($id)
    {
        $user=User::find($id);
        return view('admin.show',compact('user'));
    }

    public function ban($id)
    {
        $user=User::find($id);
        $user->delete();
        return back();
    }

    public function meqale()
    {
        $meqaleler=Meqale::all();
        return view('admin.article',compact('meqaleler'));
    }

    public function showMeqale($id)
    {
        $meqale=Meqale::find($id);
        return view('admin.showarticle',compact('meqale'));
    }

    public function destroyMeqale($id)
    {
        $meqale=Meqale::find($id);
        $meqale->delete();
        return back();
    }

    public function hekimler()
    {
        $hekimler=Hekimler::all();
        return view('admin.hekimler',compact('hekimler'));
    }

    public function showHekimler($id)
    {
        $hekim=Hekimler::find($id);
        return view('admin.showhekim',compact('hekim'));
    }
    public function destroyHekim($id)
    {
        $hekim=Hekimler::find($id);
        $hekim->delete();
        return back();
    }

    public function addHekim()
    {
        return view('admin.addhekim');
    }

    public function saveHekim(Request $request)
    {
        $hekim=new Hekimler;
        $hekim->name=$request->name;
        $hekim->surname=$request->surname;
        $hekim->haqqinda=$request->about;
        $hekim->email=$request->email;
        $hekim->password=$request->password;
        $hekim->save();
        
        $meqale=new Meqale;
        $meqale->title='Salam';
        $meqale->text="Salam autism.az istifadəçiləri. Artıq mən də sizə qoşuldum! Hörmətlə,".$request->name.' '.$request->surname;
        $meqale->hekim_id=$hekim->id;
        $meqale->picture='images/logo.png';
        $meqale->save();
        return redirect('admin/hekimler');
    }

    public function logout()
    {
        if(isset($_SESSION['adminTrue'])){
            session_unset($_SESSION['adminTrue']);
            session_destroy();
            return redirect('/');
        }
    }

}
  
 
   
