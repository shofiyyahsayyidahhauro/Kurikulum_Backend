<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::all();
        return view('pendaftaran.index', compact('pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pendaftaran = new Pendaftaran([
            'nama' => $request->input('full_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'adress' => $request->input('address'),

        ]);
        $pendaftaran->save();
        return redirect('/')->with('success','Data Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendaftaran = Pendaftaran::find($id);
        return view('pendaftaran.edit',compact('pendaftaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pendaftaran = Pendaftaran::find($id); 
        $pendaftaran->nama = $request->input('full_name');
        $pendaftaran->email = $request->input('email');
        $pendaftaran->phone = $request->input('phone');
        $pendaftaran->adress = $request->input('address');
        $pendaftaran->save();
        return redirect('/')->with('success','Data Updated!');;

    }
    //adress salah,harusnya address..saya salah tulis di database.
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendaftaran  = Pendaftaran::find($id);
        $pendaftaran->delete();
        return redirect('/')->with('success','Data Deleted!');;
    }
}
