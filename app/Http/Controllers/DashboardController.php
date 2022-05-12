<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use App\Models\IbuHamil;
use App\Models\Imunisasi;
use App\Models\Kematian;
use App\Models\Penimbangan;
use App\Models\User;
use App\Models\Vitamin;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $balita = Balita::count();
        $ibuHamil = IbuHamil::count();
        $kematian = Kematian::count();
        $imunisasi = Imunisasi::count();
        $penimbangan = Penimbangan::count();
        $vitamin = Vitamin::count();

         return view('pages.index', [
            'balita' => $balita,
            'ibu_hamil' => $ibuHamil,
            'kematian' => $kematian,
            'imunisasi' => $imunisasi,
            'penimbangan' => $penimbangan,
            'vitamin' => $vitamin
        ]);

        // return view('pages.admin.laporan.index', [
        //     'balita' => $balita,
        //     'ibu_hamil' => $ibuHamil,
        //     'kematian' => $kematian,
        //     'imunisasi' => $imunisasi,
        //     'penimbangan' => $penimbangan,
        //     'vitamin' => $vitamin
        // ]);
    }
}
