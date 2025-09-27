<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Menampilkan halaman Beranda (Homepage).
     */
    public function index()
    {
        return view('home.index');
    }

    /**
     * Menampilkan halaman Layanan.
     */
    public function layanan()
    {

        return view('home.layanan');
    }

    /**
     * Menampilkan halaman Tentang Kami.
     */
    public function tentangKami()
    {
        return view('home.tentang');
    }

    /**
     * Menampilkan halaman Kontak.
     */
    public function kontak()
    {
        return view('home.kontak');
    }
}
