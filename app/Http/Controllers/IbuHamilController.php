<?php

namespace App\Http\Controllers;

use App\Models\IbuHamil;
use Illuminate\Http\Request;

class IbuHamilController extends Controller
{
    public function index(Request $request){
        $q = $request->q;
        $data = IbuHamil::when($q, function($data, $q){
            return $data->where('nama_ibu', 'LIKE', '%'.$q.'%');
        })
        ->orderBy('id', 'desc')
        ->paginate(10);

        return view('pages.admin.ibu-hamil.index', [
            'items' => $data,
            'q' => $q
        ]);
    }

    public function show($id){
        $data = IbuHamil::findOrFail($id);

        return view('pages.admin.ibu-hamil.detail', [
            'item' => $data
        ]);
    }

    public function tambah(){
        return view('pages.admin.ibu-hamil.tambah');
    }

    public function store(Request $request){
        $data = $request->except(['_token']);
        $insert = IbuHamil::insert($data);

        return redirect()->route('ibu-hamil-index')->with('success', 'Berhasil simpan data baru');
    }

    public function edit($id){
        $data = IbuHamil::findOrFail($id);
        return view('pages.admin.ibu-hamil.edit', [
            'item' => $data
        ]);
    }

    public function update($id, Request $request){
        $data = $request->except(['_token', '_method']);
        $ibuHamil = IbuHamil::find($id);

        // dd($data);
        $ibuHamil->update($data);

        return redirect()->route('ibu-hamil-index')->with('success', 'Berhasil update data');
    }

    public function destroy($id){
        $data = IbuHamil::where('id', $id)->delete();
        toast('Berhasil hapus data','success');

        return redirect()->back();
    }
}
