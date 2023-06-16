<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\GrievanceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//  Route::get('/voterList', function () {
//     // Your code for the voter registration page here
// })->middleware('checkSessionVariable:username');
Route::get('/login', function () {return view('Login');})->name('login');

Route::get('/', function () { return view('Home');});
// Route::middleware(['CheckSessionVariable'])->group(function () {

// Route::get('/', function () { return view('partyRegisteration');});
Route::get('/Home', function () { return view('Home');});
//Route::get('/voterList', [VoterController::class,'searchVoter']);
//Route::get('/voterList', [VoterController::class, 'index'])->name('voterList');
Route::get('/grievanceList', [GrievanceController::class, 'retriveAllGrievance'])->name('grievanceList');

Route::get('/logout', [UserController::class,'logout']);

Route::get('loggedin', function () {return view('Home');});
Route::get('election_List', function () {return view('electionList');});


Route::get('/Voter_Registration', function () { return view('voterRegisteration');});

Route::post('/voter', [VoterController::class,'store']);
Route::post('/editVoter', [VoterController::class,'retriveVoter']);
Route::post('/sendGrievance', [GrievanceController::class,'createGrievance']);
Route::get('/grievance', [UserController::class,'retriveLoggedInuser'])->name('grievance');
Route::get('/sendgrievance',function () {return view('sendGrievance');});
Route::post('/delete', [VoterController::class,'retriveDeletedVoter']);
Route::post('/deleteVoter', [VoterController::class,'deleteVoter']);
Route::post('/saveVoter', [VoterController::class,'update']);
Route::get('/castevote', [CandidateController::class,'index']);
// function () {return view('casteVote');});
Route::get('/partyReg', function () {return view('partyRegisteration');});
Route::post('/party_Registeration', [PartyController::class,'store']);
Route::post('/login', [UserController::class,'login']);
Route::get('/Candidate_Registration', function () { return view('candidateRegisteration');});
Route::get('/profile',[UserController::class,'retriveLoggedInuser']);
Route::post('/candidate', [CandidateController::class,'store']);
Route::get('/voterList', [VoterController::class, 'index'])->name('voterList')->middleware('CheckSessionVariable:username');;
    // Your routes here
// });