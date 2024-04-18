<?php

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

//route saya
Route::get('/about', function () {
    return '<h1>Ola Amigos</h1>'
        . 'Soy Kiara<br>'
        . 'Si yo tengo solo dos.';
});

//buat route basic introduce yourself
Route::get('/intro', function () {
    return '<h1>HI THERE GEORGEOUS!!</h1>'
        . 'My name is Kiara<br>'
        . 'Im now in my second year in highschool<br>'
        . 'I have 1 bf<br>'
        . '
誰かが私にあなたのことをクソゴージャスだと言いました、確かに。お前は堕天使だ
';
});

//buar route basic to view
Route::get('hewan', function () {
    $king = "Lion";
    $hewan = ["Platypus", "Walrus", "Cheetah"];
    return view('animals_page', compact('king', 'hewan'));

});

Route::get('vegetables', function () {
    $fruit = ["apple", "grape", "mango"];
    return view('vegetable_page', ['buah' => $fruit]);

});

//route parameter: nama parameter ditandai dengan {}
Route::get('product/{name}', function ($name) {
    return "produk: $name";
});

//buat sebuah route dengan 3 buah parameter, nama, berat badan, tinggi badan,
Route::get('myself/{name}/{bb}/{tb}', function ($a, $bb, $tb) {
    $bmi = $bb / (($tb / 100) ** 2);
    if ($bmi > 30) {
        $ket = "Obesitas";
    } elseif ($bmi > 25) {
        $ket = "Kelebihan";
    } elseif ($bmi > 18.5) {
        $ket = "Ideal";
    } elseif ($bmi < 18.5) {
        $ket = "kekurangan berat badan";
    }

    return "Nama : $a<br>" .
        "Berat Badan = $bb<br>" .
        "Tinggi Badan = $tb<br>" .
        "BMI = $bmi<br>" .
        "Keterangan = $ket";
});
