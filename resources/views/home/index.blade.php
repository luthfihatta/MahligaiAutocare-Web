@extends('layouts.main')

@section('content')

<div class="hero-section text-center">
    <div class="container">
        <h1 class="display-4 mb-4">Kilau Sempurna, Performa Maksimal</h1>
        <p class="lead mb-5">Percayakan perawatan kendaraan Anda pada ahlinya. Standar baru dalam dunia auto detailing di Pekanbaru.</p>
        <a href="{{ route('layanan') }}" class="btn btn-cta rounded-pill text-white py-3 px-5 fs-5">Lihat Layanan Kami</a>
    </div>
</div>

<div class="home-section container">
    <div class="row align-items-center g-5">
        <div class="col-lg-6">
            <h2 class="section-title">Selamat Datang di Mahligai AutoCare</h2>
            <p class="text-muted">Lebih dari sekadar tempat cuci mobil, kami adalah pusat perawatan kendaraan yang berdedikasi untuk mengembalikan dan menjaga kondisi mobil Anda tetap prima. Dengan detailer profesional dan produk premium, kami menjamin hasil yang melampaui ekspektasi.</p>
            <div class="d-flex mt-4">
                <div class="me-4">
                    <h3 class="text-primary fw-bold">5+</h3>
                    <p class="text-muted mb-0">Tahun Pengalaman</p>
                </div>
                <div>
                    <h3 class="text-primary fw-bold">1000+</h3>
                    <p class="text-muted mb-0">Pelanggan Puas</p>
                </div>
            </div>
            <a href="{{ route('tentang.kami') }}" class="btn btn-outline-success rounded-pill py-2 px-4 mt-4">Pelajari Lebih Lanjut</a>
        </div>
        <div class="col-lg-6">
            <img src="https://images.unsplash.com/photo-1590362891234-586c9b35b978?q=80&w=1932&auto=format&fit=crop" class="img-fluid rounded-3 shadow" alt="Proses Detailing Mobil">
        </div>
    </div>
</div>

<div class="home-section bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Layanan Unggulan</h2>
            <p class="text-muted">Perawatan paling populer yang dipilih oleh pelanggan kami.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card service-card h-100">
                    <img src="https://images.unsplash.com/photo-1617105522332-95a43f1636d2?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="Nano Coating">
                    <div class="card-body">
                        <h5 class="card-title">Nano Ceramic Coating</h5>
                        <p class="card-text">Proteksi cat superior dengan efek daun talas untuk kilau maksimal dan perlindungan jangka panjang.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card service-card h-100">
                    <img src="https://images.unsplash.com/photo-1599175217482-5a48d0a75f48?q=80&w=1932&auto=format&fit=crop" class="card-img-top" alt="Detailing Interior">
                    <div class="card-body">
                        <h5 class="card-title">Interior Detailing</h5>
                        <p class="card-text">Membersihkan dan meremajakan setiap sudut interior mobil Anda, membuatnya terasa seperti baru.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card service-card h-100">
                    <img src="https://images.unsplash.com/photo-1616422285855-ab45c5aabc48?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="Cuci Mobil Premium">
                    <div class="card-body">
                        <h5 class="card-title">Premium Car Wash</h5>
                        <p class="card-text">Bukan cuci biasa. Kami menggunakan teknik 2 bucket wash yang aman untuk cat mobil Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Apa Kata Mereka?</h2>
            <p class="text-muted">Kami bangga dengan hasil kerja kami, biarkan pelanggan kami yang bercerita.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card testimonial-card text-center">
                    <img src="https://i.pravatar.cc/150?img=1" alt="Pelanggan 1" class="mx-auto">
                    <p class="text-muted fst-italic">"Pelayanannya luar biasa detail. Mobil saya jadi kelihatan seperti baru keluar dari showroom. Sangat direkomendasikan!"</p>
                    <h6 class="customer-name mt-3 mb-0">Ahmad Subarjo</h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card testimonial-card text-center">
                    <img src="https://i.pravatar.cc/150?img=2" alt="Pelanggan 2" class="mx-auto">
                    <p class="text-muted fst-italic">"Coatingnya mantap, sudah 6 bulan masih kinclong dan gampang banget dibersihkan. Harganya sepadan dengan kualitas."</p>
                    <h6 class="customer-name mt-3 mb-0">Budi Santoso</h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card testimonial-card text-center">
                    <img src="https://i.pravatar.cc/150?img=3" alt="Pelanggan 3" class="mx-auto">
                    <p class="text-muted fst-italic">"Interior mobil saya yang tadinya kusam dan bau apek, sekarang jadi wangi dan bersih total. Terima kasih Mahligai AutoCare!"</p>
                    <h6 class="customer-name mt-3 mb-0">Citra Lestari</h6>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
