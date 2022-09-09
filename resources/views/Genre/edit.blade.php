@extends('Layout.drAdmin')                              <!-- Menambahkan layout drAdmin -->

@section ('title', 'Edit Data')                               <!-- Judul pd tab browser -->

@section ('heading','Ubah Data')   

@section ('body')    
<div>
    <h2>Edit genre {{$genre->id}}</h2>
    <form action="/genre/{{$genre->id}}" method="POST"><!-- force method POST menjadi PUT -->
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" value="{{$genre->nama}}" id="nama" placeholder="Masukkan Nama">
            @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>

@endsection

@section ('footer')    

@endsection