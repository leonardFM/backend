@extends('layouts')

@section('content')
<div class="container">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title"><strong>Informasi keluarga</strong></h2>
                <hr>
                <p class="card-text"><strong>Nama Kepala Keluarga</strong></p>
                <h3><strong>{{ ucfirst($user->name) }}</strong></h3>

                <hr>

                <div class="row">
                    <div class="col-md-6">
                        <h6>Anggota Keluarga Lainnya</h6>
                        <hr>
                        <ul class="list-group list-group-flush">
                            @foreach($child as $c)
                            <li class="list-group-item"> - {{ $c->name }}</li>
                            @endforeach

                            @foreach($user_offline as $c)
                            <li class="list-group-item"> - {{ $c->name }} <span class="float-right">offline</span></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6>Informasi Umum anggota keuarga</h6>
                        <hr>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-3">
                                    No. Rumah</span>
                                    </div>
                                    <div class="col-9">
                                    <span class="text-right">:  {{ $user->no_rumah }}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-3">
                                    Tlpn Rumah</span>
                                    </div>
                                    <div class="col-9">
                                    <span class="text-right">:  {{ $user->telepon_rumah }}
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