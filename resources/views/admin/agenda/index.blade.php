@extends('layouts')

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <h4><strong>Agenda </strong></h4>
        </div>
        <div class="col-md-6 text-md-end">
            <a href="" class="btn btn-primary btn-sm mb-3">Tambah Baru</a>
        </div>
    </div>
    <hr>
    <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th style="width: 70%;">Title</th>
            <th>status</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($agenda as $a)
        <tr>
            <td>
                <div>
                    <p>{{ $a->title }}</p>
                    <span class="status">{{ ($a->status  == false) ? 'DRAFT' : 'PUBLISHED' }} | Date : {{ $a->created_at }}</span>
                    <small class="status">{{ $a->content_type }}</small>  <small class="status">{{$a->kategori}}</small> <small class="status">By {{ $a->user->name }}</small>

                </div>
            </td>
            <td>
                <a href="{{ route('agenda_publish', ['id' => $a->id]) }}" class="btn btn-sm btn-primary"><i class="fas fa-fw fa-cog"></i></a>
            </td>
            <td>
                <a href="{{ route('agenda_detail', ['id' => $a->id]) }}" class="btn btn-primary">detail</a>
                <a href="" class="btn btn-primary">edit</a>
                <a href="" class="btn btn-primary">delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<style>
    .status {
        background-color: #fa4b6e;
        padding: 4px;
        color: white;
        font-size: 10px;
        border-radius:5px;
    }
    .status {
        background-color: #ebe6e7;
        padding: 4px;
        color: black;
        font-size: 10px;
        border-radius:5px;
    }
    .action {
        text-align: right;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
</style>
@endsection