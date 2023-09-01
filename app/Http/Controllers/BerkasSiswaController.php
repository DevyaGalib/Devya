<?php

namespace App\Http\Controllers;

use App\Models\BerkasSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerkasSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Berkas Siswa';
        $berkas_siswa = DB::table('berkas_siswa')
        ->join('users', 'berkas_siswa.id_user', 'users.id')
        ->get();
        return view('berkas_siswa.index', compact('title', 'berkas_siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Berkas Siswa';
        return view('berkas_siswa.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Atribut Wajib Diisi',
        ];
        $request->validate([
            'kk_berkas_siswa' => 'required',
            'akta_berkas_siswa' => 'required',
            'ktp_berkas_siswa' => 'required',
        ], $messages);

        $kk_berkas_siswa = $request->file('kk_berkas_siswa');
        $namaberkaskksiswa = 'Kartu Keluarga'.date('Ymdhis').'.'.$request->file('kk_berkas_siswa')->getClientOriginalExtension();
        $kk_berkas_siswa->move('file/kk/',$namaberkaskksiswa);

        $akta_berkas_siswa = $request->file('akta_berkas_siswa');
        $namaberkasaktasiswa = 'Akta'.date('Ymdhis').'.'.$request->file('akta_berkas_siswa')->getClientOriginalExtension();
        $akta_berkas_siswa->move('file/akta/',$namaberkasaktasiswa);

        $ktp_berkas_siswa = $request->file('ktp_berkas_siswa');
        $namaberkasktpsiswa = 'KTP'.date('Ymdhis').'.'.$request->file('ktp_berkas_siswa')->getClientOriginalExtension();
        $ktp_berkas_siswa->move('file/ktp/',$namaberkasktpsiswa);

        $data = new BerkasSiswa();
        $data->id_user = $request->id_user;
        $data->kk_berkas_siswa = $namaberkaskksiswa;
        $data->akta_berkas_siswa = $namaberkasaktasiswa;
        $data->ktp_berkas_siswa = $namaberkasktpsiswa;
        $data->save();
        return redirect()->route('berkas_siswa.index')->with('Sukses', 'Berhasil Tambah Berkas Siswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(BerkasSiswa $berkasSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BerkasSiswa $berkasSiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BerkasSiswa $berkasSiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $berkas_siswa = BerkasSiswa::find($id);
        $berkas_siswa->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Berkas Siswa');
    }
}
