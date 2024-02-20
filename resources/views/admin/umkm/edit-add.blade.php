@extends('layouts')

@section('content')
<div class="container">
    <div>
        <h2><strong>Umkm</strong></h2>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('umkm_store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan judul 1" aria-label="Judul 1" required>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control tinymce-editor" name="content"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="contact" class="form-label">kontak</label>
                            <input type="text" class="form-control" id="contact" name="contact" placeholder="Masukkan judul 1" aria-label="Judul 1" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection