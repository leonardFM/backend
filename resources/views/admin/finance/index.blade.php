@extends('layouts')

@section('content')
@php 
@endphp
    <div class="container">
        <div class="row">
            <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Total Uang KAS
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Total Uang KAS
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <hr>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <p>income</p>
                <ul class="list-group list-group-flush">
                    @foreach($income as $i)
                        <li class="list-group-item">\
                            <h5>jenis pembelian barang</h5>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-6">
                <p>expense</p>
                <ul class="list-group list-group-flush">
                    @foreach($expense as $e)
                        <li class="list-group-item">Cras justo odio</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> c6e81613617595eed509684e693db0c5a371fda6
