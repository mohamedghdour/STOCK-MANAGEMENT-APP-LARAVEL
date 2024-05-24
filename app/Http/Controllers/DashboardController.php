<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\Commande;
use App\Models\Supplier;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(){
        $currentDate = Carbon::now();

// Calculate the date five months ago
        $fiveMonthsAgo = $currentDate->subMonths(5);
        $stats=Commande::selectRaw('MONTH(created_at) as month, SUM(quantity) as total_quantity')
        ->where('created_at', '>', $fiveMonthsAgo)
        ->groupBy('month')
        ->orderBy('month')
        ->orderBy('month')
        ->get();
        foreach($stats as $stat){
            $data[]=$stat->total_quantity;
        }
        
        $totalcommandes=Commande::groupBy('id')->count();
        $produitsvendu=Commande::sum('quantity');
        $produitsenstock=Product::sum('quantity');
        $totalsuppliers=Supplier::count();
        return view('admin.dashboard',compact('totalcommandes','produitsvendu','produitsenstock','totalsuppliers','data'));
    }
}
