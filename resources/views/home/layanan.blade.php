@extends('layouts.main')

@section('content')

<div class="page-header text-center">
    <div class="container">
        <h1 class="display-4">Layanan Kami</h1>
        <p class="lead text-white-50">Kualitas terbaik untuk kilau sempurna kendaraan Anda.</p>
    </div>
</div>

<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="section-title">Detail Layanan Perawatan</h2>
        <p class="text-muted">Kami menawarkan berbagai layanan untuk memenuhi setiap kebutuhan mobil Anda.</p>
    </div>

    <div class="row g-4">
        <div class="col-lg-4 col-md-6">
            <div class="card service-card h-100">
                <img src="https://images.unsplash.com/photo-1616422285855-ab45c5aabc48?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="Cuci Mobil Premium">
                <div class="card-body">
                    <h5 class="card-title">Premium Car Wash</h5>
                    <p class="card-text">Pencucian menyeluruh menggunakan shampoo pH netral, aman untuk semua jenis cat, membersihkan hingga ke sela-sela terkecil.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card service-card h-100">
                <img src="https://images.unsplash.com/photo-1599175217482-5a48d0a75f48?q=80&w=1932&auto=format&fit=crop" class="card-img-top" alt="Detailing Interior">
                <div class="card-body">
                    <h5 class="card-title">Interior Detailing</h5>
                    <p class="card-text">Membersihkan kabin secara detail, mulai dari jok, dashboard, karpet, hingga plafon, mengembalikan suasana baru di dalam mobil.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card service-card h-100">
                <img src="https://images.unsplash.com/photo-1617105522332-95a43f1636d2?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="Nano Coating">
                <div class="card-body">
                    <h5 class="card-title">Nano Ceramic Coating</h5>
                    <p class="card-text">Memberikan lapisan pelindung super hidrofobik yang melindungi cat dari goresan halus, sinar UV, dan kotoran.</p>
                </div>
            </div>
        </div>

        {{-- Tambahkan card layanan lainnya di sini sesuai kebutuhan --}}
    </div>
</div>
@endsection
