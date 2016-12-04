<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Hekimler;
use App\Meqale;
use App\Comment;
use App\Rate;

class UserController extends Controller
{
    public function register(Request $request)
    {
        if(!User::where('email',$request->email)->first()){
            $new=new User;
            $new->name=$request->name;
            $new->surname=$request->surname;
            $new->gender=$request->gender;
            $new->email=$request->email;
            if($new->gender=='0'){
                $new->avatar='images/avatars/default/male.jpg';
            }else{
                $new->avatar='images/avatars/default/female.jpg';
            }
            $new->password=$request->password;

            $new->save();
            return view('auth.login');
            
        }else{
            return back()->with('wrong','E-poçt artıq qeydiyyatdan keçib!');
        }
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
                if(User::where([['email',$email],['password',$password]])->first()){
                    $user=User::where([['email',$email],['password',$password]])->first();
                    $_SESSION['userSistemde']='hekimSistemde';
                    $_SESSION['userId']=$user->id;
                        
                    return redirect('/');
                }else{
                    return back()->with('wrong','E-poçt və ya şifrə yanlışdır');
                }
            }
            else{
                session_start();
                $email=$request->email;
                $password=$request->password;

                if(User::where([['email',$email],['password',$password]])->first()){
                    $user=User::where([['email',$email],['password',$password]])->first();
                    $_SESSION['userSistemde']='hekimSistemde';
                    $_SESSION['userId']=$user->id;
                    return redirect('/');
                }else{
                    return back()->with('wrong','E-poçt və ya şifrə yanlışdır');
                }
        }
    }

    public function logout()
    {
        if(isset($_SESSION['userSistemde'])){
            session_unset($_SESSION['userSistemde']);
            session_destroy();
            return redirect('/');
        }
    }

    public function myProfile()
    {
        $user=User::find($_SESSION['userId']);
        return view('kids.profile.index',compact('user'));
    }

    public function update(Request $request)
    {
        $user=User::find($_SESSION['userId']);
        
        $user->name=$request->name;
        $user->surname=$request->surname;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->gender=$request->gender;


        if($request->hasFile('photo')){
                $file=$request->file('photo');
                $filename=time().'.'.$file->getClientOriginalExtension();
                $file->move('publicimages/avatars/',$filename);
                $path='publicimages/avatars/'.$filename;
                $user->avatar=$path;
            }

        $user->save();
        return back();
    }

    public function findHekim($id)
    {
        $hekim=Hekimler::find($id);
        $meqaleler=Meqale::where('hekim_id',$id)->get();
        return view('kids.profile.hekim',compact('hekim','meqaleler'));
    }

    public function comment(Request $request)
    {
        $new=new Comment;
        $new->text=$request->text;
        $new->article_id=$request->id;
        $new->user_id=$_SESSION['userId'];
        $new->save();
        return back();
    }

    public function like($id)
    {
        $new=new rate;
        $new->user_id=$_SESSION['userId'];
        $new->article_id=$id;
        $new->save();
        return back();
    }
}
