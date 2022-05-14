<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use App\Models\IbuHamil;
use App\Models\Imunisasi;
use App\Models\Kematian;
use App\Models\Penimbangan;
use App\Models\User;
use App\Models\Vitamin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){

        $balita = Balita::count();
        $ibuHamil = IbuHamil::count();
        $kematian = Kematian::count();
        $imunisasi = Imunisasi::count();
        $penimbangan = Penimbangan::count();
        $vitamin = Vitamin::count();



        $grafik1 = DB::table('balitas')
            //  ->select('tan)
            ->get()
             ->groupBy(function ($date) {
                return Carbon::parse($date->tanggal_lahir)->format('Y');
            });
        $grafik2 = DB::table('kematians')
            //  ->select('tan)
            ->get()
             ->groupBy(function ($date) {
                return Carbon::parse($date->tgl_kematian)->format('Y');
            });


        // return response()->json([
        //     $grafik1
        // ]);

         return view('pages.index', [
            'balita' => $balita,
            'ibu_hamil' => $ibuHamil,
            'kematian' => $kematian,
            'imunisasi' => $imunisasi,
            'penimbangan' => $penimbangan,
            'vitamin' => $vitamin,
            'grafik' => $grafik1,
            'grafik2' => $grafik2
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
