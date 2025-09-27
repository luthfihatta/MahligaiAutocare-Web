@extends('layouts.main')

@section('content')

<div class="page-header text-center">
    <div class="container">
        <h1 class="display-4">Tentang Mahligai AutoCare</h1>
        <p class="lead text-white-50">Mengenal lebih dekat dedikasi kami dalam dunia perawatan mobil.</p>
    </div>
</div>

<div class="container py-5">
    <div class="row align-items-center about-section g-5">
        <div class="col-lg-6">
            <img src="https://images.unsplash.com/photo-1506521781263-d8422e82f27a?q=80&w=2070&auto=format&fit=crop" class="img-fluid" alt="Tim Mahligai AutoCare">
        </div>
        <div class="col-lg-6">
            <h2 class="section-title">Visi Kami Adalah Kepuasan Anda</h2>
            <p class="text-muted mb-4">Mahligai AutoCare didirikan atas dasar kecintaan terhadap dunia otomotif dan keinginan untuk memberikan standar perawatan kendaraan tertinggi di Pekanbaru. Kami percaya bahwa setiap mobil berhak mendapatkan sentuhan terbaik untuk menjaga penampilan dan nilainya.</p>
            <p class="text-muted">Misi kami adalah memberikan layanan yang detail, menggunakan produk berkualitas premium, dan didukung oleh tim profesional yang berpengalaman untuk memastikan setiap pelanggan pulang dengan senyum puas.</p>
        </div>
    </div>

    <div class="row text-center mt-5 pt-5">
        <div class="col-12 mb-5">
            <h2 class="section-title">Kenapa Memilih Kami?</h2>
        </div>
        <div class="col-md-4">
            <div class="feature-icon mb-3"><i class="fas fa-award"></i></div>
            <h5 class="fw-bold">Profesional Terlatih</h5>
            <p class="text-muted">Tim kami terdiri dari detailer profesional yang memiliki sertifikasi dan pengalaman bertahun-tahun.</p>
        </div>
        <div class="col-md-4">
            <div class="feature-icon mb-3"><i class="fas fa-leaf"></i></div>
            <h5 class="fw-bold">Produk Premium</h5>
            <p class="text-muted">Kami hanya menggunakan produk perawatan mobil terbaik yang aman dan ramah lingkungan.</p>
        </div>
        <div class="col-md-4">
            <div class="feature-icon mb-3"><i class="fas fa-hand-holding-heart"></i></div>
            <h5 class="fw-bold">Garansi Kepuasan</h5>
            <p class="text-muted">Kami berkomitmen untuk memberikan hasil terbaik. Kepuasan Anda adalah prioritas utama kami.</p>
        </div>
    </div>
</div>
@endsection
