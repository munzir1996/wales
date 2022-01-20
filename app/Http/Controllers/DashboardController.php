<?php

namespace App\Http\Controllers;

use App\Models\BasicInformation;
use App\Models\User;
use App\Models\Well;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $userCount = User::all()->count();
        $wellCount = Well::all()->count();
        $basicInformations = BasicInformation::latest()->take(5)->get();

        return view('dashboard', [
            'userCount' => $userCount,
            'wellCount' => $wellCount,
            'basicInformations' => $basicInformations,
        ]);
    }
}
