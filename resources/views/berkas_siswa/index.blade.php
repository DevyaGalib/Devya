@extends('layouts.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                    @if (Auth::user()->role == 'Siswa')
                    <a href="{{ route('berkas_siswa.create') }}" class="btn btn-dark btn-sm" style="float: right;"><i class="fas fa-plus">Tambah</i></a>
                    @endif
                </div>
                <div class="card-body table table-responsive">
                    @if ($message = Session::get('Sukses'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ $message }}
                    </div>
                    @endif
                    <table class="table table-bordered" id="example2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Akta</th>
                                <th>KK</th>
                                <th>KTP</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($berkas_siswa as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td><a href="{{ asset('file/akta/'.$row->akta_berkas_siswa) }}" class="btn btn-warning"><i class="fas fa-download"></i></a></td>
                                    <td><a href="{{ asset('file/kk/'.$row->kk_berkas_siswa) }}" class="btn btn-warning"><i class="fas fa-download"></i></a></td>
                                    <td><a href="{{ asset('file/ktp/'.$row->ktp_berkas_siswa) }}" class="btn btn-warning"><i class="fas fa-download"></i></a></td>
                                    <td>
                                        <form action="{{ route('berkas_siswa.destroy', $row->id_berkas_siswa) }}" method="POST" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-xs btn-flat show_confirm"><i class="fas fa-trash"> Delete</i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection