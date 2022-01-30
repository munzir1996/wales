<?php

namespace App\Http\Controllers;

use App\Models\BasicInformation;
use App\Models\User;
use App\Models\Well;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use PDF;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $userCount = User::all()->count();
        $wellCount = Well::all()->count();
        $done = BasicInformation::where('project_status', 1)->count();
        $inProgress = BasicInformation::where('project_status', 0)->count();
        $search = $request->search;
        $basicInformations = BasicInformation::whereHas('state', function (Builder $query) use ($search) {
            $query->where('name', 'like', "%$search%");
        })->get();


        return view('dashboard', compact('basicInformations', 'done', 'inProgress', 'userCount', 'wellCount'));
    }


    public function report(Request $request)
    {
         dd($request->basicInformations);
        $basicInformations = explode("}", $request->basicInformations);
            dd($basicInformations[0]);
        $pdf = PDF::loadView('report', compact('basicInformations'));
        return $pdf->stream('report.pdf');
    }
}
