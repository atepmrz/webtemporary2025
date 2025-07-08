<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function showBanner()
    {
        return view('main.home');
    }

    public function showMailerBorma()
    {
        $files = [];
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'svg'];
        $directory = public_path('img/promo/borma/');

        if (is_dir($directory)) {
            $allFiles = scandir($directory);

            foreach ($allFiles as $file) {
                if ($file === '.' || $file === '..') continue;

                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowed_extensions)) {
                    $files[] = 'img/promo/borma/' . $file;
                }
            }
        }
        return view('main.promosi.katalogBorma', compact('files'));
    }

    public function showMailerFresh()
    {
        $files = [];
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'svg'];
        $directory = public_path('img/promo/fresh/');

        if (is_dir($directory)) {
            $allFiles = scandir($directory);

            foreach ($allFiles as $file) {
                if ($file === '.' || $file === '..') continue;

                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowed_extensions)) {
                    $files[] = 'img/promo/fresh/' . $file;
                }
            }
        }
        return view('main.promosi.katalogFresh', compact('files'));
    }

    public function showPromoGajian()
    {
        $files = [];
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'svg'];
        $directory = public_path('img/promo/gajian');

        if (is_dir($directory)) {
            $allFiles = scandir($directory);

            foreach ($allFiles as $file) {
                if ($file === '.' || $file === '..') continue;

                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowed_extensions)) {
                    $files[] = 'img/promo/gajian/' . $file;
                }
            }
        }
        return view('main.promosi.proGajian', compact('files'));
    }

    public function showPromoCarnival()
    {
        $files = [];
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'svg'];
        $directory = public_path('img/promo/carnival');

        if (is_dir($directory)) {
            $allFiles = scandir($directory);

            foreach ($allFiles as $file) {
                if ($file === '.' || $file === '..') continue;

                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowed_extensions)) {
                    $files[] = 'img/promo/carnival/' . $file;
                }
            }
        }

        return view('main.promosi.proCarnival', compact('files'));
    }

    public function showPromoJSM()
    {
        $files = [];
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'svg'];
        $directory = public_path('img/promo/jsm');

        if (is_dir($directory)) {
            $allFiles = scandir($directory);

            foreach ($allFiles as $file) {
                if ($file === '.' || $file === '..') continue;

                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowed_extensions)) {
                    $files[] = 'img/promo/jsm/' . $file;
                }
            }
        }

        return view('main.promosi.proJsm', compact('files'));
    }

    public function showPromoHome()
    {
        $promoList = collect([
            ['nama' => 'Apel Fuji, Enoki Mushroom, Pear, Tenderlion Slice, Sirloin Slice', 'file' => 'Apel Fuji, Enoki Mushroom, Pear, Tenderlion Slice, Sirloin Slice'],
            ['nama' => 'Apel Pacific Rose, Queen, Apel Royal Gala', 'file' => 'Apel Pacific Rose, Queen, Apel Royal Gala'],
            ['nama' => 'Cimory Eat Milk', 'file' => 'Cimory Eat Milk'],
            ['nama' => 'Happy Egg Omega & Daily', 'file' => 'Happy Egg Omega & Daily'],
            ['nama' => 'Joyday Double Scoop', 'file' => 'Joyday Double Scoop'],
            ['nama' => 'Mabell Nugget Ayam 500gr', 'file' => 'Mabell Nugget Ayam 500gr'],
            ['nama' => 'Mabell Single MB', 'file' => 'Mabell Single MB'],
        ]);

        $promoFinal = $promoList->map(function ($promo) {
            $extensions = ['.jpg', '.jpeg', '.png'];
            foreach ($extensions as $ext) {
                $path = 'img/promo/items/' . $promo['file'] . $ext;
                if (file_exists(public_path($path))) {
                    $promo['gambar'] = asset($path);
                    return $promo;
                }
            }
            return null;
        })->filter()->values();

        return view('main.home', compact('promoFinal'));
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Promo $promo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promo $promo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promo $promo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promo $promo)
    {
        //
    }
}
