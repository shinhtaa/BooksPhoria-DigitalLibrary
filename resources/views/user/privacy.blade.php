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
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.terms') }}" >
            <i class="fas fa-fw fa-cog"></i>
            <span>Terms & Condition</span>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link collapsed active" href="{{ route('user.privacy') }}" >
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
            <h6 class="m-0 font-weight-bold text-primary">Privacy Policy</h6>
        </div>
            <div class="card-body justify-content-between">
                <div>
                    <h3 class="mb-3 font-weight-bold">Kebijakan Privasi Layanan BooksPhoria</h3>
                    <h6>BooksPhoria menghargai dan melindungi privasi data pengguna.</h6>
                <ul>
                    <li>
                        Informasi yang Dikumpulkan
                    </li>
                    <h6>Nama, email, dan informasi kontak lainnya.</h6>
                    <h6>Data akun dan riwayat peminjaman.</h6>
                    <h6>Informasi teknis seperti alamat IP dan aktivitas pengguna.</h6>
                    <li>
                        Penggunaan Informasi
                    </li>
                    <h6>Mengelola proses peminjaman dan pengembalian barang.</h6>
                    <h6>Keperluan administrasi dan keamanan.</h6>
                    <h6>Peningkatan kualitas layanan.</h6>
                    <li>
                        Perlindungan Data
                    </li>
                    <h6>BooksPhoria berupaya menjaga keamanan data pengguna dan tidak membagikan data kepada pihak ketiga tanpa izin, kecuali diwajibkan oleh hukum.</h6>
                    <li>
                        Hak Pengguna
                    </li>
                    <h6>Mengakses dan memperbarui data pribadi.</h6>
                    <h6>Mengakses dan memperbarui data pribadi.</h6>
                    <h6>Meminta penghapusan data sesuai ketentuan yang berlaku.</h6>
                    <li>
                        Hak Pengguna
                    </li>
                    <h6>Mengakses dan memperbarui data pribadi.</h6>
                    <h6>Mengakses dan memperbarui data pribadi.</h6>
                    <h6>Meminta penghapusan data sesuai ketentuan yang berlaku.</h6>
                    <li>
                        Perubahan Kebijakan Privasi
                    </li>
                    <h6>Kebijakan Privasi ini dapat diperbarui sewaktu-waktu.</h6>
                </ul>.
            </div>
        </div>
    </div>
@endsection