<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $table = 'candidates';
    protected $fillable = [
        'candidate_id',
        'full_name',
        'age',
        'gender',
        'party',
        'constituency',
        'educational_level',
        'other_achievements',
            ];
    public static function createCandidate($CandidateID,
    $full_name, $Image, $age,$gender,$party,$constituency,
    $educational_level,$other_achievements){
        return Candidate::create([
            // 'password' => bcrypt($password),
               '  candidate_id'=>$CandidateID,
            'full_name'=>$full_name,
              'Image'=>$Image,
              'age'=>$age,
              'gender'=>$gender,
              '$party'=>$party,
              'constituency'=>$constituency,
              'educational_level'=>$educational_level,
              'other_achievements'=>$other_achievements

        ]);
    }



    public function party()
    {
        return $this->belongsTo(Party::class);
    }

}