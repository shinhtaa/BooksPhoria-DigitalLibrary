@extends('layouts.main')

@section('dashboard')
    <li class="nav-item active">
        <a class="nav-link active" href="{{ route('books.index') }}">
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
    <li class="nav-item">
        <a class="nav-link" href="{{ route('prosedur.index') }}">
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

@section('search')
    <form action="{{ route('books.index') }}" method="GET"
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Cari buku..." value="{{ request('keyword') }}"
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
        <div class="card-header p-3">                    
            <a href="{{ route('books.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-sm text-white-50"></i> Tambah Buku
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if(session('success'))
                    <div class="alert alert-success border-0 shadow-sm d-flex">
                            <p>{{ session('success') }}</p>
                    </div>
                @endif
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
                                <td>{{ $book->namaKategori }}</td>
                                <td>{{ $book->stokBuku }}</td>
                                <td>{{ $book->stokTersedia }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="/books/{{ $book->id_buku }}/edit">
                                            <button type="button" class="btn btn-primary mr-1">Edit</button>
                                        </a>
                                        <form action="{{ route('books.destroy', $book->id_buku) }}" method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus buku ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
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