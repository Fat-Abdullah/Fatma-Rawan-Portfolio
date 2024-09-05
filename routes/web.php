
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Models\Product;
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

Route::get('/', function () {
    return view("web.home");
});


Route::get('/about', [AboutController::class,'infos']);

Route::get('/courses', function () {
    return view('web.courses');
});

Route::get('/contact', function () {
    return view('web.contact');
});

Route::get('/projects', function () {
    return view('web.projects');
});





// Route::get("/product",function()
// {
//     $pro=Product::all();
//     return $pro;
// });

// Route::get("/create",function()
// {
//      Product::create([
//         'name'=> "Redme11",
//         'qyn'=> 17
//     ]);
//     return "Created successfully";
// });

// Route::get('/about/{name?}',function($name="fatm"){
//     return "Hello $name";
// });
// Route::get("/greet/{name?}",[HelloController::class,"greet"]);


//  Route::get('/',[HelloController::class,"welcome"]);

// Route::get('/home', function () {
//     return view('home',
//     // [
//     //     "name"=>"Fatma Abdullah",
//     //     "age"=>21,
//     // ]

// );
// });