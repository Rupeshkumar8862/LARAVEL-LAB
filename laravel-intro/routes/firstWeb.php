
<?php

use Illuminate\Support\Facades\Route;
//@@@@@@@@@@@@@@@@@@@@@@@@@@ 1.BAsic Route @@@@@@@@@@@@@@@
Route::get('/', function () {
    return view('welcome');
});

// **My route way 1
// Route::get('/myfront', function () {
//     return view('myfront');
// });
Route::get('/myfront', function () {
    return view('myfront', ['message' => 'This is message from routes para']);
});
//**this is hello page of laravel But route About
Route::get('/about',function(){
    return view("hello");
});
//** */ Route direct view return HTML code
Route::get('/direct',function(){
    return "<h2>Without blade page return this</h2>";
});

//** Route way 2 
// ** synatx in single line
// Route::view('/routename',"blade name or what You return code");
Route::view('/posts','post');

// ****subRoute 
Route::get('/direct/subRoute',function(){
    return "<h2>This route is subRoute</h2>";
});

//@@@@@@@@@@@@@@@@@@@@@@@@@@ 2.Route Parameters @@@@@@@@@@@@@@@
//** */ Route Parameters pass id in from route return html code
// Route::get('/posts/{id}',function($id){
Route::get('/posts/{id}',function(string $myidvalue){
    // return "This is post id="  .$id;
    return "<h2>This is post id=" . $myidvalue ."<h2>";
});

//agar user not pass id in route para then error 404 so
// ** create default value OR CONDINTION NOT FOUND '
 Route::get('/checkCondition/{id?}',function(string $idvalue=null){
    //***set default
// Route::get('/checkCondition/{id?}',function(string $idvalue=" this default value"){
    if($idvalue){
        return "<h2>This is post id=" . $idvalue ."<h2>";
    }else{
        return "<h2>Not Found</h2>";
    }
 });

 //**** agar user multiple parameter in route para then 
// ** CONDINTION NOT FOUND 
 Route::get('/multipleparameter/{id?}/comment/{commentid?}',
 function(string $idvalue=null,string $commentidvalue=null){
    if($idvalue){
    return "<h1>POST ID:=". $idvalue."</h1><h2>Comment ID:=".$commentidvalue."</h2>";
    }else{
        return "<h2>Not Found ID</h2>";
    }
 });
// url http://localhost:8000/multipleparameter/43/comment/45


//** */ Route Parameters pass id in from route return view html code
Route::get('/contack/{id}',function(string $id){
    return view('contactpage');
});


// *** @@@@@@@@@@@@@ Route Constraints @@@@@@@@@@@
// *** we can pass security in route parameter for datatype like number value or alphabet value
Route::get ('/RouteConstraints/{id}',function(string $id){
   return 'User:  '  .$id;
//})->whereNumber('id');//for only number
//})->whereAlpha('id');//for only alpha
//})->whereAlphaNumeric('id');//for alpha number both

//})->whereIn("category",["Rupeshtech","admintech","anika"]);
// //for particular given para already only
// check url http://localhost:8000/RouteConstraints/Rupeshtech

// *high security(special character @ # $ % )para start @ route Regular Expression

//})->where("id",'[@0-9]+');// only number pass special character (@ # $ %) not allow
})->where('id','[a-zA-z]+') ;// only alphabet pass special character (@ # $ %) not allow


// ** Bootstrap calling route view
Route::get('/bootstrapRoute',function(){
    return view('bootstrapage');
});