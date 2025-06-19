<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    public function index(){
        $words = Word::all();
        return view('welcome', compact('words'));
    }

    public function save_word(Request $request){
        $word = new Word();

        // Assign values from the request
        $word->english_word = $request->input('main_word');
        $word->meaning = $request->input('translate_word');
        $word->notes = $request->input('notes'); 
        $word->save();
        
        return redirect()->route('home')->with('success', 'Word added successfully!');
    }
}
