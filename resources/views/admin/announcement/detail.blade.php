@extends('layouts')

@section('content')
    <div class="container">
        <div class="announcement">
            <h2>Detail Pengumuman</h2>
            <hr>
            <h3>JUDUL : {{ $detail->title }}</h3>
            <div class="row content">
                {!! $detail->content !!}
            </div>
        </div>
    </div>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .announcement {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .announcement h2 {
            color: #007bff;
            margin-bottom: 10px;
        }
        .announcement h3 {
            color: #343a40;
            margin-bottom: 10px;
        }
        .announcement hr {
            margin-top: 5px;
            margin-bottom: 20px;
            border-top: 2px solid #007bff;
        }
        .announcement .content {
            line-height: 1.6;
        }
    </style>
@endsection