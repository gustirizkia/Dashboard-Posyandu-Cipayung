<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use App\Models\IbuHamil;
use App\Models\Imunisasi;
use App\Models\Kematian;
use App\Models\Penimbangan;
use App\Models\Vitamin;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class LaporanController extends Controller
{
    public function index(){
        $balita = Balita::count();
        $ibuHamil = IbuHamil::count();
        $kematian = Kematian::count();
        $imunisasi = Imunisasi::count();
        $penimbangan = Penimbangan::count();
        $vitamin = Vitamin::count();

        return view('pages.admin.laporan.index', [
            'balita' => $balita,
            'ibu_hamil' => $ibuHamil,
            'kematian' => $kematian,
            'imunisasi' => $imunisasi,
            'penimbangan' => $penimbangan,
            'vitamin' => $vitamin
        ]);
    }

    public function balitaPrint(){
        $balita = Balita::orderBy('id', 'desc')->get();
        $date = Carbon::now()->format('d-y-m');

        $pdf = PDF::loadView('pages.admin.laporan.balita', [
            'items' => $balita,
            'date' => $date
        ]);
         return $pdf->stream();
        return $pdf->download('laporan data balita - '.$date.'.pdf');
    }

    public function ibuHamilPrint(){
        $data = IbuHamil::orderBy('id', 'desc')->get();

        $date = Carbon::now()->format('d-y-m');
        $pdf = PDF::loadView('pages.admin.laporan.ibu-hamil', [
            'items' => $data,
            'date' => $date
        ]);

         return $pdf->stream();
        return $pdf->download('laporan data ibu hamil - '.$date.'.pdf');
    }

    public function kematianPrint(){
        $data = Kematian::with('anak')->orderBy('id', 'desc')->get();

        $date = Carbon::now()->format('d-y-m');
        $pdf = PDF::loadView('pages.admin.laporan.kematian', [
            'items' => $data,
            'date' => $date
        ]);

         return $pdf->stream();
        return $pdf->download('laporan data kematian - '.$date.'.pdf');
    }

    public function imunisasiPrint(){
       $data = Imunisasi::with('anak')->orderBy('id', 'desc')->get();

       $date = Carbon::now()->format('d-y-m');
        $pdf = PDF::loadView('pages.admin.laporan.imunisasi', [
            'items' => $data,
            'date' => $date
        ]);

        return $pdf->stream();
         return $pdf->download('laporan data imunisasi - '.$date.'.pdf');
    }
    public function vitaminPrint(){
       $data = Vitamin::with('anak')->orderBy('id', 'desc')->get();

       $date = Carbon::now()->format('d-y-m');
        $pdf = PDF::loadView('pages.admin.laporan.vitamin', [
            'items' => $data,
            'date' => $date
        ]);

        return $pdf->stream();
         return $pdf->download('laporan data imunisasi - '.$date.'.pdf');
    }
    public function penimbanganPrint(){
       $data = Penimbangan::with('anak')->orderBy('id', 'desc')->get();

       $date = Carbon::now()->format('d-y-m');
        $pdf = PDF::loadView('pages.admin.laporan.penimbangan', [
            'items' => $data,
            'date' => $date
        ]);

        return $pdf->stream();
         return $pdf->download('laporan data imunisasi - '.$date.'.pdf');
    }
}
