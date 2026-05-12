<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SourceController extends Controller
{
    public function index()
{
    $sources = DB::table('terme')->get();
    return view('source', compact('sources'));
}
}
