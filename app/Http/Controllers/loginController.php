<?php

namespace App\Http\Controllers;
use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class loginController extends Controller
{
    public function login(){
        return view('signin');
    }
    public function loginSubmit(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        
        $check = login::where(['email'=>$request->email,'password'=>$request->password])->count();
        $email =$request->email;
        $users = DB::table('login')->select('name')->where('email', $email)->get();
        
        if($check>0){
         // session(['adminLogin',true]);
            $data =$request->email;
            $request->session()->put('user',$users);
            return redirect('/');
        }else{
            return redirect('/login')->with('msg' ,'Invalid user');
            
        }
    }
    
    function logout(){
       if(session()->has('user')){
    
            session()->pull('user',null);
   
       }

        return redirect('/login');
    //     if(session()->missing('user')){
    
    //         return redirect('/login');
   
    //    }

    }


    
}
