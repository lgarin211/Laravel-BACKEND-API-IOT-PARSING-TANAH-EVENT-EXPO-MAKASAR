<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampelIOTController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/getall', [SampelIOTController::class, 'getall'])->name('getall');
Route::get('/onspace', [SampelIOTController::class, 'onspace'])->name('onspace');
Route::get('/one', [SampelIOTController::class, 'one'])->name('one');
Route::get('/getupdate', [SampelIOTController::class, 'getupdate'])->name('getupdate');
Route::get('/getsave', [SampelIOTController::class, 'getsave'])->name('getsave');
Route::get('/getbtnstatus', [SampelIOTController::class, 'btnstatus'])->name('btnstatus');
Route::get('/getAIRROLE', [SampelIOTController::class, 'AIRROLE'])->name('AIRROLE');


Route::get('/take', function () {
    $data=DB::table($_GET['t'])->get();
    // dd($data);
    return response()->json($data);
});

Route::get('/saveke', function () {
    if (!empty($_GET['blass'])) {
        if (!empty($_GET['t'])) {
            if($_GET['t']=='ph'){

            if (!empty($_GET['r'])) {
                if (!empty($_GET['val'])) {
                    DB::table($_GET['t'])->insert([
                        [$_GET['r'] => $_GET['val']+3,'blass' => $_GET['blass']],
                    ]);
                    return response()->json('clear');
                }
            }   

            }else{
                    //
            if (!empty($_GET['r'])) {
                if (!empty($_GET['val'])) {
                    DB::table($_GET['t'])->insert([
                        [$_GET['r'] => $_GET['val'],'blass' => $_GET['blass']],
                    ]);
                    return response()->json('clear');
                }
            }    
                    // 
            }
  
        }     
    }else {
     return response()->json('empty');
    }
});


