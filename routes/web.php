<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\MpanelController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PromoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PromoController::class, 'showPromoHome']);

//
Route::get('/gebyar-lebaran', function () {
    return view('main.promosi.promosi_seasonal.promoGebyarLebaran');
});
Route::get('/promo-nugget', function () {
    return view('main.promosi.promosi_seasonal.promoNugget');
});
Route::get('/promo-double', function () {
    return view('main.promosi.promosi_seasonal.promoDoubleDate');
});
Route::get('/promo-hampers', function () {
    return view('main.promosi.promosi_seasonal.promoHampers');
});

Route::get('/lns', function () {
    return view('main.promosi.promosi_seasonal.promoLns');
});

Route::get('/mudik-seru', function () {
    return view('main.promosi.promosi_seasonal.promoMudik');
});

Route::get('/kue-sirup', function () {
    return view('main.promosi.promosi_seasonal.promoKueSirup');
});


Route::get('/kat-pramaborma',[PromoController::class, 'showMailerBorma']);
Route::get('/kat-pramafresh',[PromoController::class, 'showMailerFresh']);

// Route::get('/carnival', function () {
//     return view('main.promosi.proCarnival');
// });

Route::get('/promo-carnival', [PromoController::class, 'showPromoCarnival']);
Route::get('/promo-jsm', [PromoController::class, 'showPromoJSM']);
Route::get('/promo-fashion', function () {
    return view('main.promosi.proFashion');
});
// Ini adalah route yang sebelumnya //
// Route::get('/promo-gajian', function () {
//     return view('main.promosi.proGajian');
// });

// Ini adalah route yang terbaru/fix //
Route::get('/promo-gajian', [PromoController::class, 'showPromoGajian']);

Route::get('/promo-pintar', function () {
    return view('main.promosi.proPintar');
});


Route::get('/promo-selaras', function () {
    return view('main.promosi.proSelaras');
});

Route::get('/promo-givemefive', function () {
    return view('main.promosi.proGiveMeFive');
});

Route::get('/layar', function () {
    return view('main.layanan.layar');
});

Route::get('/customerCare', function () {
    return view('main.layanan.cusCare');
});

Route::get('/voucher', function () {
    return view('main.layanan.voucher');
});

Route::get('/lokasi', function () {
    return view('main.layanan.lokasi');
});

// ini route yang baru //
Route::get('/event', [EventController::class, 'index'])->name('event.index');

Route::get('/event/resep', [EventController::class, 'resep'])->name('event.resep');
Route::get('/event/icecream', [EventController::class, 'icecream'])->name('event.icecream');
Route::get('/event/mewarnai', [EventController::class, 'mewarnai'])->name('event.mewarnai');
Route::get('/event/pbb', [EventController::class, 'pbb'])->name('event.pbb');
Route::get('/event/sasha', [EventController::class, 'sasha'])->name('event.sasha');
// Route::get('/event/saporo', [EventController::class, 'saporo'])->name('event.saporo');

//ini route News//
Route::get('/news/donor', [NewsController::class, 'donor'])->name('news.donor');

// sementara yang sebelumnya di off //
// Route::get('/event', function () {
//     return view('main.event.event');
// });

// Route::get('/pbb', function () {
//     return view('main.event.pbb');
// });

// Route::get('/kat', function () {
//     return view('main.event.kat');
// });

// Route::get('/reguler', function () {
//     return view('main.event.reguler');
// });

Route::get('/visimisi', function () {
    return view('main.tentang.pramaBorma');
});

Route::get('/csr', function () {
    return view('main.tentang.csr');
});

Route::get('/karir', function () {
    return view('main.tentang.karir');
});

Route::get('/mpanel', [MpanelController::class, 'index']);
Route::post('/homePanel', [MpanelController::class, 'login']);





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
        alert("Event, Views, Cache, Routes, Config, compiled cleared")
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
