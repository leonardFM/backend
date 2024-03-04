@extends('layouts')

@section('content')

    <div class="row align-items-center">
        <div class="col-md-6">
            <h4><strong>Data Kepala Keluarga</strong></h4>
        </div>
        <div class="col-md-6 text-md-end">
            <a href="" class="btn btn-primary btn-sm mb-3">Tambah Baru</a>
        </div>
    </div>
    <hr>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <a href="{{ route('resident') }}" class="btn btn-success btn-block">
                    <p class="text-center mb-0">Jumlah Kepala Keluarga: {{ $count }} KK</p>
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="{{ route('resident_all', ['role' => 'online']) }}" class="btn btn-success btn-block">
                    <p class="text-center mb-0">Jumlah Warga Terdaftar: 80 Orang</p>
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="{{ route('resident_all', ['role' => 'offline']) }}" class="btn btn-success btn-block">
                    <p class="text-center mb-0">Jumlah Warga Keseluruhan: 129 Orang</p>
                </a>
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
        @foreach($user as $u)
        <tr>
            <td>
                <div>
                    <p>{{ $u->name }}</p>
                    <small class="status">jumlah Anggota Keluarga: 5 ORANG </small>  <small class="status">NO RUMAH : {{ $u->no_rumah ?? '-' }}</small>
                    <br>
                    <span class="status">NO Telepon : {{ $u->telepon ?? '-'  }}</span> | <span class="status">NO Telepon Rumah : {{ $u->telepon_rumah ?? '-' }}</span> 

                </div>
            </td>
            <td>
                <a href="{{ route('resident_detail', ['id' => $u->id ]) }}" class="btn btn-primary">detail</a>
                <a href="{{ route('resident_edit', ['id' => $u->id ]) }}" class="btn btn-primary">edit</a>
                <a href="" class="btn btn-primary">hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<style>
    .highlight {
        color:white;
        background-color: black; /* Warna latar belakang yang Anda inginkan */
        padding: 5px; /* Padding untuk membuat teks terlihat lebih baik */
        border-radius: 5px; /* Untuk memberikan sudut yang sedikit melengkung */
    }
</style>


@endsection