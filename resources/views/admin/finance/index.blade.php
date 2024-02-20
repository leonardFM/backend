@extends('layouts')

@section('content')
    <h2><strong>Announcement</strong></h2>
    <hr>
    <table>
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
                    <h4>{{ $a->title }}</h4>
                    <br>
                    <h2> Rp.{{ $a->nominal }}</h2> 
                    <span class="status">{{ $a->status }} | Tanggal : {{ $a->created_at }}</span> 

                </div>
            </td>
            <td>
                <a href="" class="btn btn-primary">detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection