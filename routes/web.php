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
Route::get('/uiuxdesigner',[HireusController::class,'uiuxdesign'])->name('uiuxdesign');
Route::get('/webdesigner',[HireusController::class,'webdesigner'])->name('webdesigner');

// FrontEnd Developer
Route::get('/reactdeveloper',[HireusController::class,'reactdeveloper'])->name('reactdeveloper');
Route::get('/angulardeveloper',[HireusController::class,'angulardeveloper'])->name('angulardeveloper');
Route::get('/vuedeveloper',[HireusController::class,'vuedeveloper'])->name('vuedeveloper');

// BackEnd Developer
Route::get('/phpdeveloper',[HireusController::class,'phpdeveloper'])->name('phpdeveloper');
Route::get('/laraveldeveloper',[HireusController::class,'laraveldeveloper'])->name('laraveldeveloper');
Route::get('/netdeveloper',[HireusController::class,'netdeveloper'])->name('netdeveloper');
Route::get('/nodedeveloper',[HireusController::class,'nodedeveloper'])->name('nodedeveloper');
Route::get('/pythondeveloper',[HireusController::class,'pythondeveloper'])->name('pythondeveloper');

// Mobile Developer
Route::get('/iosdeveloper',[HireusController::class,'iosdeveloper'])->name('iosdeveloper');
Route::get('/androiddeveloper',[HireusController::class,'androiddeveloper'])->name('androiddeveloper');
Route::get('/ionicdeveloper',[HireusController::class,'ionicdeveloper'])->name('ionicdeveloper');
Route::get('/flutterdeveloper',[HireusController::class,'flutterdeveloper'])->name('flutterdeveloper');
Route::get('/reactnativedeveloper',[HireusController::class,'reactnativedeveloper'])->name('reactnativedeveloper');

// Cms Developer
Route::get('/wordpressdeveloper',[HireusController::class,'wordpressdeveloper'])->name('wordpressdeveloper');
Route::get('/shopifydeveloper',[HireusController::class,'shopifydeveloper'])->name('shopifydeveloper');
Route::get('/magentodeveloper',[HireusController::class,'magentodeveloper'])->name('magentodeveloper');
Route::get('/drupaldeveloper',[HireusController::class,'drupaldeveloper'])->name('drupaldeveloper');

// Hireus Services
Route::get('/hiredevelopers',[HireusController::class,'hiredevelopers'])->name('hiredevelopers');

// Development Services
Route::get('/graphicsdesigners',[HireusController::class,'graphicsdesigners'])->name('graphicsdesigners');
Route::get('/webapp',[HireusController::class,'webapp'])->name('webapp');
Route::get('/webportal',[HireusController::class,'webportal'])->name('webportal');
Route::get('/mobileapp',[HireusController::class,'mobileapp'])->name('mobileapp');
Route::get('/frontenddevelopment',[HireusController::class,'frontenddevelopment'])->name('frontenddevelopment');
Route::get('/enterprisesoftware',[HireusController::class,'enterprisesoftware'])->name('enterprisesoftware');
Route::get('/offshoresoftware',[HireusController::class,'offshoresoftwarer'])->name('offshoresoftwarer');
Route::get('/aisoftwaredevelopment',[HireusController::class,'aisoftwaredevelopment'])->name('aisoftwaredevelopment');

// Support Services
Route::get('/digitalmarketing',[HireusController::class,'digitalmarketing'])->name('digitalmarketing');
Route::get('/virtualsassistant',[HireusController::class,'virtualsassistant'])->name('virtualsassistant');
Route::get('/dataanalytics',[HireusController::class,'dataanalytics'])->name('dataanalytics');

// Testing Services
Route::get('/qasoftware',[HireusController::class,'qasoftware'])->name('asoftware');

// Devops Services
Route::get('/devops',[HireusController::class,'devops'])->name('devops');

// Resource
Route::get('/zerotrust',[HireusController::class,'zerotrust'])->name('zerotrust');
Route::get('/mustad',[HireusController::class,'mustad'])->name('mustad');
Route::get('/icam',[HireusController::class,'icam'])->name('icam');
Route::get('/testimonial',[HireusController::class,'testimonial'])->name('testimonial');
Route::get('/blog',[HireusController::class,'blog'])->name('blog');

// About Us
Route::get('/aboutus',[HireusController::class,'aboutus'])->name('aboutus');

// Career
Route::get('/career',[HireusController::class,'career'])->name('career');

// Contact Us
Route::get('/contactus',[HireusController::class,'contactus'])->name('contactus');



