@extends('layouts')

@section('content')
    <div class="container">
        <h2><strong>Announcement</strong></h2>
        <hr>
        <div class="card">
            <div class="card-body">
                <p>bulan JANUARI</p>
                <hr>
                <h5 class="card-title">Total</h5>
                <h1 class="card-text">{{ $total }}</h1>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 65%;">Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($finance as $a)
                    <tr>
                        <td>
                            <div>
                                <p>{{ $a->title }}</p>
                                <h4> Rp.{{ $a->nominal }}</h4> 
                                <span class="badge badge-success">{{ $a->status }}</span> 
                                <span class="text-muted">Tanggal : {{ $a->created_at }}</span> 
                            </div>
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">Detail</a>
                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> c6e81613617595eed509684e693db0c5a371fda6
