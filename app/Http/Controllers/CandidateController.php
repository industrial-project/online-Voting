<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Voter;
use App\Models\Candidate;
use Illuminate\Http\Request;


class CandidateController extends Controller
{
    public function store(Request $request)
    {
        $CandidateID = $request->input('candidate-id');
        $full_name = $request->input('full-name');
        $Image = $request->input('Image');
        $age= $request->input('age');
        $gender= $request->input('gender');
        $party= $request->input('party');
        $constituency= $request->input('constituency');
        $educational_level= $request->input('educational_level');
        $other_achievements= $request->input('other_achievements');

        $Candidate = Candidate::createCandidate($CandidateID,
        $full_name, $Image, $age,$gender,$party,$constituency,
        $educational_level,$other_achievements);

        // return redirect()->route('');
        return "hello"." ". $full_name;
    }

    
    public function index()
    {
        $candidates = Candidate::all();
        return view('casteVote', ['candidates' => $candidates]);
    }

}