<?php


namespace App\Http\Controllers;

use App\Http\Requests\DaftarRequest;
use App\Daftar;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('daftar.index', [
            'daftar' => Daftar::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftar.create', [
            'daftar' => Daftar::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DaftarRequest $request)
    {
        try {
            Daftar::create($request->all());
        } catch (\Exception $e) {
            \Log::error($e);
            return "Terjadi kesalahan";
        }

        session()->flash('simpan', 'Selamat, Anda sudah terdaftar di SMK Merdeka Belajar');
        return redirect('/index');
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
        $daftar = Daftar::findOrFail($id);
        return view('daftar.edit', compact('daftar'));
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
        try {
            $data = Daftar::findOrFail($id);
            $data->update($request->all());
        } catch (\Exception $e) {
            \Log::error($e);
            return "Terjadi kesalahan";
        }

        session()->flash('update', 'Data berhasil diubah!');
        return redirect('/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftar = Daftar::findOrFail($id);
        $daftar->delete();

        session()->flash('hapus', 'Data sudah Dihapus');
        return redirect('/index');
    }
}
