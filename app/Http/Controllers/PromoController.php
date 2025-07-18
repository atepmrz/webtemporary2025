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
                if ($file === '.' || $file === '..') {
                    continue;
                }

                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowed_extensions)) {
                    $files[] = 'img/promo/borma/' . $file;
                }
            }

            natsort($files);
            $files = array_values($files);
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
                if ($file === '.' || $file === '..') {
                    continue;
                }

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
                if ($file === '.' || $file === '..') {
                    continue;
                }

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
                if ($file === '.' || $file === '..') {
                    continue;
                }

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
                if ($file === '.' || $file === '..') {
                    continue;
                }

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
            [
                'nama' => 'Roti Tawar Lembut Premium',
                'file' => 'promojuly1',
                'harga' => 10000,
                'produk' => [
                    ['nama' => 'Roti Tawar Lembut Premium', 'harga' => 10000, 'satuan' => 'pcs']
                ]
            ],
            [
                'nama' => 'Kanzler Cheese Frank 360gr, Beef Wiener 360gr, Cheese Bratwurst 360gr',
                'file' => 'promojuly2',
                'harga' => 48900,
                'produk' => [
                    ['nama' => 'Kanzler Cheese Frank 360gr', 'harga' => 48900, 'satuan' => 'pcs'],
                    ['nama' => 'Kanzler Beef Wiener 360gr', 'harga' => 48900, 'satuan' => 'pcs'],
                    ['nama' => 'Kanzler Cheese Bratwurst 360gr', 'harga' => 48900, 'satuan' => 'pcs']
                ]
            ],
            [
                'nama' => 'Happy Egg omega 10s, Happy Egg Daily Fresh 10s',
                'file' => 'promojuly3',
                'harga' => 28250,
                'produk' => [
                    ['nama' => 'Happy Egg Omega 10s', 'harga' => 28250, 'satuan' => 'pcs'],
                    ['nama' => 'Happy Egg Daily Fresh 10s', 'harga' => 24500, 'satuan' => 'pcs']
                ]
            ],
            [
                'nama' => 'Whiskas, Gaer Projektor, Glass, Dragon',
                'file' => 'promojuly4',
                'harga' => 113550,
                'produk' => [
                    ['nama' => 'Whiskas', 'harga' => 6000, 'satuan' => 'pcs'],
                    ['nama' => 'Gaer Projektor', 'harga' => 58950, 'satuan' => 'pcs'],
                    ['nama' => 'Glass', 'harga' => 37350, 'satuan' => 'pcs'],
                    ['nama' => 'Dragon', 'harga' => 11250, 'satuan' => 'pcs']
                ]
            ],
            [
                'nama' => 'Harvo Apel Fuji Premium Besar, Wortel Brastagi, Enoki Mushroom 100g, Ayam Dada Fillet, Beef Rendang',
                'file' => 'promojuly5',
                'harga' => 26740,
                'produk' => [
                    ['nama' => 'Harvo Apel Fuji Premium Besar', 'harga' => 5900, 'satuan' => '100g'],
                    ['nama' => 'Wortel Brastagi', 'harga' => 1590, 'satuan' => '100g'],
                    ['nama' => 'Enoki Mushroom 100g', 'harga' => 2500, 'satuan' => 'pack'],
                    ['nama' => 'Ayam Dada Fillet', 'harga' => 5250, 'satuan' => '100gr'],
                    ['nama' => 'Beef Rendang', 'harga' => 11500, 'satuan' => '100gr']
                ]
            ],
            [
                'nama' => 'Sahabat Alam Telur Kampung 6s & 10s',
                'file' => 'promojuly6',
                'harga' => 18000,
                'produk' => [
                    ['nama' => 'Sahabat Alam Telur Kampung 6s & 10s', 'harga' => 18000, 'satuan' => 'pack']
                ]
            ],
            [
                'nama' => 'Lego, Ayam, M-tech, Kit',
                'file' => 'promojuly7',
                'harga' => 67350,
                'produk' => [
                    ['nama' => 'Lego', 'harga' => 8500, 'satuan' => 'pcs'],
                    ['nama' => 'Ayam', 'harga' => 10710, 'satuan' => 'pcs'],
                    ['nama' => 'M-tech', 'harga' => 37900, 'satuan' => 'pcs'],
                    ['nama' => 'Kit', 'harga' => 10240, 'satuan' => 'pcs']
                ]
            ],
            [
                'nama' => 'Kanzler Singles Bakso Keju, Kanzler Singles Bakso Original, Kanzler Singles Bakso Hot, Kanzler Singles Bakso Gochujang, Fiesta Crispy Bubble 400g, Fiesta Stikie 400g',
                'file' => 'promojuly8',
                'harga' => 116000,
                'produk' => [
                    ['nama' => 'Kanzler Singles Bakso Keju', 'harga' => 6900, 'satuan' => 'pcs'],
                    ['nama' => 'Kanzler Singles Bakso Original', 'harga' => 6900, 'satuan' => 'pcs'],
                    ['nama' => 'Kanzler Singles Bakso Hot', 'harga' => 6900, 'satuan' => 'pcs'],
                    ['nama' => 'Kanzler Singles Bakso Gochujang', 'harga' => 6900, 'satuan' => 'pcs'],
                    ['nama' => 'Fiesta Crispy Bubble 400g', 'harga' => 41500, 'satuan' => 'pcs'],
                    ['nama' => 'Fiesta Stikie 400g', 'harga' => 46900, 'satuan' => 'pcs']
                ]
            ],
            [
                'nama' => 'Semangka Merah',
                'file' => 'promojuly9',
                'harga' => 990,
                'produk' => [
                    ['nama' => 'Semangka Merah', 'harga' => 990, 'satuan' => '100g']
                ]
            ],
        ]);

        $promoFinal = $promoList
            ->map(function ($promo) {
                $extensions = ['.jpg', '.jpeg', '.png'];
                foreach ($extensions as $ext) {
                    $path = 'img/promo/items/' . $promo['file'] . $ext;
                    if (file_exists(public_path($path))) {
                        $promo['gambar'] = asset($path);
                        
                        // Format harga untuk setiap produk
                        if (isset($promo['produk'])) {
                            $promo['produk'] = collect($promo['produk'])->map(function ($item) {
                                $satuan = $item['satuan'] ?? 'pcs'; // fallback ke 'pcs' jika tidak ada
                                $item['harga_formatted'] = 'Rp. ' . number_format($item['harga'], 0, ',', '.') . '/' . $satuan;
                                return $item;
                            })->toArray();
                        }
                        
                        return $promo;
                    }
                }
                return null;
            })
            ->filter()
            ->values();

        return view('main.home', compact('promoFinal'));
    }

