@extends('layouts')

@section('content')
<div class="row align-items-center">
        <div class="col-md-6">
            <h4><strong>Data Warga</strong></h4>
        </div>
        <div class="col-md-6 text-md-end">
            <a href="" class="btn btn-primary btn-sm mb-3">Tambah Baru</a>
        </div>
    </div>
    <hr>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <a href="{{ route('resident') }}" class="btn btn-success btn-block">
                    <p class="text-center mb-0">Jumlah Kepala Keluarga </p>
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
    <p><strong>Daftar user : </strong></p>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th style="width: 65%;">Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user_role as $k => $u)
                    <tr>
                        <td>
                            {{$k + 1}}
                        </td>
                        <td>
                            <div>
                                <p>{{ $u->name }}</p>
                            </div>
                        </td>
                        <td>
                            <a href="{{ route('resident_edit', ['id' => $u->id ]) }}" class="btn btn-primary">edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection