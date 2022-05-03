<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use Illuminate\Http\Request;
Use Alert;


class BalitaController extends Controller
{
    public function index(Request $request){
        $q = $request->q;
        // dd($q);
        $data = Balita::when($q, function($data, $q){
            return $data->where('nama_anak', 'LIKE', '%'.$q.'%');
        })
        ->orderBy('id', 'desc')
        ->paginate(10);


        return view('pages.admin.balita.index', [
            'items' => $data,
            'q' => $q
        ]);
    }

    public function tambah(){
        return view('pages.admin.balita.tambah');
    }

    public function store(Request $request){
        $data = $request->except(['_token']);
        // dd($data);
        $insert = Balita::insert($data);

        return redirect()->route('balita-index')->with('success', 'Berhasil simpan data baru');
    }

    public function destroy($id){
        $data = Balita::where('id', $id)->delete();
        toast('Berhasil hapus data','success');

        return redirect()->back();
    }
}
