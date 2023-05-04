@extends('layouts.master')


@section('content')
<div class="container">
    <h1>ini edit</h1>
    <form action="/warga/{{$warga->id}}" method="POST">
        @method ('put')
        @csrf
        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Nama</label>
                <input type="text" name="nama" placeholder="Masukkan Nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga->nama}}">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >NIK</label>
                <input type="text" name="nik" placeholder="Masukkan NIK" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga->nik}}">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Nomor KK</label>
                <input type="text" name="no_kk" placeholder="Masukkan Nomor KK" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga->no_kk}}">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki Laki</option>
                <option value="P">Perempuan</option>
            </select><br>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Alamat</label>
                <textarea class="form-control" name="Alamat" cols="30" rows="10" placeholder="Masukkan Alamat">{{$warga->alamat}}</textarea><br>
            </div>
            <input type="submit" value="Save" class="btn btn-info">
        <!-- <input type="text" name="nama" placeholder="Masukkan Nama" value="{{$warga->nama}}"><br>
        <input type="text" name="nik" placeholder="Masukkan NIK" value="{{$warga->nik}}"><br>
        <input type="text" name="no_kk" placeholder="Masukkan NO KK" value="{{$warga->no_kk}}"><br>
        <select name="jenis_kelamin" >
            <option value="">Pilih Jenis Kelamin</option>
            <option value="L" @if ($warga->jenis_kelamin == "L") selected @endif >Laki Laki</option>
            <option value="P" @if ($warga->jenis_kelamin == "P") selected @endif>Perempuan</option>
        </select><br>
        <textarea name="Alamat" cols="30" rows="10" placeholder="Masukkan Alamat">{{$warga->alamat}}</textarea><br>
        <input type="submit" value="Save"> -->
    </form>
</div>

@endsection