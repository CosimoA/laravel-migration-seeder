<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

use Illuminate\Support\Carbon;

class MainController extends Controller
{
    public function home() {
        // $trains = Train::all();
        $trains = Train::whereDate('start_time', Carbon::today())->get();
        return view('pages.home', compact('trains'));
    }
}

// use Illuminate\Support\Facades\DB;

// class MainController extends Controller
// {
//     public function home() {
//         // $trains = Train::all();
//         $today = date('Y-m-d');
//         $trains = DB::table('trains')->whereDate('start_time', '=', $today)->get();        
        
//         return view('pages.home', compact('trains'));
//     }
// }
