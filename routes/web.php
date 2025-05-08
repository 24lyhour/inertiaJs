<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HandleInertiaRequests;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('home');
});




// ------------------user

Route::get('/user' , function(){
    return Inertia::render('user',[
        'name' => 'name',
        'email' => 'email',
    ]);
});


// -------------------menu

Route::get('menu', function(){
    
    return Inertia::render('menu', [
        'menuItems' => [
            'Cake', 
            'Tea',
            'coffee'
        ],
    ]);
});



// -------------------menu

Route::get('wallet', function(){
    return Inertia::render('page/wallet', [
        'wallet' => [
            'coin' => 'coin'
        ],
    ]);
});