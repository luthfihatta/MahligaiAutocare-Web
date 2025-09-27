@extends('layouts.main')

@section('content')

<div class="page-header text-center">
    <div class="container">
        <h1 class="display-4">Hubungi Kami</h1>
        <p class="lead text-white-50">Kami siap mendengar pertanyaan, kritik, dan saran dari Anda.</p>
    </div>
</div>

<div class="container py-5">
    <div class="row g-5">
        <div class="col-lg-5">
            <div class="contact-info-box">
                <h3 class="section-title">Informasi Kontak</h3>
                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <h6 class="mb-0">Alamat:</h6>
                        <p class="text-muted mb-0">Jl. Jend. Sudirman No. 123, Pekanbaru, Riau</p>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-phone-alt"></i></div>
                    <div>
                        <h6 class="mb-0">Telepon:</h6>
                        <p class="text-muted mb-0">+62 812 3456 7890</p>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-envelope"></i></div>
                    <div>
                        <h6 class="mb-0">Email:</h6>
                        <p class="text-muted mb-0">info@mahligaiautocare.com</p>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-clock"></i></div>
                    <div>
                        <h6 class="mb-0">Jam Operasional:</h6>
                        <p class="text-muted mb-0">Senin - Minggu: 08:00 - 20:00 WIB</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="contact-form">
                <h3 class="section-title">Kirim Pesan</h3>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Nama Anda">
                                <label for="name">Nama Anda</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Email Anda">
                                <label for="email">Email Anda</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Subjek">
                                <label for="subject">Subjek</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Tinggalkan pesan di sini" id="message" style="height: 150px"></textarea>
                                <label for="message">Pesan</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-cta rounded-pill text-white py-3 px-5" type="submit">Kirim Pesan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
