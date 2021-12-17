<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\User;

use Debugbar;

use Illuminate\Http\Request;



class JawabanController extends Controller
{
    //

    public function submitJawaban(Request $request){
        //retrieve input starts with 'soal_'
        $inputs = $request->collect()->filter(function($value, $key){
            return strpos($key, 'soal_') === 0;
        });
        //record jawaban
        foreach($inputs as $key => $value){
            $soal_id = str_replace('soal_', '', $key);
            $jawaban = Jawaban::firstOrNew(['soal_id' => $soal_id, 'user_id' => auth()->user()->id]);
            $jawaban->jawaban = $value;
            $jawaban->save();
        }

        //redirect back
        return redirect()->back();
    }

    public function submitnilai(Request $request){
        //retrieve input starts with 'soal_'
        $inputs = $request->collect()->filter(function($value, $key){
            return strpos($key, 'soal_') === 0;
        });

        Debugbar::info($inputs);

        //record nilai
        foreach($inputs as $key => $value){
            $soal_id = str_replace('soal_', '', $key);
            $jawaban = Jawaban::firstOrNew(['soal_id' => $soal_id, 'user_id' => $request->user_id]);
            $jawaban->nilai = $value ? $value : 0;
            $jawaban->save();
        }

        //redirect back
        return redirect()->route('jawaban.listsiswa', User::find($request->user_id)->siswa->kelas->id);
    }

    public function listsiswa($id){
        return view('guru.jawaban.siswa', ['id' => $id]);
    }

    public function detailjawaban($id){
        return view('guru.jawaban.detail', ['id' => $id]);
    }
}
