@extends('Layout.drAdmin')               <!-- Menambahkan layout drAdmin -->

@section ('title', 'Tambah Data')              <!-- Judul pd tab browser -->

@section ('heading','Pendaftaran')   

@section ('body')                             <!-- Ditampilkan pada user -->
    <h2>Tambah Data</h2>
    <form action="/genre" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Lengkap">
            @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection