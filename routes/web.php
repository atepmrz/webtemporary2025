<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.master_layout');
});

//! /////////////////////  //////////////////////////////////////////////////////////  //////////////////////////////////////
//! /////////////                    ///////////////////////                    ///  ////////////////////////////////////////
//todo //////////   ///  /////////   ///////////////////////   //////////////   //  /////////////////////////////////////////
//todo //////////   /   //////////                             //////////////     ////////////////////////////////////
//* /////////////   //////////////                             //////////////   ///////////////////////////////////////////
//* /////////////   //////////////   ///////////////////////   //////////////   ///////////////////////////////////////////
//? /////////////   //////////////   ///////////////////////   //////////////   ///////////////////////////////////////////
//? ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//How to Clear All Cache from Browser
Route::get('/oc', function () {
    $exitCode = Artisan::call('optimize:clear');
    echo '<script>
        alert("Event, Views, Cache, Routes, Config, compiled clearedd")
    </script>';
});
Route::get('/cc', function () {
    Artisan::call('cache:clear');
    echo '<script>
        alert("cache clear Success")
    </script>';
});
Route::get('/ccc', function () {
    Artisan::call('config:cache');
    echo '<script>
        alert("config cache Success")
    </script>';
});
Route::get('/vc', function () {
    Artisan::call('view:clear');
    echo '<script>
        alert("view clear Success")
    </script>';
});
Route::get('/rc', function () {
    Artisan::call('route:cache');
    echo '<script>
        alert("route clear Success")
    </script>';
});
Route::get('/coc', function () {
    Artisan::call('config:clear');
    echo '<script>
        alert("config clear Success")
    </script>';
});
Route::get('/storage123', function () {
    Artisan::call('storage:link');
    echo '<script>
        alert("linked")
    </script>';
});
