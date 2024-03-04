@extends('layouts')

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <h4><strong>Keuangan</strong></h4>
        </div>
        <div class="col-md-6 text-md-end">
            <a href="" class="btn btn-primary btn-sm mb-3">Tambah Baru</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Laporan Uang Masuk</h6>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @foreach($income as $i)
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="mb-1"><strong>{{ $i->title }}</strong></p>
                                    <small>{{ $i->created_at->format('M d, Y') }}</small>
                                </div>
                                <span><strong>Rp. {{ number_format($i->nominal, 2) }}</strong></span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-footer bg-success text-white d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Total Income:</h6>
                    <h6 class="mb-0">Rp. {{ number_format($total_income, 2) }}</h6>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Laporan Uang Keluar</h6>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @foreach($expense as $e)
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="mb-1"><strong>{{ $e->title }}</strong></p>
                                    <small>{{ $e->created_at->format('M d, Y') }}</small>
                                </div>
                                <span><strong>Rp. {{ number_format($e->nominal, 2) }}</strong></span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-footer bg-danger text-white d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Total Expense:</h6>
                    <h6 class="mb-0">Rp. {{ number_format($total_expense, 2) }}</h6>
                </div>
            </div>
        </div>
    </div>


@endsection
