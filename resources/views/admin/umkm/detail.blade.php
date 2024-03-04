@extends('layouts')

@section('content')
<div class="container">
    <div class="announcement">
        <h2 class="text-center mb-4">Detail UMKM</h2>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <h3 class="mb-3"><strong>Judul: {{ $data->title }}</strong></h3>
                <p class="mb-3"><strong>Nomor Telepon: {{ $data->contact }}</strong></p>
                <div class="content">
                    <p>keterangan :</p>
                    {!! $data->content !!}
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $data->image) }}" class="img-fluid rounded shadow" alt="Gambar UMKM">
            </div>
        </div>
    </div>
</div>

@endsection