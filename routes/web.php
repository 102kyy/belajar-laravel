<?php

use App\Models\Barrang;
use App\Models\Pengguna;
use App\Models\Post;
use App\Models\Produk;
use App\Models\Siswa;
use App\Models\Telepon;
use App\Models\Transaksi;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MerekController;


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

//route optional parameter -> ditandai dengan?
Route::get('myname/{nama?}', function ($a = "Kiara") {
    return "my name is $a";
});

//menampilkan data dari database
Route::get('/testmodel', function () {
    $data = Post::all();
    return $data;
});

//menampilkan data dari database2
Route::get('/testmodelbarrang', function () {
    $data = Barrang::all();
    return $data;
});

//menampilkan data dari database3
Route::get('/testmodelsiswa', function () {

    $post = Post::all();

    return view('tampil_post', compact('post'));

    //return view('tampil_siswa', compact('siswa'));
    //$siswa = Siswa::all();
    //$siswa = new Siswa;
    //$siswa->nama = "Kim Taehyung";
    //$siswa->jenis = "Laki Laki";
    //$siswa->alamat = "Rancamanyar";
    // $siswa->agama = "Islam";
    // $siswa->telepon = "8658";
    // $siswa->email = "v@gmail.com";
    //$siswa = Siswa::where('nama', 'like', '%shaliha%')->get();
    return $post;
});

//menampilkan data dari database4
Route::get('/testmodelbarrang', function () {

    $barrang = Barrang::all();

    return view('tampil_barrang', compact('barrang'));

    return $barrang;
});

//menampilkan data dari database5
Route::get('/testmodelsiswa2', function () {

    $siswa = Siswa::all();

    return view('tampil_siswa', compact('siswa'));

    return $siswa;
});

//menampilkan data dari database6
Route::get('/testmodelpengguna', function () {

    $pengguna = Pengguna::all();

    return view('tampil_pengguna', compact('pengguna'));

    return $pengguna;
});

//menampilkan data dari database7
Route::get('/testmodeltelepon', function () {

    $telepon = Telepon::all();

    return view('tampil_Telepon', compact('telepon'));

    return $telepon;
});

//menampilkan data dari database8
Route::get('/testmodeltransaksi', function () {

    $transaksi = Transaksi::all();

    return view('tampil_Transaksi', compact('transaksi'));

    return $transaksi;
});

// //route template

// Route::get('/template', function (){

//     $posts = Post::all();

//     return view('template', compact('posts'));

// });

 //route template2

// Route::get('/template2', function () {

//     $produks = Produk::all();

//     return view('template2', compact('produks'));
// });

//controller
Route::get('post', [PostController::class, 'menampilkan']);
Route::get('post/{id}', [PostController::class, 'show']);


//controller
Route::get('produk', [ProdukController::class, 'menampilkan']);
Route::get('produk/{id}', [ProdukController::class, 'show']);

//controller
Route::get('/mereks', [MerekController::class, 'menampilkan']);
Route::get('/mereks/{id}', [MerekController::class, 'show']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//CRUD brand
use App\Http\Controllers\BrandController;
Route::resource('brand', BrandController::class);