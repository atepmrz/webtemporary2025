<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
     public function donor()
    {
        return view('main.event.donor'); // file berada di views/main/event/donor.blade.php
    }
}
