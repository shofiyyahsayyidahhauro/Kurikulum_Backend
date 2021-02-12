<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /** 
     * Display a listing of the resource
     * 
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        //
        // return view('pages.index');
        $daftar_barang = DB::table('stuff')->get();
        return dd($daftar_barang);
    }
}
