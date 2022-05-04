<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use App\Models\Imunisasi;
use Illuminate\Http\Request;

class ImunisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->q;
        if($q){
            $data = Imunisasi::with('anak')->whereRelation('anak', 'nama_anak', 'LIKE', '%'.$q.'%')
            ->orderBy('id', 'desc')
            ->paginate(10);
        }else{
            $data = Imunisasi::with('anak')
            ->orderBy('id', 'desc')
            ->paginate(10);
        }

        return view('pages.admin.imunisasi.index', [
            'items' => $data,
            'q' => $q
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anak = Balita::get();

        return view('pages.admin.imunisasi.tambah', [
            'anak' => $anak
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        Imunisasi::create($data);

        return redirect()->route('imunisasi.index')->with('success', 'Berhasil tambah data baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Imunisasi::with('anak')->find($id);

        return view('pages.admin.imunisasi.detail', [
            'item' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anak = Balita::get();
        $imunisasi = Imunisasi::find($id);

        return view('pages.admin.imunisasi.edit', [
            'anak' => $anak,
            'item' => $imunisasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except(['_token', '_method']);

        $data = Imunisasi::find($id)->update($data);

        return redirect()->route('imunisasi.index')->with('success', 'Berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Imunisasi::find($id)->delete();

        return redirect()->back()->with('success', 'Berhasil hapus data');
    }
}
