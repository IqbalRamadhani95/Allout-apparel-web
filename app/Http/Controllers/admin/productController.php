<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class productController extends Controller
{
    public function index()
    {
        $data = [
            'data' => Products::latest()->get()
        ];
        // dd($data);
        return view('admin.produkAdmin', $data);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'nama' => 'required',
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'deskripsi' => 'required',
            'harga' => 'required',
            'kategori' => 'required'
        ]);

        //upload image
        $foto = $request->file('foto');
        $foto->storeAs('images', $foto->hashName());

        Products::create([
            'nama' => $request->nama,
            'foto' => $foto->hashName(),
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'kategori' => $request->kategori
        ]);

        return redirect('/product_admin');
        // dd($request->all());
    }

    public function update(Request $request)
    {

        $foto_update = $request->file('foto_update');

        if ($foto_update != '') {
            $foto_update->storeAs('images', $foto_update->hashName());

            Products::where('id', $request->id)->update([
                'nama' => $request->nama,
                'foto' => $foto_update->hashName(),
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'kategori' => $request->kategori
            ]);
        } else {
            Products::where('id', $request->id)->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'kategori' => $request->kategori
            ]);
        }

        return redirect('/product_admin');
    }

    public function delete($id)
    {
        Products::findOrFail($id)->delete();
        return redirect('/product_admin');
    }
}
