@extends('layouts.main')

@section('dashboard')
    <li class="nav-item active">
        <a class="nav-link active" href="{{ route('user.index') }}">
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
        <a class="nav-link" href="{{{ route('user.myloans') }}}">
            <i class="fas fa-fw fa-table"></i>
            <span>My Loans</span>
        </a>
    </li>
@endsection

@section('search')
    <form action="{{ route('user.index') }}" method="GET"
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
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar Buku</th>
                            <th>Judul Buku</th>
                            <th>Deskripsi Buku</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Kategori</th>
                            <th>Stok Buku</th>
                            <th>Stok tersedia</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = $books_phorias->firstItem()
                        @endphp
                        @foreach ($books_phorias as $book)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><img src="{{ asset('assets/img/' . $book->gambarBuku) }}" alt="{{ $book->namaBuku }}" style="width:100px"></td>
                                <td>{{ $book->namaBuku }}</td>
                                <td class="text-justify">{{ $book->deskripsiBuku }}</td>
                                <td>{{ $book->penulisBuku }}</td>
                                <td>{{ $book->penerbitBuku }}</td>
                                <td>{{ $book->tahunTerbit }}</td>
                                <td>{{ $book->kategoriBuku }}</td>
                                <td>{{ $book->stokBuku }}</td>
                                <td>{{ $book->stokTersedia }}</td>
                                <td>
                                    @if($book->stokTersedia > 0)
                                        <a href="{{ route('user.pinjam', $book->id_buku) }}">
                                            <button type="button" class="btn btn-primary mr-1">Pinjam</button>
                                        </a>
                                    @else
                                        <button class="btn btn-secondary" disabled>
                                            Stok Habis
                                        </button>
                                    @endif
                                </td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center mt-4">
                    {{ $books_phorias->links() }}
                </div>
            </div>
        </div>
    </div>  

@endsection