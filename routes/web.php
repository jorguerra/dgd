<?php

use App\Models\Comuna;
use App\Models\Metro;
use Illuminate\Http\Request;
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

Route::get('/', function (Request $request) {
    $metros = Metro::with('comuna')->paginate(50);
    $lineas = Metro::select('codigo')->pluck('codigo')->unique();
    $comunas = Comuna::orderBy('nombre')->get();
    return inertia('index', compact('metros','lineas','comunas'));
});
