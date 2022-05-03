<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use App\Models\IbuHamil;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $user = User::get();
        $ibuHamil = IbuHamil::count();
        $balita = Balita::count();
        return view('pages.index', [
            'users' => $user,
            'userCount' => $user->count(),
            'ibu_hamil' => $ibuHamil,
            'balita' => $balita
        ]);
    }
}
