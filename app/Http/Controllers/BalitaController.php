<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use Illuminate\Http\Request;
Use Alert;
use Carbon\Carbon;

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

    public function show($id){
        $data = Balita::find($id);

        return view('pages.admin.balita.detail', [
            'item' => $data
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

    public function edit($id){
        $data = Balita::find($id);

        return view('pages.admin.balita.edit', [
            'item' => $data,
        ]);
    }

    public function update(Request $request, $id){
        $data = $request->except(['_token', '_method']);
        $balita = Balita::find($id)->update($data);

        return redirect()->route('balita-index')->with('success', 'Berhasil update data');

    }

    public function destroy($id){
        $data = Balita::where('id', $id)->delete();
        toast('Berhasil hapus data','success');

        return redirect()->back();
    }
}
