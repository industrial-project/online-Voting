<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;

    protected $table = 'party';

    protected $fillable = [
        'name_of_party',
        'logo',
        'president',
        'level',
        'region',
        
    ];
     public static function createParty($name_of_party,$logo,$president,$level,$region)
{
    return Party::create([        
        // 'password' => bcrypt($password),
        'name_of_party'=>$name_of_party,
        'logo'=>$logo,
        'president'=>$president,
        'level'=>$level,
        'region'=>$region,
    ]);
}
}
