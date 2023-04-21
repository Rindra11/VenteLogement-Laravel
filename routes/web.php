 <?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CitesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home/{userName}', [HomeController::class, 'method1']);

Route::get('/terrain', [HomeController::class, 'terrain']);

Route::get('/accueil', [HomeController::class, 'accueil']);

//Route::view('/', 'insertAgence');
Route::post('insertData',[AgenceController::class ,'insert']);
Route::get('/',[AgenceController::class,'readdata']);
Route::get('/editagence/{LibelleA}',[AgenceController::class,'insert']);

//Route::view('clients', 'client');
Route::post('clientData',[ClientController::class , 'client']);
Route::get('clients',[ClientController::class, 'readdata']);

//Route::view('cite', 'cites');
Route::post('citesData',[CitesController::class, 'cites']);
Route::get('cites',[CitesController::class, 'readdata']);
