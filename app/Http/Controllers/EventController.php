<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
     // Halaman utama daftar semua event
    public function index()
    {
        return view('main.event.event'); // = views/main/event/event.blade.php
    }

    public function resep()
    {
        return view('main.event.resep'); // = views/main/event/resep.blade.php
    }

    public function icecream()
    {
        return view('main.event.icecream'); // = views/main/event/icecream.blade.php
    }

    public function mewarnai()
    {
        return view('main.event.mewarnai'); // = views/main/event/mewarnai.blade.php
    }

    public function pbb()
    {
        return view('main.event.pbb'); // = views/main/event/pbb.blade.php
    }

    public function sasha()
    {
        return view('main.event.sasha'); // = views/main/event/sasha.blade.php
    }

    public function saporo()
    {
        return view('main.event.saporo'); // = views/main/event/saporo.blade.php
    }
    public function donor()
    {
        return view('main.event.donor'); // = views/main/event/donor.blade.php
    }
}
