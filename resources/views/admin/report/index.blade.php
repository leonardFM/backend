@extends('layouts')

@section('content')
    <h2><strong>Laporan Keluhan</strong></h2>
    <hr>
    <div class="row">
        <div class="col-8">
        <table>
                <thead>
                    <tr>
                        <th style="width: 65%;">Title</th>
                        <th style="width: 10%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($report as $a)
                    <tr>
                        <td>
                            <div>
                                <p>{{ $a->title }}</p>
                                <small class="status"><strong>{{ $a->kategori }}</strong></small>  <small class="status">BERITA DUKA | Dibuat pada : {{ $a->created_at}}</small> <small class="status">By Leonard Freds Morin</small>
                                <br>
                                <span class="status">status laporan ; {{$a->status}} </span>

                            </div>
                        </td>
                        <td>
                            <a href="" class="btn btn-primary">detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection