<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use App\Models\Penimbangan;
use Illuminate\Http\Request;

class PenimbanganController extends Controller
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
            $data = Penimbangan::with('anak')->whereRelation('anak', 'nama_anak', 'LIKE', '%'.$q.'%')
            ->orderBy('id', 'desc')
            ->paginate(10);
        }else{
            $data = Penimbangan::with('anak')
            ->orderBy('id', 'desc')
            ->paginate(10);
        }

        return view('pages.admin.penimbangan.index', [
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
        return view('pages.admin.penimbangan.tambah', [
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

        // dd($data);
        Penimbangan::create($data);

        return redirect()->route('penimbangan.index')->with('success', 'Berhasil tambah data baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Penimbangan::with('anak')->find($id);

        return view('pages.admin.penimbangan.detail', [
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
        $item = Penimbangan::findOrFail($id);

        return view('pages.admin.penimbangan.edit', [
            'anak' => $anak,
            'item' => $item
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

        // dd($data);
        Penimbangan::find($id)->update($data);

        return redirect()->route('penimbangan.index')->with('success', 'Berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        Penimbangan::find($id)->delete();

        return redirect()->route('penimbangan.index')->with('success', 'Berhasil hapus data');

    }
}
