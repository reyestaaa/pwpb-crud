<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {

        $profile = DB::table('profile')->get();

        return view('profile.index',['profile'=>$profile]);
        
    }

    public function create()
    {
        return view('profile.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('profile')->insert([
            'nama_profile' => $request->nama_profile,
        ]);
        return redirect('profile');
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
        $profile = DB::table('profile')->where('kd_profile', $id)->first();
        return view('profile.edit', ['profile' => $profile]);
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
        DB::table('profile')->where('kd_profile', $id)->update([
            'nama_profile' => $request->nama_profile,
        ]);
        return redirect('profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus(Request $request)
    {
        $kd_profile = $request->kd_profile;

		DB::table('profile')->where('kd_profile',$kd_profile)->delete();

		return back();
    }
}
