<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    public function index()
    {

        $berita = DB::table('berita')->get();

        return view('berita.index',['berita'=>$berita]);
        
    }

    
    public function create()
    {
        return view('berita.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('berita')->insert([
            'nama_berita' => $request->nama_berita,
        ]);
        return redirect('berita');
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
        $berita = DB::table('berita')->where('kd_berita', $id)->first();
        return view('berita.edit', ['berita' => $berita]);
    }

    public function edit1(Request $request)
    {
    	DB::table('berita')->where('kd_berita',$request->kd_berita)->update([
		
			'nama_berita' => $request->nama_berita,

		]);
		// alihkan halaman ke halaman berita
		return redirect('/berita');
 
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
        DB::table('berita')->where('kd_berita', $id)->update([
            'nama_berita' => $request->nama_berita,
        ]);
        return redirect('berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus(Request $request)
    {
        $kd_berita = $request->kd_berita;
		DB::table('berita')->where('kd_berita',$kd_berita)->delete();

		return redirect('/berita');
    }
}

