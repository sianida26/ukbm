<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;

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
}
