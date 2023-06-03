<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class productUserController extends Controller
{
    public function index()
    {
        $data = [
            'data' => Products::all(),
            'title' => 'Products'
        ];
        return view('user.product', $data);
    }

    public function detail($id){
        $data = [
            'data' => Products::where('id', $id)->first(),
            'title' => 'Detail Products'
        ];
        // return view('user.detailProduct', compact('data'));
        return view('user.detailProduct', $data);
    }

    public function cart(){
        return view('user.cart');
    }
}
