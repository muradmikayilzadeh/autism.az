<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class UserController extends Controller
{
    public function register(Request $request)
    {
        if(!User::where('email',$request->email)->first()){
            $new=new User;
            $new->name=$request->name;
            $new->surname=$request->surname;
            $new->email=$request->email;
            $new->password=$request->password;

            $new->save();
            return view('kids.index');
            
        }else{
            return back()->with('wrong','E-poçt artıq qeydiyyatdan keçib!');
        }
    }

    public function login(Request $request)
    {
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
}
