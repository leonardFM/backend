@extends('layouts')

@section('content')
<div class="container">
    <div>
        <h2><strong>Agenda</strong></h2>
    </div>

    @php 

    @endphp
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ isset($id) ? route('agenda_update', ['id' => $id]) : route('agenda_store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ isset($id) ? $id->title : '' }}" placeholder="Masukkan judul 1" aria-label="Judul 1" required>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea name="content">{{ isset($id) ? $id->content : '' }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori Pengumuman</label>
                            <select class="form-select" name="kategori" aria-label="Default select example">
                                <option value="" selected disabled>Pilih kategori</option>
                                <option value="KEGIATAN" {{ isset($id) && $id->kategori == 'KEGIATAN' ? 'selected' : '' }}>Kegiatan</option>
                                <option value="BERITA DUKA" {{ isset($id) && $id->kategori == 'BERITA DUKA' ? 'selected' : '' }}>Berita Duka</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Tipe Pengumuman</label>
                            <select class="form-select" name="content_type" aria-label="Default select example">
                                <option value="" selected disabled>Pilih tipe</option>
                                <option value="ARTICLE" {{ isset($id) && $id->content_type == 'ARTICLE' ? 'selected' : '' }}>Artikel</option>
                                <option value="VIDEO" {{ isset($id) && $id->content_type == 'VIDEO' ? 'selected' : '' }}>Video</option>
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