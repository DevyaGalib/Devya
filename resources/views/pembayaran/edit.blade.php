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
                    <form action="{{ route('pembayaran.update', $pembayaran->id_pembayaran) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                        <div class="form-group mb-2">
                            <label for="">Jumlah Pembayaran</label>
                            <input type="number" class="form-control" name="jumlah_pembayaran" value="{{ $pembayaran->jumlah_pembayaran }}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Bukti Pembayaran</label>
                            <input type="file" class="form-control" name="bukti_pembayaran">
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
