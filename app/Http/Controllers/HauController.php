<?php

namespace App\Http\Controllers;
use App\Models\Jamaah;
use Illuminate\Http\Request;
Use Carbon\Carbon;

class HauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hau.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tgl_daftar' => 'required',
            'nama_lengkap' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'keterangan' => 'required'
        ]);
        $array = $request->only([
            'tgl_daftar', 'nama_lengkap', 'tgl_lahir','alamat','no_telp','keterangan'
        ]);
        $hau = Jamaah::create($array);
        return redirect()->route('hau.create')
            ->with('success', 'Pendaftaran Berhasil, Mohon menunggu kami akan menghubungi anda');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
