<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Siswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <div class="card">
                    <div class="card-header">Form Registrasi Siswa Baru</div>
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
                        <form action="{{ route('daftar_siswa') }}" method="POST">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Alamat</label>
                                <textarea name="alamat_siswa" rows="3" class="form-control">{{ old('alamat_siswa') }}</textarea>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Jenis Kelamin</label>
                                <select name="jenis_kelamin_siswa" class="form-control">
                                    <option>Pilih Jenis Kelamin</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">No. Hp</label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addon1">+62</span>
                                    <input type="number" class="form-control" name="no_hp_siswa"
                                        value="{{ old('no_hp_siswa') }}">
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Agama</label>
                                <select name="agama_siswa" class="form-control">
                                    <option>Pilih Agama</option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Konghucu</option>
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir_siswa" class="form-control" value="{{ old('tempat_lahir_siswa') }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir_siswa" value="{{ old('tanggal_lahir_siswa') }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Nama Ayah</label>
                                <input type="text" class="form-control" name="nama_ayah_siswa" value="{{ old('nama_ayah_siswa') }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Pekerjaan Ayah</label>
                                <select name="pekerjaan_ayah_siswa" class="form-control">
                                    <option>Pilih Pekerjaan Ayah</option>
                                    <option>PNS / Polri / TNI</option>
                                    <option>Petani / Nelayan</option>
                                    <option>Wiraswasta</option>
                                    <option>Buruh</option>
                                    <option>Tidak Bekerja</option>
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Penghasilan Ayah</label>
                                <input type="number" class="form-control" name="penghasilan_ayah_siswa" value="{{ old('penghasilan_ayah_siswa') }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Nama Ibu</label>
                                <input type="text" class="form-control" name="nama_ibu_siswa" value="{{ old('nama_ibu_siswa') }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Pekerjaan Ibu</label>
                                <select name="pekerjaan_ibu_siswa" class="form-control">
                                    <option>Pilih Pekerjaan Ayah</option>
                                    <option>PNS / Polri / TNI</option>
                                    <option>Petani / Nelayan</option>
                                    <option>Wiraswasta</option>
                                    <option>Buruh</option>
                                    <option>Tidak Bekerja</option>
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Penghasilan Ibu</label>
                                <input type="number" class="form-control" name="penghasilan_ibu_siswa" value="{{ old('penghasilan_ibu_siswa') }}" >
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Asal Sekolah Siswa</label>
                                <input type="text" name="nama_sekolah_siswa" class="form-control" value="{{ old('nama_sekolah_siswa') }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Nisn</label>
                                <input type="number" class="form-control" name="nisn_sekolah_siswa" value="{{ old('nisn_sekolah_siswa') }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">NIK Siswa</label>
                                <input type="number" class="form-control" name="nik_siswa" value="{{ old('nik_siswa') }}">
                            </div>
                            <button class="btn btn-dark mt-2" type="submit">Registrasi</button>
                            <a href="{{ route('login') }}" class="mt-2" style="float: right;">Sudah Punya Akun? Login disini!</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>

</html>
