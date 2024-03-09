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
            <th style="width: 19%;">Action</th>
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
                <div class="row">
                    <div class="col">
                        <a href="{{ route('umkm_detail', ['id' => $m->id]) }}" class="btn btn-primary"><i class="fab fa-readme"></i></a>
                    </div>
                    <div class="col">
                        <a href="{{ route('agenda_update', ['id' => $m->id]) }}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                    </div>
                    <div class="col">
                        <form action="{{ route('agenda_delete', ['id' => $m->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection