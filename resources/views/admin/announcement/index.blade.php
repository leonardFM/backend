@extends('layouts')

@section('content')
    <h2><strong>Announcement</strong></h2>
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
        @foreach($announ as $a)
        <tr>
            <td>
                <div>
                    <p>{{ $a->title }}</p>
                    <span class="status">{{ ($a->status  == false) ? 'DRAFT' : 'PUBLISHED' }} | Date : {{ $a->created_at }}</span>
                    <small class="status">{{ $a->content_type }}</small>  <small class="status">{{$a->kategori}}</small> <small class="status">By {{ $a->user->name }}</small>

                </div>
            </td>
            <td>
                <a href="{{ route('announcement_publish', ['id' => $a->id]) }}" class="btn btn-sm btn-primary"><i class="fas fa-fw fa-cog"></i></a>
            </td>
            <td>
                <a href="" class="btn btn-primary">detail</a>
                <a href="" class="btn btn-primary">edit</a>
                <a href="" class="btn btn-primary">delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection