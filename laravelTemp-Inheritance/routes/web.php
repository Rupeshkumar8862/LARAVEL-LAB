<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',['Name'=>"Here is passing from route"]);
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/post', function () {
    return view('post');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/testingJs', function () {
    return view('testingJs');
});
Route::get('/Js-inheri', function () {
    return view('Js-inheri');
});
// ** keep array in function
  function getUser(){
    return  $names=[
            1=>['name'=>"RupeshTech",'age'=>20,'city'=>'Delhi'],
            2=>['name'=>"rjeet",'age'=>32,'city'=>'Goa'],
            3=>['name'=>"Rohit",'age'=>30,'city'=>'Mumbai'],
            4=>['name'=>"manish",'age'=>45,'city'=>'Mumbai4']
        ];
}
/**** */
// pass data Route to view 
Route::get('/users', function () {
    $names=getUser();
    /*
    $age=20;
    return view('users',['name'=>"RupeshTech",'age'=>$age,
    'city'=>'<script>alert("js form route")</script>']);//pass js in view
    */

    // 2nd way for return view use with('keyname','value')
   /* return view('users')
    ->with('name','RupeshTech')
    ->with('age',20)
    ->with('city','<script>alert("js from route")</script>');
    */

    //3rd way withKeyname('value')
    /*
    return view('users')
    ->withName('RupeshTech')
    ->withAge(20)
    ->withCity('<script>alert("js from route")</script>');
    */
     // Default Value and !empty condition
     /*
    return view('users',[
        'name'=>"RupeshTech",
        'age'=>20,
        'city'=>'' // 'city'=>'Delhi'
  
    ]);
    */
    /** keep array in function */
  

    // show multiple dimension array value  in route 
        // $names=[
        //     1=>['name'=>"RupeshTech",'age'=>20,'city'=>'Delhi'],
        //     2=>['name'=>"rjeet",'age'=>32,'city'=>'Goa'],
        //     3=>['name'=>"Rohit",'age'=>30,'city'=>'Mumbai'],
        //     4=>['name'=>"manish",'age'=>45,'city'=>'Mumbai4']
        // ];
       
    return view('users',[
        'alldata'=>$names,
        'age'=>20,
        'city'=>'' // 'city'=>'Delhi'
    ]);
});
// pass id in route 
Route::get('/alldatabyid/{id}', function ($id) {
    return "<h1>USER-ID:". $id ."</h1>";
})->name('view.alldata');


// show single data in view files with anchor tag

Route::get('/alldata/{id}', function ($id) {
     $users=getUser();
     $singlerecord=$users[$id] ;// single record
     return view('alldata',['idkey'=>$singlerecord]);
})->name('view.alldata');