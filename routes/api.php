<?php

use App\Models\Metro;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/metros', function(Request $request){
    if($request->filter && $request->value){
        try{
            return Metro::with('comuna')->where($request->filter, $request->value)->paginate(50);
        }catch(QueryException $e){
            throw new \Exception('Inválidos campos de búsqueda');
        }
    }
    return Metro::with('comuna')->paginate(50);
});

Route::post('/metros/{id}', fn(Request $request) => Metro::findOrFail($request->id));
