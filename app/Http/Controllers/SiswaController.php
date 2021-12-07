<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    //buat siswa baru
    function create(Request $request){

        $siswa = new Siswa;

        //cek apakah nis sudah terpakai
        if (User::where('username', $request->nis)->exists()) {
            return redirect()->back()->with('alert-danger', 'NIS sudah terpakai');
        }

        $user = User::create([
            'name' => $request->nama,
            'username' => $request->nis,
            'password' => Hash::make($request->nis),
        ]);

        $kelas = Kelas::findOrFail($request->kelas);

        $siswa->user()->associate($user);
        $siswa->kelas()->associate($kelas);

        $siswa->save();

        $user->syncRoles(['siswa']);

        return redirect('/siswa')->with('alert-success', 'Siswa berhasil ditambahkan!');

    }

    function edit(Request $request){

        $rules = [
            'id' => ['required', 'exists:siswas'],
            'kelas' => ['required', 'exists:kelas,id'], 
            'nama' => ['required', 'string', 'max:255'],
            'nis' => ['required', 'unique:users,username,'.$request->id, 'max:255', ],
        ];

        $request->validate($rules);

        $siswa = Siswa::findOrFail($request->id);
        $user = $siswa->user;
        $kelas = Kelas::findOrFail($request->kelas);

        //cek apakah nis sudah terpakai
        if (User::where('id', '<>', $user->id)->where('username', $request->nis)->exists()) {
            return view('guru.siswa.form', ['siswa' => $siswa, 'isEdit' => true, 'alertDanger' => 'NIS sudah terpakai']);
        }
        
        $user->name = $request->nama;
        $user->username = $request->nis;
        $user->save();

        $siswa->kelas()->associate($kelas);
        $siswa->save();

        return redirect('/siswa')->with('alert-success', 'Siswa berhasil diubah!');
    }

    function editView(Request $request){
        $siswa = Siswa::findOrFail($request->id);
        return view('guru.siswa.form', ['siswa' => $siswa, 'isEdit' => true]);
    }

    function destroy(Request $request){
        $siswa = Siswa::findOrFail($request->id);
        $user = $siswa->user;
        $siswa->delete();
        $user->delete();
        return redirect('/siswa')->with('alert-success', 'Siswa berhasil dihapus!');
    }
}
