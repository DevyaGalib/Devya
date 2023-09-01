<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Pembayaran';
        $pembayaran = DB::table('pembayaran')
        ->join('users', 'pembayaran.id_user', 'users.id')
        ->orderByDesc('pembayaran.id_pembayaran')
        ->get();
        return view('pembayaran.index', compact('title', 'pembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Buat Pembayaran';
        return view('pembayaran.create', compact('title'));
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
            'jumlah_pembayaran' => 'required',
            'bukti_pembayaran' => 'required',
        ], $messages);

        $bukti_pembayaran = $request->file('bukti_pembayaran');
        $namabuktipembayaran = 'Pembayaran'.date('Ymdhis').'.'.$request->file('bukti_pembayaran')->getClientOriginalExtension();
        $bukti_pembayaran->move('file/pembayaran/',$namabuktipembayaran);

        $data = new Pembayaran();
        $data->jumlah_pembayaran = $request->jumlah_pembayaran;
        $data->bukti_pembayaran = $namabuktipembayaran;
        $data->id_user = $request->id_user;
        $data->save();
        return redirect()->route('pembayaran.index')->with('Sukses', 'Berhasil Buat Pembayaran');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembayaran $pembayaran)
    {
        $title = 'Edit Pembayaran';
        return view('pembayaran.edit', compact('title', 'pembayaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        $namafilepembayaran = $pembayaran->bukti_pembayaran;
        $update = [
            'id_user' => $pembayaran->id_user,
            'jumlah_pembayaran' => $request->jumlah_pembayaran,
            'bukti_pembayaran' => $namafilepembayaran,
        ];
        if ($request->bukti_pembayaran != ""){
            $request->bukti_pembayaran->move(public_path('file/pembayaran/'), $namafilepembayaran);
        }
        $pembayaran->update($update);
        return redirect()->route('pembayaran.index')->with('Sukses', 'Berhasil Edit Pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembayaran $pembayaran)
    {
        $pembayaran->delete();
        return redirect()->back()->with('sukses', 'berhasil hapus pembayaran');
    }
}
