@extends('layouts')

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <h4><strong>Agenda </strong></h4>
        </div>
        <div class="col-md-6 text-md-end">
            <a href="{{ route('agenda_create') }}" class="btn btn-primary btn-sm mb-3">Tambah Baru</a>
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
                <a href="{{ route('agenda_update', ['id' => $a->id]) }}" class="btn btn-primary">edit</a>
                <form action="{{ route('agenda_delete', ['id' => $a->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary">hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection