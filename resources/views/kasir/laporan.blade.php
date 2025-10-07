@extends('layouts.dashboard')

@section('title', 'Laporan Transaksi')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Laporan Pelanggan</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Mobil</th>
                            <th>Plat Mobil</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transaksis as $index => $transaksi)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $transaksi->nama_pelanggan }}</td>
                                <td>{{ $transaksi->mobil }}</td>
                                <td>{{ $transaksi->plat_mobil }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Tidak ada data transaksi.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
