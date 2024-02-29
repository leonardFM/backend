@extends('layouts')

@section('content')
<div class="container">
    <div>
        <h2><strong>Agenda</strong></h2>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('agenda_store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan judul 1" aria-label="Judul 1" required>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea name="content"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori Pengumuman</label>
                            <select class="form-select" name="kategori" aria-label="Default select example">
                                <option selected>pilih kategori</option>
                                <option value="KEGIATAN">Kegiatan</option>
                                <option value="BERITA DUKA">Berita Duka</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Tipe Pengumuman</label>
                            <select class="form-select" name="content_type" aria-label="Default select example">
                                <option selected>pilih kategori</option>
                                <option value="ARTICLE">ARTICLE</option>
                                <option value="VIDEO">VIDEO</option>
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