<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    public function daftar()
    {
        return view('daftar');
    }

    public function daftar_siswa(Request $request)
    {
        $messages = [
            'required' => 'atribut wajib diisi',
        ];
        $request->validate([
            'name' => 'required',
            'email' => 'required', 
            'password' => 'required',
            'alamat_siswa' => 'required',
            'jenis_kelamin_siswa' => 'required', 
            'no_hp_siswa' => 'required',
            'agama_siswa' => 'required',
            'tempat_lahir_siswa' => 'required',
            'tanggal_lahir_siswa' => 'required',
            'nama_ayah_siswa' => 'required',
            'pekerjaan_ayah_siswa' => 'required',
            'penghasilan_ayah_siswa' => 'required',
            'nama_ibu_siswa' => 'required',
            'pekerjaan_ibu_siswa' => 'required',
            'penghasilan_ibu_siswa' => 'required',
            'nama_sekolah_siswa' => 'required',
            'nisn_sekolah_siswa' => 'required',
            'nik_siswa' => 'required',
        ], $messages);
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->role = 'Siswa';
        $data->save();

        $siswa = new Siswa();
        $siswa->id_user = $data->id;
        $siswa->alamat_siswa = $request->alamat_siswa;
        $siswa->jenis_kelamin_siswa = $request->jenis_kelamin_siswa;
        $siswa->no_hp_siswa = $request->no_hp_siswa;
        $siswa->agama_siswa = $request->agama_siswa;
        $siswa->tempat_lahir_siswa = $request->tempat_lahir_siswa;
        $siswa->tanggal_lahir_siswa = $request->tanggal_lahir_siswa;
        $siswa->nama_ayah_siswa = $request->nama_ayah_siswa;
        $siswa->pekerjaan_ayah_siswa = $request->pekerjaan_ayah_siswa;
        $siswa->penghasilan_ayah_siswa = $request->penghasilan_ayah_siswa;
        $siswa->nama_ibu_siswa = $request->nama_ibu_siswa;
        $siswa->pekerjaan_ibu_siswa = $request->pekerjaan_ibu_siswa;
        $siswa->penghasilan_ibu_siswa = $request->penghasilan_ibu_siswa;
        $siswa->nama_sekolah_siswa = $request->nama_sekolah_siswa;
        $siswa->nisn_sekolah_siswa = $request->nisn_sekolah_siswa;
        $siswa->nik_siswa = $request->nik_siswa;
        $siswa->save();
        return redirect('notif');
        
    }

    public function notif()
    {
        return view('notif');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
