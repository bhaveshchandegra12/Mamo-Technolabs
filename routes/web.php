<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HireusController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home.index');
});


// Graphic Designers Pages
Route::get('/uiux-designer',[HireusController::class,'uiuxdesign']);
Route::get('/webdesigner',[HireusController::class,'webdesigner']);

// FrontEnd Developer
Route::get('/reactdeveloper',[HireusController::class,'reactdeveloper']);
Route::get('/angulardeveloper',[HireusController::class,'angulardeveloper']);
Route::get('/vuedeveloper',[HireusController::class,'vuedeveloper']);

// BackEnd Developer
Route::get('/phpdeveloper',[HireusController::class,'phpdeveloper']);
Route::get('/laraveldeveloper',[HireusController::class,'laraveldeveloper']);
Route::get('/netdeveloper',[HireusController::class,'netdeveloper']);
Route::get('/nodedeveloper',[HireusController::class,'nodedeveloper']);
Route::get('/pythondeveloper',[HireusController::class,'pythondeveloper']);

// Mobile Developer
Route::get('/iosdeveloper',[HireusController::class,'iosdeveloper']);
Route::get('/androiddeveloper',[HireusController::class,'androiddeveloper']);
Route::get('/ionicdeveloper',[HireusController::class,'ionicdeveloper']);
Route::get('/flutterdeveloper',[HireusController::class,'flutterdeveloper']);
Route::get('/reactnativedeveloper',[HireusController::class,'reactnativedeveloper']);

// Cms Developer
Route::get('/wordpressdeveloper',[HireusController::class,'wordpressdeveloper']);
Route::get('/shopifydevelope',[HireusController::class,'shopifydeveloper']);
Route::get('/magentodeveloper',[HireusController::class,'magentodeveloper']);
Route::get('/drupaldeveloper',[HireusController::class,'drupaldeveloper']);

// Hireus Services
Route::get('/hiredevelopers',[HireusController::class,'hiredevelopers']);

// Development Services
Route::get('/graphicsdesigners',[HireusController::class,'graphicsdesigners']);
Route::get('/webapp',[HireusController::class,'webapp']);
Route::get('/webportal',[HireusController::class,'webportal']);
Route::get('/mobileapp',[HireusController::class,'mobileapp']);
Route::get('/frontenddevelopment',[HireusController::class,'frontenddevelopment']);
Route::get('/enterprisesoftware',[HireusController::class,'enterprisesoftware']);
Route::get('/offshoresoftware',[HireusController::class,'offshoresoftwarer']);
Route::get('/aisoftwaredevelopment',[HireusController::class,'aisoftwaredevelopment']);

// Support Services
Route::get('/digitalmarketing',[HireusController::class,'digitalmarketing']);
Route::get('/virtualsassistant',[HireusController::class,'virtualsassistant']);
Route::get('/dataanalytics',[HireusController::class,'dataanalytics']);

// Testing Services
Route::get('/qasoftware',[HireusController::class,'qasoftware']);

// Devops Services
Route::get('/devops',[HireusController::class,'devops']);

// Resource
Route::get('/zerotrust',[HireusController::class,'zerotrust']);
Route::get('/mustad',[HireusController::class,'mustad']);
Route::get('/icam',[HireusController::class,'icam']);
Route::get('/testimonial',[HireusController::class,'testimonial']);
Route::get('/blog',[HireusController::class,'blog']);

// About Us
Route::get('/aboutus',[HireusController::class,'aboutus']);

// Career
Route::get('/career',[HireusController::class,'career']);

// Contact Us
Route::get('/contactus',[HireusController::class,'contactus']);



