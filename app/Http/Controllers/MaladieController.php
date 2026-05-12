<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MaladieController extends Controller
{
    public function index()
    {
        $maladies = DB::table('terme')->get();
        return view('maladie', compact('maladies'));
    }
}
