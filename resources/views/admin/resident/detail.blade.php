@extends('layouts')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><strong>Informasi Keluarga</strong></h5>
            <hr>
            <h6 class="card-text"><strong>Nama Kepala Keluarga</strong></h6>
            <h3><strong>{{ ucfirst($user->name) }}</strong></h3>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <h6>Anggota Keluarga Lainnya</h6>
                    <hr>
                    <ul class="list-group list-group-flush">
                        @foreach($child as $c)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $c->name }}
                            <span class="badge bg-success">online</span>
                        </li>
                        @endforeach
                        @foreach($user_offline as $c)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $c->name }}
                            <span class="badge bg-danger">offline</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6">
                    <h6>Informasi Umum Anggota Keluarga</h6>
                    <hr>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-6">
                                    No. Rumah
                                </div>
                                <div class="col-6 text-right">
                                    : {{ $user->no_rumah }}
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-6">
                                    Tlpn Rumah
                                </div>
                                <div class="col-6 text-right">
                                    : {{ $user->telepon_rumah }}
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection