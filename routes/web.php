<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::get('biodata', function () {

    $data=[

    'nama'=>'Yoga Tegar Pratama',
    'lahir'=>'Tasikmalaya,16 Mei 2004',
    'hobi'=>'Badminton',
    'agama'=>'Islam',
    'jk'=>'Laki-laki',
    'alamat'=>'Perum Rancaekek Permai Blok C4 No 16',
    'telp'=>'087731365437',
    'email'=>'Yogategar73@gmail.com'


    ];

    return view('biodata',$data);
});
Route::get('/list', [BiodataController::class, 'index']);


