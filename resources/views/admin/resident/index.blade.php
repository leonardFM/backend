@extends('layouts')

@section('content')
    <h2><strong>Data warga</strong></h2>
    <hr>

    <div class="row">
        <div class="col-4">
            <p class="highlight text-center">jumlah kepala keluarga : 23 KK</p>
        </div>
        <div class="col-4">
            <p class="highlight text-center">jumlah warga terdaftar : 80 Orang</p>
        </div>
        <div class="col-4">
            <p class="highlight text-center">jumlah warga keseluruhan : 129 Orang</p>
        </div>
    </div>
    <table>
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
                    <small class="status">jumlah Anggota Keluarga: 5 ORANG </small>  <small class="status">NO RUMAH : 36</small>
                    <br>
                    <span class="status">NO Telepon : 021 - 12323123</span> | <span class="status">NO Telepon Rumah : 021 - 12323123</span> 

                </div>
            </td>
            <td>
                <a href="{{ route('resident_detail', ['id' => $u->id ]) }}" class="btn btn-primary">detail</a>
                <a href="" class="btn btn-primary">edit</a>
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