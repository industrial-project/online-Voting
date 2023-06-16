<?php

namespace App\Http\Controllers;




use App\Models\Grievance;
use Illuminate\Http\Request;

class GrievanceController extends Controller
{
    // 'VoterID'=>$voterID,
    //     'Date'=>$date,
    //     'Election'=>$election,
    //     'Name'=>$name,
    //     'Grevance'=>$grievance,
    //     'Response'=>'',
    public function createGrievance(Request $request)
    {
        $grievanceID = $request->input('grievance-ID');
        $voterID = $request->input('voter-id');
        $date = $request->input('date');
        $election= $request->input('election');
        $name= $request->input('full-name');
        $grevance= $request->input('grievance');     

        $grievance = Grievance::createGrievance($grievanceID,$voterID,$election,$name,$grevance);
        return redirect()->back()->with('success', 'Your grievance has been successfully submitted.');
        // $grievanceList =Grievance::all();
        // return view('grievanceList', ['grievances'=>$grievanceList]);
        // //return "hello". $full_name;
        
    }
    
    public function retriveAllGrievance()
{
    $grievanceList =Grievance::all();

    //return view('grievanceList', ['grievances'=>$grievanceList]);
    return view('grievanceList', ['grievances'=>$grievanceList]);
    
}

}
