<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class productUserController extends Controller
{
    public function index()
    {
        $data = Products::all();
        return view('user.product', compact('data'));
    }
}
