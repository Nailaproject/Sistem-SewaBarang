@extends('layouts.frontend')

@section('content')

<h3 class="mb-4 text-primary fw-bold">Dashboard Pelanggan</h3>

<div class="row g-4">

    <div class="col-md-4">
        <div class="card card-custom shadow border-0" 
             style="background: linear-gradient(135deg, #0d6efd, #6ea8fe); color:white; border-radius:15px;">
            <div class="card-body">
                <h6>Total Transaksi</h6>
                <h2>{{ $total }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-custom shadow border-0" 
             style="background: linear-gradient(135deg, #ffffff, #cfe2ff); color:#0d6efd; border-radius:15px;">
            <div class="card-body">
                <h6>Sedang Disewa</h6>
                <h2>{{ $disewa }}</h2>
            </div>
        </div>
    </div>

</div>

@endsection