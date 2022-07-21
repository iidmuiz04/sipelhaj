<?php

namespace App\Http\Controllers;
use App\Models\Jadwal;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = Jadwal::all();

        return view('admin.jadwal.index',[
            'jadwal' => $jadwal
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jadwal.create');
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
            'tgl_miladiyah' => 'required',
            'tgl_huriyah' => 'required',
            'kegiatan' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'keterangan' => 'required'
        ]);
        $array = $request->only([
            'tgl_miladiyah', 'tgl_huriyah', 'kegiatan','waktu','tempat','keterangan'
        ]);
        $jadwal = Jadwal::create($array);
        return redirect()->route('jadwal.index')
            ->with('success_message', 'Berhasil menambah Jadwal Kegiatan');
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
        $jadwal = Jadwal::find($id);
        if (!$jadwal) return redirect()->route('jadwal.index')
            ->with('error_message', 'Jadwal dengan id'.$id.' tidak ditemukan');
        return view('admin.jadwal.edit', [
            'jadwal' => $jadwal
        ]);
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
        $request->validate([
            'tgl_miladiyah' => 'required',
            'tgl_huriyah' => 'required',
            'kegiatan' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'keterangan' => 'required'
    ]);
        $jadwal = Jadwal::find($id);
        $jadwal->tgl_miladiyah = $request->tgl_miladiyah;
        $jadwal->tgl_huriyah = $request->tgl_huriyah;
        $jadwal->kegiatan = $request->kegiatan;
        $jadwal->waktu = $request->waktu;
        $jadwal->tempat = $request->tempat;
        $jadwal->keterangan = $request->keterangan;
        $jadwal->save();
        return redirect()->route('jadwal.index')
            ->with('success_message', 'Berhasil mengubah ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request, $id)
    {
        $jadwal = Jadwal::where('id', $id)
        ->delete();

        return redirect()->route('jadwal.index')
        ->with('success_message', 'Berhasil menghapus Data');
    }
}
