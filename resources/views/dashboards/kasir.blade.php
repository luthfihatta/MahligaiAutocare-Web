@extends('layouts.dashboard')

@section('title', 'Dashboard Kasir')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard Kasir</h1>
    </div>

    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="stat-card">
                <div class="stat-card-icon bg-success">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div>
                    <h5>Pendapatan Hari Ini</h5>
                    <p>Rp 1.250.000</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="stat-card">
                <div class="stat-card-icon bg-primary">
                    <i class="fas fa-receipt"></i>
                </div>
                <div>
                    <h5>Transaksi Hari Ini</h5>
                    <p>15</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="stat-card">
                <div class="stat-card-icon bg-warning">
                    <i class="fas fa-car"></i>
                </div>
                <div>
                    <h5>Mobil Dalam Proses</h5>
                    <p>3</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="content-box">
                <h4 class="mb-4">Transaksi Terbaru</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No. Invoice</th>
                                <th>Nama Pelanggan</th>
                                <th>Layanan</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Contoh Data --}}
                            <tr>
                                <td>INV-20250927-015</td>
                                <td>Budi Santoso</td>
                                <td>Nano Ceramic Coating</td>
                                <td><span class="badge bg-success">Selesai</span></td>
                                <td>Rp 750.000</td>
                                <td><a href="#" class="btn btn-sm btn-outline-primary">Detail</a></td>
                            </tr>
                            <tr>
                                <td>INV-20250927-014</td>
                                <td>Citra Lestari</td>
                                <td>Premium Car Wash</td>
                                <td><span class="badge bg-success">Selesai</span></td>
                                <td>Rp 150.000</td>
                                <td><a href="#" class="btn btn-sm btn-outline-primary">Detail</a></td>
                            </tr>
                            <tr>
                                <td>INV-20250927-013</td>
                                <td>Ahmad Subarjo</td>
                                <td>Interior Detailing</td>
                                <td><span class="badge bg-warning text-dark">Dalam Proses</span></td>
                                <td>Rp 350.000</td>
                                <td><a href="#" class="btn btn-sm btn-outline-primary">Detail</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
