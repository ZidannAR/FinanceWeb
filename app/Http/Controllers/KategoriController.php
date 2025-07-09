<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $kategori = Kategori::all();
        return view('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('kategori.form');     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama_kategori'=> 'required|string|max:255',
            'tipe'=>'required|string'
        ]);
        $data = $request->all();

        $cihuy = Kategori::create($data);

        if($cihuy) return redirect('/')->with('success','data berhasil ditambahkan');
        else return redirect('/')->with('error','data gagal ditambahkan');
        

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = Kategori::findOrFail($id);

        if(!$kategori){
            return("data dengan id {$id} tidak ditemukan");
        }

        return view('kategori.form',compact('kategori'));     
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kategori = Kategori::findOrFail($id);

        $request->validate([
            'nama_kategori'=>'required|string|max:255',
            'tipe'=>'required|string'
        ]);

        $data= $request->all();

        $kategori->update($data);

        $asoy = $kategori->update();
        if($asoy) return redirect('/')->with('success','databerhasil ditambahkan');
        else return redirect('/')->with('error','data gagal ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        $pumaki = $kategori;

        if($pumaki)return redirect('/')->with('success','data berhasil dihapus');
        else return redirect('/')->with('error','data gagal dihapus');
    }
}
