@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Warga') }}</div>

                <div class="card-body">
                <a class="btn btn-outline-primary" href="/warga/create">Add warga</a>
                    <table class="table table-hover">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>No KK</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($warga as $warga)
                        <tr>
                            <td>{{$warga->id}}</td>
                            <td>{{$warga->nama}}</td>
                            <td>{{$warga->nik}}</td>
                            <td>{{$warga->no_kk}} </td>
                            <td>{{$warga->jenis_kelamin}}</td>
                            <td>{{$warga->alamat}}</td>
                            <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-warning" href="/warga/{{$warga->id}}/edit">Edit</a>
                                <a class="btn btn-success" href="/warga/{{$warga->id}}/detail">Detail</a>
                                <form action="/warga/{{$warga->id}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-danger" type="submit" value="Delete">
                                </form>
                            </div>    
                            </td>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    
</div>
@endsection
