<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index(){
        $warga = Warga::all();
        // $warga = Warga::paginate(2);
        return view('warga.index', compact(['warga']));
    }
    public function create(){
        return view('warga.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        Warga::create($request -> except(['_token','submit']));
        return redirect('/warga');
    }
    public function edit($id)
    {
        // dd($id);
        $warga = Warga::find($id);
        return view('warga.edit', compact(['warga']));
    }
    public function update($id, Request $request)
    {
        $warga = Warga::find($id);
        $warga->update($request -> except(['_token','submit']));
        return redirect('/warga');
    }
    public function destroy($id)
    {
        $warga = Warga::find($id);
        $warga->delete();
        return redirect('/warga');
    }
    public function detail($id)
    {
        $warga = Warga::find($id);
        return view('warga.detail', compact(['warga']));
    }
}
