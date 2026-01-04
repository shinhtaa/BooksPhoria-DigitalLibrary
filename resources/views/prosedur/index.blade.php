@extends('layouts.main')

@section('dashboard')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('books.index') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Books</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('categories.index') }}">
            <i class="fas fa-fw fa-tags"></i>
            <span>Categories</span>
        </a>
    </li>
@endsection

@section('sidebar')
    <li class="nav-item active">
        <a class="nav-link active" href="{{ route('prosedur.index') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Borrowing Procedure</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('terms.index') }}" >
            <i class="fas fa-fw fa-cog"></i>
            <span>Terms & Condition</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('privacy.index') }}" >
            <i class="fas fa-fw fa-lock"></i>
            <span>Privacy Policy</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('copyright.index') }}" >
            <i class="fas fa-fw fa-folder"></i>
            <span>Copyright Notice</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('current.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Current Loans</span>
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
            <h6 class="m-0 font-weight-bold text-primary">Borrowing Procedure</h6>
        </div>
            <div class="card-body justify-content-between">
                <div>
                    <h3 class="mb-3 font-weight-bold">Prosedur Peminjaman</h3>
                    <h6>Berikut adalah prosedur peminjaman barang di BooksPhoria:</h6>
                <ul>
                    <li>
                        Registrasi & Login
                    </li>
                    <h6>Pengguna wajib melakukan registrasi akun pada website BooksPhoria.</h6>
                    <h6>Setelah registrasi berhasil, pengguna dapat login menggunakan akun terdaftar.</h6>
                    <li>
                        Pemilihan Barang
                    </li>
                    <h6>Pengguna memilih barang yang ingin dipinjam melalui katalog Books.</h6>
                    <h6>Sistem akan menampilkan status ketersediaan barang.</h6>
                    <li>
                        Pengajuan Peminjaman
                    </li>
                    <h6>Pengguna mengajukan peminjaman melalui katalog yang tersedia.</h6>
                    <h6>Pengguna wajib menyetujui Syarat & Ketentuan sebelum mengirim pengajuan.</h6>
                    <li>
                        Pengambilan Barang
                    </li>
                    <h6>Pengguna mengambil barang sesuai jadwal yang telah ditentukan.</h6>
                    <h6>Pengguna wajib melakukan konfirmasi pengambilan.</h6>
                    <li>
                        Masa Peminjaman
                    </li>
                    <h6>Barang dipinjam sesuai durasi yang ditetapkan yaitu maksimal 7 hari.</h6>
                    <h6>Pengguna wajib menjaga barang dalam kondisi baik.</h6>
                    <li>
                        Pengembalian Barang
                    </li>
                    <h6>Barang harus dikembalikan tepat waktu sesuai jadwal.</h6>
                    <h6>Admin akan melakukan pengecekan kondisi barang.</h6>
                    <li>
                        Sanksi
                    </li>
                    <h6>Keterlambatan pengembalian dapat dikenakan sanksi atau denda.</h6>
                    <h6>Kerusakan atau kehilangan barang menjadi tanggung jawab peminjam.</h6>
                </ul>
            </div>
        </div>
    </div>
@endsection