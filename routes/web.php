<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return view('post');
// });
// Route::view('/hello','post');
// Route::get('/hello/firstproject', function () {
//     return view('firstproject');
// });
Route::get('/parameter/{id?}/multiple/{value}', function (string $id = null, string $val=null) {
    return "<h1> roll=".$id."</h1><h2>value=".$val."</h2>";
});
// validation for number
// Route::get('/parameter/{id}', function (string $id = null) {
    // return "<h1> roll=".$id."</h1>";
// })->whereNumber('id');
// //validation for alpha
// Route::get('/parameter/{id}', function (string $id = null) {
//     return "<h1> roll=".$id."</h1>";
// })->whereAlpha('id');
// // validation for both type of value alpha numberic
// Route::get('/parameter/{id}', function (string $id = null) {
//     return "<h1> roll=".$id."</h1>";
// })->whereAlphaNumeric('id');
// // user to get predefined valuue
// Route::get('/parameter/{id}', function (string $id = null) {
//     return "<h1> roll=".$id."</h1>";
// })->wherein('id',['movie','song','paintaing']);
// // for regular exresion
// Route::get('/parameter/{id}', function (string $id = null) {
//     return "<h1> roll=".$id."</h1>";
// })->where('id','[0-9]+');
// //  for multiple validation
// Route::get('/parameter/{id}/comment/{comment}', function (string $id = null,string $comme = null) {
//     return "<h1> roll=".$id."</h1><h2>".$comme."</h2>";
// })->where('id','[0-9]+')->whereAlpha('comment');

// Route::get('/projectt',function () {
//     return view('firstproject');
// })->name('project');

// Route::get('/ashork',function () {
//     return view('parameter');
// })->name('ashor');
// //  group route
// Route::prefix('page')->group( function(){

//     Route::get('first',function () {
//         return "<h1>hy first</h1>";
//     });
//     Route::get('secod',function () {
//         return "<h1>hy secod</h1>";
//     });
//     Route::get('third',function () {
//         return"<h1>hy third</h1>";
//     });  

// });
// Route::fallback( function(){
//     return "<h1>page not found </h1>";
// });
// Route::get('/index', function(){
//     return view('index');
// });
// Route::get('/header', function(){
//     return view('header');
// });
// Route::get('/javascript', function(){
//     return view('javascript');
// });
// function getUsers(){
//     return [
//         "1"=>["name"=>"saket","roll"=>"1","class"=>"five"],
//         "2"=>["name"=>"rohan","roll"=>"2","class"=>"six"],
//         "3"=>["name"=>"neha","roll"=>"3","class"=>"seven"],

//     ];
// };

// Route::get('/users', function () {
//     $user= getU sers();
//     return view('users',["id"=>$user]);
// });




