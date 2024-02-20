@extends('layouts')

@section('content')
<div class="container">
    <div>
        <h2><strong>Laporan</strong></h2>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('report_store') }}" method="POST">
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
                            <select class="form-select" name="kategori" aria-label="Default select example">
                                <option selected>pilih kategori</option>
                                <option value="KENYAMANAN">Kenyamanan</option>
                                <option value="PERBAIKAN">Perbaikan</option>
                            </select>
                        </div>
                        <br>

                        <!-- selected for admin -->
                        <p style="background-color: #000; color:#fff; padding: 10px;">Admin Only</p>
                        <hr style="border-top: 3px solid black;">

                        <!-- <div class="mb-3">
                            <label for="judul3" class="form-label">Assign to</label>
                            <select class="form-select" name="" aria-label="Default select example">
                                <option selected>pilih hero</option>
                                <option value="1">Pak anies (tukang)</option>
                            </select>
                        </div> -->

                        <div class="mb-3">
                            <label for="judul3" class="form-label">Status Laporan</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>pilih kategori</option>
                                <option value="DITERIMA">Diterima</option>
                                <option value="DIKERJAKAN">Dikerjakan</option>
                                <option value="SELESAI">Selesai</option>
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