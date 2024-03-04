@extends('layouts')

@section('content')
<div class="container">
    <div>
        <h2><strong>Umkm</strong></h2>
    </div>

    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('umkm_store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan judul 1" aria-label="Judul 1" required>
                        </div>
                        <div class="mb-3">
                            <label for="judul3" class="form-label">Katgori</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>pilih kategori</option>
                                <option value="MAKANAN">Makanan</option>
                                <option value="BISNIS">Bisnis</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control tinymce-editor" name="content"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="contact" class="form-label">kontak</label>
                            <input type="text" class="form-control" id="contact" name="contact" placeholder="Masukkan kontak" aria-label="kontak" required>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" name="image" type="file" id="formFile">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection