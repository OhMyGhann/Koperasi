<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Spatie\Permission\Models\Role;
use App\Models\Nasabah;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usersCount = User::count(); // Menghitung jumlah data user
        $productsCount = Product::count(); // Menghitung jumlah data product
        $rolesCount = Role::count();
        $nasabahCount = Nasabah::count(); // Menghitung jumlah data role
        
        return view('home', compact('usersCount', 'productsCount', 'rolesCount', 'nasabahCount'));
    }
}
