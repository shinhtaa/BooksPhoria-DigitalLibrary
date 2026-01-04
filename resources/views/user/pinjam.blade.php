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
        <a href="{{ route('user.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    <div class="card shadow mb-6 col-md-8">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Peminjaman Buku</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <input type="hidden" name="id_buku" value="{{ $book->id_buku }}">
                <div class="form-group">
                    <label>Judul Buku</label>
                    <input type="text" class="form-control" value="{{ $book->namaBuku }}" readonly>
                </div>
                <div class="mb-2">
                    <label for="nama" class="col-sm-20 col-form-label">Nama Lengkap Pengambil</label>
                    <div class="col-sm-20">
                        <input type="text" name="namaPengambil" class="form-control" autocomplete="off" required>
                    </div>
                    <small class="text-muted">
                        <span style="color: red;" class="col-sm-20">*Nama pengambil harus sesuai dengan Kartu Identitas (KTP/KTM) yang akan ditunjukkan ke petugas saat pengambilan</span>
                    </small>
                </div>
                <div class="mb-2">
                    <label for="noHp" class="col-sm-20 col-form-label">No. WhatsApp</label>
                    <div class="col-sm-20">
                        <input type="tel" name="noHp" class="form-control" autocomplete="off" required>
                    </div>
                </div>
                <div class="mb-2">
                    <label for="tanggalAmbil" class="col-sm-20 col-form-label">Tanggal Rencana Ambil</label>
                    <div class="col-sm-20">
                        <input type="date" name="tanggalPeminjaman" class="form-control" autocomplete="off" required>
                    </div>
                </div>
                <div class="mb-2">
                    <label for="inputPassword3" class="col-sm-20 col-form-label">Durasi Pinjam</label>
                    <div class="col-sm-20">
                        <input type="text" class="form-control" value="7 Hari" readonly>
                    </div>
                </div>
                <div class="mb-2">
                    <div class="col-sm-20">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" required>
                            <label class="form-check-label" for="gridCheck1">
                                Saya setuju untuk menjaga buku ini dan bersedia menerima sanksi/denda jika terlambat atau rusak.
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mt-4 col-sm-20">
                    <button type="submit" class="btn btn-primary">Konfirmasi Pinjam</button>
                </div>
            </form>
        </div>
    </div>

@endsection