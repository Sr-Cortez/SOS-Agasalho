<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\InstitutionsController;

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


//Home
Route::get('/', function () {

    $informe_cidade = request("informe_cidade");

    if($informe_cidade){
        $searchs = Institutions::where(
            ['city','like','%'.$informe_cidade.'%']
        )->get();

    }else{
        $searchs = 0; //Search::all();
    }

    return view('/home',['searchs' => $searchs]);

});


//Search
Route::get('/search',[InstitutionsController::class,'searchCity']);

//Cadastro de doação
Route::get('/cadastrar-doacao', function () {
    return view('cadastrar-doacao');
});

//Cadastro de instituição
Route::get('/cadastrar-instituicao', function () {
    return view('cadastrar-instituicao',['instituicao' => 1]);
});

//Donations
Route::post('/donations',[DonationsController::class,'saveNewDonation']);

//Institutions
Route::post('/institutions',[InstitutionsController::class,'saveNewInstitutions']);

//Dashboard
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    //Route::get('/dashboard', function () {
    //    return view('dashboard');
    //})->name('dashboard');
    

    Route::get('/dashboard',[DonationsController::class,'store']);
});
