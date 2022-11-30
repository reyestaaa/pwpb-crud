<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontakController extends Controller
{
    public function index()
    {

        $kontak = DB::table('kontak')->get();

        return view('kontak.index',['kontak'=>$kontak]);
        
    }

    public function create()
    {
        return view('kontak.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('kontak')->insert([
            'nama_kontak' => $request->nama_kontak,
        ]);
        return redirect('kontak');
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
        $kontak = DB::table('kontak')->where('kd_kontak', $id)->first();
        return view('kontak.edit', ['kontak' => $kontak]);
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
        DB::table('kontak')->where('kd_kontak', $id)->update([
            'nama_kontak' => $request->nama_kontak,
        ]);
        return redirect('kontak');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus(Request $request)
    {
        $kd_kontak = $request->kd_kontak;

		DB::table('kontak')->where('kd_kontak',$kd_kontak)->delete();

		return back();
    }
}

