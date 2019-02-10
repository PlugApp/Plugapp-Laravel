<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Product;
use App\Http\Controllers\Controller;

class DashboardController extends Controller {

    public function index() {

        $mostViwed = Product::orderBy('view_count', 'desc')->take(10)->get()->toArray();
        $mostScanned = Product::orderBy('scan_count', 'desc')->take(10)->get()->toArray();
        $totalProducts = Product::get()->count();
        $totalViews = Product::get()->sum('view_count');
        $totalScans = Product::get()->sum('scan_count');

        
        return view('admin.dashboard', array(
            'mostViwed' => $mostViwed,
            'mostScanned' => $mostScanned,
            'totalScans' => $totalScans,
            'totalViews' => $totalViews,
            'totalProducts' => $totalProducts
        ));
    }

}