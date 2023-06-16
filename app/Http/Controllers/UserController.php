<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Voter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login(Request $request){
        $incomingFields=$request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        // if(auth()->attempt(['name'=>$incomingFields['username'],'password'=>$incomingFields['password']]));
        // {
        //     $request->session()->regenerate();
        //     //
           
        //         $user = User::where('name',$incomingFields['username'])->first();
              
        //         if ($user->role=='voter registrar') {
        //         return redirect('/voterList');
        //         }
        //          else if($user->role=='voter') {
        //             return redirect('/castevote');
        //         }  
        //         else if($user->role=='election board') {
        //             return redirect('/partyReg');
        //         }  
        //         else if($user->role=='grievance handler') {
        //             return redirect('/greivanceList');
        //         }                 
             
        // }
        $user=User::where('username', $incomingFields['username'])
        ->where('password', $incomingFields['password'])
        ->first();
       
        if($user){
            Session::put('username', $incomingFields['username']);
            if($user->role=='voter registrar'){
                return redirect('/voterList');
            }
            else if($user->role=='voter') {
                return redirect('/castevote');
            }  
            else if($user->role=='election board') {
                return redirect('/partyReg');
            }  
            else if($user->role=='grievance handl') {
                return redirect('/grievanceList');
            }                 
                     
        }
        else{
            return redirect('/login');
        }
       
        
    }

    public function retriveLoggedInuser()
{
    //$user = Auth::user();
    $username = Session::get('username');
    $user=User::where('username',  $username);
    
        $voter = Voter::where('voterID', $username)->firstOrFail();
        if($voter){
        return view('sendgrievance', ['voter'=>$voter]);
        //return 'hello'.$voter->full_name;
        //return view('', compact('voter'));
        }
    

    return $username;

    //return view('profile', ['user' => $user]);
}

public function logout(){
    Session::forget('username');
    return view('login');
}
}
