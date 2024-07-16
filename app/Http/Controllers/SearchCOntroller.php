<?php

namespace App\Http\Controllers;
use App\Models\Kelas;

use Illuminate\Http\Request;

class SearchCOntroller extends Controller
{
    public function search(Request $request){
        $query = $request->input('search');
        $results = Kelas::where
    }
}
