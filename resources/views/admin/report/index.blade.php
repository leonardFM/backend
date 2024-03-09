@extends('layouts')

@section('content')
    <h2><strong>Laporan Keluhan</strong></h2>
    <hr>
    <div class="row">
        <div class="col-12">
        <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="width: 65%;">Title</th>
                        <th style="width: 50%;">Status</th>
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
                            @if($a->status == 'MASUK')
                            <a href="{{ route('report_status', ['id' => $a->id,'status' => 'DIKERJAKAN' ]) }}" class="btn btn-warning">DIKERJAKAN</a> | <a href="{{ route('report_status', ['id' => $a->id,'status' => 'SELESAI' ]) }}" class="btn btn-success">SELESAI</a>
                            @elseif($a->status == 'DIKERJAKAN')
                            <a href="{{ route('report_status', ['id' => $a->id,'status' => 'MASUK' ]) }}" class="btn btn-danger">REJECT</a> | 
                            <a href="{{ route('report_status', ['id' => $a->id,'status' => 'SELESAI' ]) }}" class="btn btn-success">SELESAI</a>
                            @elseif($a->status == 'SELESAI')
                            <a href="{{ route('report_status', ['id' => $a->id,'status' => 'SELESAI' ]) }}" class="btn btn-danger">REJECT</a> |
                            <a href="{{ route('report_status', ['id' => $a->id,'status' => 'DIKERJAKAN' ]) }}" class="btn btn-warning">DIKERJAKAN</a> 
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('report_detail', [ 'id' => $a->id ] ) }}" class="btn btn-primary">detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection