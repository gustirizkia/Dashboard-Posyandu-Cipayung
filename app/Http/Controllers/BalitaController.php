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
        $kondisiBeratBadan = 'Normal';
        $tinggiBadan = 'Normal';
        $idealBerat = null;
        $idealTinggi = null;

        // cek jenis kelamin
        if($data->jenis_kelamin === 'Prempuan'){
            // jika umur 1 tahun 7 s.d 11 kg show normal
            if($data->umur === 1){
                $idealBerat = '7 - 11 kg';
                if($data->berat_badan < 7){
                    $kondisiBeratBadan = 'Kurang';
                }elseif($data->berat_badan > 11){
                    $kondisiBeratBadan = 'Berat Badan Lebih';
                }
            }elseif($data->umur === 2){
                $idealBerat = '9 - 14 kg';
                if($data->berat_badan < 9){
                    $kondisiBeratBadan = 'Kurang';
                }elseif($data->berat_badan > 14){
                    $kondisiBeratBadan = 'Berat Badan Lebih';
                }
            }elseif($data->umur === 3){
                $idealBerat = '11 - 18 kg';
                if($data->berat_badan < 11){
                    $kondisiBeratBadan = 'Kurang';
                }elseif($data->berat_badan > 18){
                    $kondisiBeratBadan = 'Berat Badan Lebih';
                }
            }elseif($data->umur === 4){
                $idealBerat = '12 - 21 kg';
                if($data->berat_badan < 12){
                    $kondisiBeratBadan = 'Kurang';
                }elseif($data->berat_badan > 21){
                    $kondisiBeratBadan = 'Berat Badan Lebih';
                }
            }elseif($data->umur === 5){
                $idealBerat = '14 - 25 kg';
                if($data->berat_badan < 14){
                    $kondisiBeratBadan = 'Kurang';
                }elseif($data->berat_badan > 25){
                    $kondisiBeratBadan = 'Berat Badan Lebih';
                }
            }
        }else{
            if($data->umur === 1){
                $idealBerat = '8 - 12 kg';
                if($data->berat_badan < 8){
                    $kondisiBeratBadan = 'Kurang';
                }elseif($data->berat_badan > 12){
                    $kondisiBeratBadan = 'Berat Badan Lebih';
                }
            }elseif($data->umur === 2){
                $idealBerat = '10 - 15 kg';
                if($data->berat_badan < 10){
                    $kondisiBeratBadan = 'Kurang';
                }elseif($data->berat_badan > 15){
                    $kondisiBeratBadan = 'Berat Badan Lebih';
                }
            }elseif($data->umur === 3){
                $idealBerat = '11 - 19 kg';
                if($data->berat_badan < 11){
                    $kondisiBeratBadan = 'Kurang';
                }elseif($data->berat_badan > 19){
                    $kondisiBeratBadan = 'Berat Badan Lebih';
                }
            }elseif($data->umur === 4){
                $idealBerat = '13 - 21 kg';
                if($data->berat_badan < 13){
                    $kondisiBeratBadan = 'Kurang';
                }elseif($data->berat_badan > 21){
                    $kondisiBeratBadan = 'Berat Badan Lebih';
                }
            }elseif($data->umur === 5){
                $idealBerat = '14 - 24 kg';
                if($data->berat_badan < 14){
                    $kondisiBeratBadan = 'Kurang';
                }elseif($data->berat_badan > 24){
                    $kondisiBeratBadan = 'Berat Badan Lebih';
                }
            }
        }

        // tinggi badan
        if($data->jenis_kelamin === 'Prempuan'){
            // jika umur 1 tahun 7 s.d 11 kg show normal
            if($data->umur === 1){
                $idealTinggi = '69 - 79 cm';
                if($data->tinggi_badan < 69){
                    $tinggiBadan = 'Kurang tinggi';
                }elseif($data->tinggi_badan > 79){
                    $tinggiBadan = 'Terlalu tinggi';
                }
            }elseif($data->umur === 2){
                $idealTinggi = '80 - 93 cm';
                if($data->tinggi_badan < 80){
                    $tinggiBadan = 'Kurang tinggi';
                }elseif($data->tinggi_badan > 93){
                    $tinggiBadan = 'Terlalu tinggi';
                }
            }elseif($data->umur === 3){
                $idealTinggi = '87 - 103 cm';
                if($data->tinggi_badan < 87){
                    $tinggiBadan = 'Kurang tinggi';
                }elseif($data->tinggi_badan > 103){
                    $tinggiBadan = 'Terlalu tinggi';
                }
            }elseif($data->umur === 4){
                $idealTinggi = '94 - 111 cm';
                if($data->tinggi_badan < 94){
                    $tinggiBadan = 'Kurang tinggi';
                }elseif($data->tinggi_badan > 111){
                    $tinggiBadan = 'Terlalu tinggi';
                }
            }elseif($data->umur === 5){
                $idealTinggi = '100 - 119 cm';
                if($data->tinggi_badan < 100){
                    $tinggiBadan = 'Kurang tinggi';
                }elseif($data->tinggi_badan > 119){
                    $tinggiBadan = 'Terlalu tinggi';
                }
            }
        }else{
            if($data->umur === 1){
                $idealTinggi = '71 - 80 cm';
                if($data->tinggi_badan < 71){
                    $tinggiBadan = 'Kurang tinggi';
                }elseif($data->tinggi_badan > 80){
                    $tinggiBadan = 'Terlalu tinggi';
                }
            }elseif($data->umur === 2){
                $idealTinggi = '82 - 94 cm';
                if($data->tinggi_badan < 82){
                    $tinggiBadan = 'Kurang tinggi';
                }elseif($data->tinggi_badan > 94){
                    $tinggiBadan = 'Terlalu tinggi';
                }
            }elseif($data->umur === 3){
                $idealTinggi = '89 - 103 cm';
                if($data->tinggi_badan < 89){
                    $tinggiBadan = 'Kurang tinggi';
                }elseif($data->tinggi_badan > 103){
                    $tinggiBadan = 'Terlalu tinggi';
                }
            }elseif($data->umur === 4){
                $idealTinggi = '95 - 112 cm';
                if($data->tinggi_badan < 95){
                    $tinggiBadan = 'Kurang tinggi';
                }elseif($data->tinggi_badan > 112){
                    $tinggiBadan = 'Terlalu tinggi';
                }
            }elseif($data->umur === 5){
                $idealTinggi = '101 - 119 cm';
                if($data->tinggi_badan < 101){
                    $tinggiBadan = 'Kurang tinggi';
                }elseif($data->tinggi_badan > 119){
                    $tinggiBadan = 'Terlalu tinggi';
                }
            }
        }

        // dd($kondisiBeratBadan);


        return view('pages.admin.balita.detail', [
            'item' => $data,
            'kondisi_berat_badan' => $kondisiBeratBadan,
            'ideal_berat' => $idealBerat,
            'ideal_tinggi' => $idealTinggi,
            'kondisi_tinggi' => $tinggiBadan
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
