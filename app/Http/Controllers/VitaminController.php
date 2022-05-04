<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use App\Models\Vitamin;
use Illuminate\Http\Request;

class VitaminController extends Controller
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
            $data = Vitamin::with('anak')->whereRelation('anak', 'nama_anak', 'LIKE', '%'.$q.'%')
            ->orderBy('id', 'desc')
            ->paginate(10);
        }else{
            $data = Vitamin::with('anak')
            ->orderBy('id', 'desc')
            ->paginate(10);
        }

        return view('pages.admin.vitamin.index', [
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

        return view('pages.admin.vitamin.tambah', [
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
        Vitamin::create($data);

        return redirect()->route('vitamin.index')->with('success', 'Berhasil tambah data baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Vitamin::with('anak')->find($id);

        return view('pages.admin.vitamin.detail', [
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
        $vitamin = Vitamin::find($id);

        return view('pages.admin.vitamin.edit', [
            'anak' => $anak,
            'item' => $vitamin
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

        $data = Vitamin::find($id)->update($data);

        return redirect()->route('vitamin.index')->with('success', 'Berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Vitamin::find($id)->delete();

        return redirect()->back()->with('success', 'Berhasil hapus data');
    }
}
