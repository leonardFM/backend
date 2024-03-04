@extends('layouts')

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2><strong>Umkm </strong></h2>
        </div>
        <div class="col-md-6 text-md-end">
            <a href="{{ route('umkm_create') }}" class="btn btn-primary mb-3">Tambah Baru</a>
        </div>
    </div>
    <hr>
    <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th style="width: 65%;">Title</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($umkm as $m)
        <tr>
            <td>
                <div>
                    <p>{{ $m->title }}</p>
                    <small class="status"><strong>PENGUMUMAN</strong></small>  <small class="status">BERITA DUKA | Minggu, 15 Februari 2024</small> <small class="status">By Leonard Freds Morin</small>
                    <br>
                    <span class="status"> kontak : {{$m->contact}}</span>

                </div>
            </td>
            <td>
                <a href="" class="btn btn-primary">detail</a>
                <a href="" class="btn btn-primary">edit</a>
                <a href="" class="btn btn-primary">hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection