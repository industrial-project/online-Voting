<?php

namespace App\Models;;

use Illuminate\Database\Eloquent\Model;

class Grievance extends Model
{
    protected $fillable = [
        'GrievanceID',
        'Date',
        'VoterID',
        'Election',
        'Name',
        'Grevance',
        'Response'
        
    ];
    protected $table = 'grievances';

    public static function createGrievance($grievanceID,$voterID,$election,$name,$grievance)
{
    $today = date('Y-m-d');
    return Grievance::create([        
        // 'password' => bcrypt($password),
        'GrievanceID'=>$grievanceID,
        'VoterID'=>$voterID,
        'Date'=>$today,
        'Election'=>'EEE/2356/2023',
        'Name'=>$name,
        'Grevance'=>$grievance,
        'Response'=>'',
          
    ]);
}

}