<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\MyEmail;
use App\Models\Voter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VoterController extends Controller
{
    //\
    public function store(Request $request)
    {
        $voterID = $request->input('voter-id');
        $full_name = $request->input('full-name');
        $dob= $request->input('dob');
        $age= $request->input('age');
        $gender= $request->input('gender');
        $disability= $request->input('disability');
        $residency_duration= $request->input('residency-duration');
        $house_no= $request->input('house-no');
        $remark= $request->input('remark');
        $constituency=$request->input('constituency');

        $voter = Voter::createVoter($voterID,$voterID,$full_name,$dob,$age,$gender,$disability,$residency_duration,$house_no,$constituency,'NOT VOTED',$remark);
        $random_number = str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);
        $user=User::createUser($voterID,'none',$random_number,'voter');
        $voters =Voter::all();
        return view('voterList', ['voters'=>$voters]);
        //return "hello". $full_name;
        
    }
    public function retriveVoter(Request $request)
    {
        $voterID = $request->input('ID');
        $voter = Voter::where('voterID', $voterID)->firstOrFail();
    
        return view('voterEdit', compact('voter'));
        
    }

    public function retriveDeletedVoter(Request $request)
    {
        $voterID = $request->input('ID');
        $voter = Voter::where('voterID', $voterID)->firstOrFail();
    
        return view('voterDel', compact('voter'));
        
    }


    public function index()
{
    $voters =Voter::all();

    return view('voterList', ['voters'=>$voters]);
    
}

public function searchVoter($voterId)
{
    $voter = Voter::where('voterID', $voterId)->firstOrFail();
    return view('voterList', compact('voter'));
}

public function update(Request $request)
{
    $voterID=$request->input('voter-id');
    $voter = $voter = Voter::where('voterID', $voterID)->firstOrFail();
    $voter->full_name = $request->input('full-name');
    $voter->dob= $request->input('dob');
    $voter->age= $request->input('age');
    $voter->gender= $request->input('gender');
    $voter->disability= $request->input('disability');
    $voter->house_no= $request->input('house-no');
    $voter->residency_duration= $request->input('residency-duration');
    $voter->remark= $request->input('remark');
    $voter->constituency=$request->input('constituency');
    $voter->save();
    return redirect()->route('voterList');
    
}

public function editVoter(Request $request)
    {
        $voterID = $request->input('voter-id');
        $full_name = $request->input('full-name');
        $dob= $request->input('dob');
        $age= $request->input('age');
        $gender= $request->input('gender');
        $disability= $request->input('disability');
        $residency_duration= $request->input('residency-duration');
        $house_no= $request->input('house-no');
        $remark= $request->input('remark');
        $constituency=$request->input('constituency');

        $voter = Voter::createVoter($voterID,$voterID,$full_name,$dob,$age,$gender,$disability,$residency_duration,$house_no,$constituency,'NOT VOTED',$remark);
        $random_number = str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);
        $user=User::createUser($voterID,'none',$random_number,'voter');
        $email="mekonnenseble019@gmail.com";
        Mail::to($email)->send(new MyEmail($random_number ));
        $voters =Voter::all();
        return view('voterList', ['voters'=>$voters]);
        //return "hello". $full_name;
        
    }

    public function deleteVoter(Request $request){
        $id=$request->input('voter-id');    
        $voter = Voter::where('voterID', $id)->firstOrFail();
        $voter->delete();
        return redirect()->route('voterList');
    }
}
