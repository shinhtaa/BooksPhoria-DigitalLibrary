@extends('layouts.main')

@section('dashboard')
    <li class="nav-item active">
        <a class="nav-link active" href="{{ route('books.index') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Books</span>
        </a>
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

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="{{ route('books.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ubah Buku</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('books.update', $book->id_buku) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div class="form-group col-md-6">
                        <label for="judul">Judul Buku<span class="text-danger">*</span></label>
                        <input type="text" name="namaBuku" class="form-control" value="{{ $book->namaBuku }}">
                    </div>
                </div>

                <div class="form-group ml-2">
                    <div class="form-group">
                        <label>Gambar Buku<span class="text-danger">*</span></label>
                        <input type="file" name="gambarBuku" class="form-control-file">
                        @if ($book->gambarBuku)
                            <small class="text-muted">
                               <span>Gambar saat ini: {{ basename($book->gambarBuku) }}</span>
                            </small>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-group col-md-6">
                        <label for="penulis">Penulis<span class="text-danger">*</span></label>
                        <input type="text" name="penulisBuku" class="form-control" value="{{ $book->penulisBuku }}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-group col-md-6">
                        <label for="tahun_terbit">Deskripsi Buku<span class="text-danger">*</span></label>
                        <input type="text" name="deskripsiBuku" class="form-control" value="{{ $book->deskripsiBuku }}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-group col-md-6">
                        <label for="tahun_terbit">Penerbit Buku<span class="text-danger">*</span></label>
                        <input type="text" name="penerbitBuku" class="form-control" value="{{ $book->penerbitBuku }}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-group col-md-6">
                        <label for="tahun_terbit">Tahun Terbit<span class="text-danger">*</span></label>
                        <input type="number" name="tahunTerbit" class="form-control" value="{{ $book->tahunTerbit }}">
                    </div>
                </div>

                <div class="form-group">
                        <div class="form-group col-md-6">
                            <label>Kategori Buku<span class="text-danger">*</span></label>
                            <br>
                            <select name="kategoriBuku" class="form-control" value="{{ $book->kategoriBuku }}">
                                @foreach ($data as $kategori)
                                <option value="{{ $kategori->id_kategori }}" 
                                    {{ $book->kategoriBuku == $kategori->id_kategori ? 'selected' : '' }}>
                                    {{ $kategori->namaKategori }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                <div class="form-group col-md-6">
                    <label for="stok">Stok Buku<span class="text-danger">*</span></label>
                    <input type="number" name="stokBuku" class="form-control" value="{{ $book->stokBuku }}">
                </div>      

                <div class="form-group col-md-6">
                    <label>Stok Tersedia<span class="text-danger">*</span></label>
                    <input type="number" name="stokTersedia" class="form-control" value="{{ $book->stokTersedia }}">
                </div> 

                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary btn-icon-split mt-2 p-2">
                        <span class="mr-2">
                            <i class="fas fa-save"></i>
                        </span>
                        Simpan Buku
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection