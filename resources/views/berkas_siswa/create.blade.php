@extends('layouts.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Error!</strong>
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('berkas_siswa.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    @if (Auth::user()->role == 'Siswa')
                    <input type="hidden" name="id_user" id="" value="{{ Auth::user()->id }}">
                    @endif
                    <div class="form-group mb-2">
                        <label for="">KTP Ayah/ibu</label>
                        <input type="file" name="ktp_berkas_siswa" class="form-control" accept="application/pdf,application/vnd.ms-excel" />
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Kartu Keluarga</label>
                        <input type="file" name="kk_berkas_siswa" class="form-control" accept="application/pdf,application/vnd.ms-excel" />
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Akta Kelahiran</label>
                        <input type="file" name="akta_berkas_siswa" class="form-control" accept="application/pdf,application/vnd.ms-excel" />
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-dark"><i class="fas fa-save fa-pulse"> </i> Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
