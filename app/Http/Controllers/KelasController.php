<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

use Debugbar;

class KelasController extends Controller
{
    //
    public function index(){
        return view('guru.kelas.index');
    }

    public function destroy(Request $request){
        $id = $request->id;
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        Debugbar::info($kelas);
        //return to the same page with alert
        return redirect()->back()->with('alert-success', 'Data berhasil dihapus!');
    }

    public function create(Request $request){
        $kelas = new Kelas;

        //if kelas already exists, send alert
        if(Kelas::where('name', $request->nama_kelas)->exists()){
            return redirect()->back()->with('alert-danger', 'Kelas sudah ada!');
        }

        $kelas->name = $request->nama_kelas;
        $kelas->save();
        return redirect('/kelas')->with('alert-success', 'Data berhasil ditambahkan!');
    }


    //view create
    public function viewCreate(Request $request){
        return view('guru.kelas.form', ['isEdit' => false]);
    }

    // view edit
    public function edit(Request $request){
        $id = $request->id;
        $kelas = Kelas::findOrFail($id);
        return view('guru.kelas.form', ['kelas' => $kelas, 'isEdit' => true]);
    }

    //submit edit
    public function editSubmit(Request $request){
        $id = $request->id;
        $kelas = Kelas::findOrFail($id);

        //if kelas already exists, send alert
        if(Kelas::where('name', $request->nama_kelas)->exists()){
            return redirect()->back()->with('alert-danger', 'Kelas sudah ada!');
        }

        $kelas->name = $request->nama_kelas;
        $kelas->save();
        return redirect('/kelas')->with('alert-success', 'Data berhasil diubah!');
    }
}
