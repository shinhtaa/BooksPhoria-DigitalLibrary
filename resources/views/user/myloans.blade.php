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
    <li class="nav-item active">
        <a class="nav-link active" href="{{ route('user.myloans') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>My Loans</span>
        </a>
    </li>
@endsection

@section('search')
    <form action="{{ route('user.myloans') }}" method="GET"
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" name="kata" class="form-control bg-light border-0 small" placeholder="Cari buku..." value="{{ request('kata') }}"
                aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
        </div>
    </form>
@endsection

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="{{ route('user.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>
    
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Peminjaman</th>
                            <th>Gambar Buku</th>
                            <th>Judul Buku</th>
                            <th>Nama Pengambil</th>
                            <th>No. WhatsApp</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Batas Pengembalian</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Status</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = $myloans->firstItem()
                        @endphp
                        @foreach ($myloans as $loan)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $loan->kodePeminjaman }}</td>
                                <td><img src="{{ asset('assets/img/' . $loan->book->gambarBuku) }}" alt="{{ $loan->book->namaBuku }}" style="width:100px"></td>
                                <td>{{ $loan->book->namaBuku }}</td>
                                <td>{{ $loan->namaPengambil }}</td>
                                <td>{{ $loan->noHp }}</td>
                                <td>{{ date('d M Y', strtotime($loan->tanggalPeminjaman)) }}</td>
                                <td>{{ date('d M Y', strtotime($loan->batasPengembalian)) }}</td>
                                <td>{{ $loan->tanggalPengembalian }}</td>
                                <td>{{ $loan->status }}</td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center mt-4">
                    {{ $myloans->links() }}
                </div>
            </div>
        </div>
    </div>  

@endsection