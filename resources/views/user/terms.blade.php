@extends('layouts.main')

@section('dashboard')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.index') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Books</span></a>
    </li>
@endsection

@section('sidebar')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.prosedur') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Borrowing Procedure</span>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link active" href="{{ route('user.terms') }}" >
            <i class="fas fa-fw fa-cog"></i>
            <span>Terms & Condition</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('user.privacy') }}" >
            <i class="fas fa-fw fa-lock"></i>
            <span>Privacy Policy</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('user.copyright') }}" >
            <i class="fas fa-fw fa-folder"></i>
            <span>Copyright Notice</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.myloans') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>My Loans</span>
        </a>
    </li>
@endsection

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="{{ route('books.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    <div class="card shadow mb-6 col-md-8">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Terms & Condition</h6>
        </div>
            <div class="card-body justify-content-between">
                <h3 class="mb-3 font-weight-bold">Syarat dan Ketentuan Layanan BooksPhoria</h3>
                <h6>Selamat datang di BooksPhoria. Dengan mengakses dan menggunakan website ini, Anda dianggap telah membaca, memahami, dan menyetujui seluruh syarat dan ketentuan yang berlaku.</h6>
                <ul>
                    <li>
                        Ketentuan Umum
                    </li>
                    <h6>Pengguna wajib memberikan informasi yang benar dan akurat.</h6>
                    <h6>Layanan BooksPhoria hanya digunakan untuk tujuan yang sah.</h6>
                    <h6>Pengelola berhak menolak atau membatasi akses pengguna yang melanggar ketentuan.</h6>
                    <li>
                        Peminjaman Barang
                    </li>
                    <h6>Peminjaman dilakukan sesuai prosedur yang tersedia di website.</h6>
                    <h6>Pengguna bertanggung jawab menjaga kondisi barang selama masa peminjaman.</h6>
                    <h6>Kerusakan atau kehilangan barang menjadi tanggung jawab pengguna sesuai kebijakan yang berlaku.</h6>
                    <li>
                        Pengembalian
                    </li>
                    <h6>Barang wajib dikembalikan tepat waktu sesuai durasi peminjaman.</h6>
                    <h6>Keterlambatan dapat dikenakan sanksi sesuai ketentuan BooksPhoria.</h6>
                    <li>
                        Pembatasan Tanggung Jawab
                    </li>
                    <h6>BooksPhoria tidak bertanggung jawab atas kerugian tidak langsung yang timbul akibat penggunaan layanan.</h6>
                    <li>
                        Perubahan Ketentuan
                    </li>
                    <h6>BooksPhoria berhak mengubah Terms and Conditions kapan saja tanpa pemberitahuan terlebih dahulu.</h6>
                </ul>
            </div>
    </div>
@endsection