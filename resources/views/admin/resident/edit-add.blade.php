@extends('layouts')

@section('content')
@php 
@endphp
<div class="container">
    <div>
        <h2><strong>Agenda</strong></h2>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('resident_update', ['id' => $user->id]) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">nama</label>
                            <input type="text" class="form-control" id="nama" value="{{ $user->name }}" name="name" aria-label="Judul 1" required>
                        </div>

                        <div class="mb-3">
                            <label for="no rumah" class="form-label">no rumah</label>
                            <input type="text" class="form-control" id="no_rumah" value="{{ $user->no_rumah }}" name="no_rumah"  aria-label="Judul 1" required>
                        </div>

                        <div class="mb-3">
                            <label for="telepon" class="form-label">telepon</label>
                            <input type="text" class="form-control" id="telepon" value="{{ $user->telepon }}" name="telepon" aria-label="Judul 1" required>
                        </div>

                        <div class="mb-3">
                            <label for="telepon rumah" class="form-label">telepon rumah</label>
                            <input type="text" class="form-control" id="telepon_rumah" value="{{ $user->telepon_rumah }}" name="telepon_rumah" aria-label="Judul 1" required>
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">kepala keluarga</label>
                            <select class="form-select" name="parent_id" aria-label="Default select example">
                                <option selected>pilih status</option>
                                @foreach($parent as $a)
                                <option value="{{ $a->id }}">{{ $a->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection