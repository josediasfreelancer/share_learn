<?php

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

use App\Users_Tipo;
use App\Aplicacao;
use App\User;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


//Route::get('/teste', function (){
//    return "funka";
//});
//
//Route::get('/teste2/{id}', 'testeController@index');
//
//
////passar parâmetros via url para a página
//Route::get('/bam/{id}/{name}', function ($id, $name){
//
//    return "This is a variable post with the number ". $id . " with the name: " . $name;
//});
////passar um array no parâmetro e passar o URL da página
//Route::get('admin/posts/example', array('as' =>'admin.home' ,function(){
//
//    $url = route('admin.home');
////    <a href = "route('admin.home')"> Clica aqui </a>
//    return "this url is " . $url;
//}));

//Route::resource('teste', 'testeController');
//
//Route::get('/contacts', 'testeController@show_my_view');
//
//Route::get('post/{id}/{name}', 'testeController@show_post');

//Route::get('test', 'testeController@show_my_view');

//Route::get('teste', 'testeController@contact');


//Route::get('/insert', function (){
//
////    adicionar valores na DB
//    DB::insert('insert into users_tipo(designacao) values (?)', ['admin3']);
//
//});
//
//Route::get('/read', function (){
//
//    $results = DB::select('select designacao from users_tipo where id_users_tipo = ?', [1]);
//
//    foreach ($results as $tipo){
//        return $tipo->designacao;
//    }
//});

//Route::get('/update', function (){
//
//    $updated = DB::update('update users_tipo set designacao = "user" where id_users_tipo = ?', [2]);
//
//    return $updated;
//
//});

//Route::get('/delete', function (){
//
//    $deleted = DB::delete('delete from users_tipo where id_users_tipo = ?', [3]);
//
//    return $deleted;
//
//});

//Route::get('/read', function (){
//
//    $users_tipo = Users_Tipo::all();
//
////    return $users_tipo;
//
//    foreach ($users_tipo as $tipo){
//        return $tipo->designacao;
//    }
//});
//
//Route::get('/find', function (){
//
//    $users_tipo = Users_Tipo::find(2);
//
//    return $users_tipo->designacao;
//});

//Route::get('/findwhere', function (){
//
//    $users_tipo = Users_Tipo::where('id_users_tipo', 2)->orderBy('id_users_tipo', 'desc')->take(1)->get();
//
//    return $users_tipo;
//});

//Route::get('/findmore', function (){
////    $users_tipo = Users_Tipo::findOrFail(2);
////
////    return $users_tipo;
//
//    $users_tipo = Users_Tipo::where('designacao', '<', 50)->firstOrFail();
//
//    return $users_tipo;
//
//});

//Route::get('/basicinsert', function (){
//
//    $users_tipo = Users_Tipo::find(2);
////    $users_tipo = new Users_Tipo;
//    $users_tipo->designacao = 'user2';
//
//    $users_tipo->save();
//});

//Route::get('/create', function (){
//
//    Users_Tipo::create(['designacao'=> 'admin3']);
//
//});

//Route::get('/update', function (){
//    Users_Tipo::where('id_users_tipo', 1)->update(['designacao'=>'admin']);
//
//});
//
//Route::get('delete', function (){
//
//    $users_tipo = Users_Tipo::find(1);
//
//    $users_tipo->delete();
//
//});

//Route::get('/delete2', function (){
//
//    Users_Tipo::destroy(2);
//
//});

//Route::get('/delete3', function (){
//
//    Users_Tipo::destroy([3,4]);
//
//    Users_Tipo::where('is_admin', 0)->delete();
//
//});

//Route::get('/foreign', function (){
//    $user = Users_Tipo::find(2);
//    return $user->designacao;
//});


//Lista aplicações de um determinado user
Route::get('/user/{id}/app', function ($id){

    $user = User::findOrFail($id);

    foreach ($user->user_tem_apps as $app){

        echo $app->nome . "<br>";

    }

});






