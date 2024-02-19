@extends('layouts')

@section('content')
<div class="container">
    <div>
        <h2><strong>Announcement</strong></h2>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan judul 1" aria-label="Judul 1" required>
                        </div>
                        <div class="mb-3">
                            <label for="judul2" class="form-label">Judul 2</label>
                            <textarea class="form-control tinymce-editor" name="content"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="judul3" class="form-label">Kategori Pengumuman</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>pilih kategori</option>
                                <option value="1">Lomba</option>
                                <option value="2">Berita Duka</option>
                                <option value="3">kategori ketiga</option>
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