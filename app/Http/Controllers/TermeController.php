<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Terme;

class TermeController extends Controller
{
public function index()
{
    $termes = DB::table('terme')->get();
    return view('chaine', compact('termes'));
}
}