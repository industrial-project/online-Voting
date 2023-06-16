<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    protected $primaryKey = 'voterID';
    protected $fillable = ['voterID', 'username','registration_date', 'full_name','dob','age','gender','disability','residency_duration','house_no','constituency','vote_status','remark'];
    
    use HasFactory;
    protected $table = 'voters';
    protected $casts = [
        'voterID' => 'string',
    ];
    public static function createVoter($voterID,$username,$full_name,$dob,$age,$gender,$disability,$residency_duration,$house_no,$constituency,$vote_status,$remark)
{
    return Voter::create([        
        // 'password' => bcrypt($password),
        'voterID'=>$voterID,
         'username'=>$username,
          'full_name'=>$full_name,
          'dob'=>$dob,
          'age'=>$age,
          'gender'=>$gender,
          'disability'=>$disability,
          'residency_duration'=>$residency_duration,
          'house_no'=>$house_no,
          'constituency'=>$constituency,
          'vote_status'=>$vote_status,
          'remark'=>$remark
    ]);
}

}