public function showSelectStore(Request $request)
    {
        $produk = $request->get('produk', 'Produk');
        $harga = $request->get('harga', 0);
        $satuan = $request->get('satuan', 'pcs');


      $stores = collect([['nama' => 'Borma Gempol', 'wa' => '6282124639585', 'gambar' => 'bgp.jpg'], ['nama' => 'Borma Buah Batu', 'wa' => '6282123767001', 'gambar' => 'bbb.jpg'], ['nama' => 'Borma Cijerah', 'wa' => '6282127416745', 'gambar' => 'bcj.jpg'], ['nama' => 'Borma Cikutra', 'wa' => '6282123767002', 'gambar' => 'bck.jpg'], ['nama' => 'Borma Kerkof', 'wa' => '6282123767004', 'gambar' => 'bkk.jpg'], ['nama' => 'Prama Banjaran', 'wa' => '6282123766990', 'gambar' => 'pbj.jpg'], ['nama' => 'Prama Babakan Sari', 'wa' => '6282123766991', 'gambar' => 'pbs.jpg'], ['nama' => 'Prama Ciparay', 'wa' => '6281313088967', 'gambar' => 'pcp.jpg'], ['nama' => 'Prama Fresh Burangrang', 'wa' => '6281223725553', 'gambar' => 'fbr.jpg'], ['nama' => 'Prama Fresh Garuda', 'wa' => '6281322386181', 'gambar' => 'fgd.jpg'], ['nama' => 'Prama Fresh Mekarwangi', 'wa' => '6282164663838', 'gambar' => 'fmw.jpg'], ['nama' => 'Prama Fresh Perintis', 'wa' => '6282117433790', 'gambar' => 'fps.jpg']]);

        $storesFinal = $stores->map(function ($store) {
            $store['gambar'] = asset('img/stores/' . $store['gambar']);
            return $store;
        });
        
        $produkArray = json_decode($produk, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            $produkArray = [['nama' => $produk, 'harga' => $harga, 'satuan' => $satuan]];
        }
        
        return view('selectStore', compact('produk', 'harga', 'satuan', 'produkArray', 'storesFinal'));
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
