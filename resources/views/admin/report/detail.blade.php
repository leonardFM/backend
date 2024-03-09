@extends('layouts')

@section('content')
    <div class="container">
        <div class="announcement">
            <h2>Detail Report</h2>
            <hr>
            <h3>JUDUL : {{ $detail->title }}</h3>
            <div class="row content">
                {!! $detail->content !!}
            </div>
        </div>
    </div>
@endsection