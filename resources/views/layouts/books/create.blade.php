
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
            <span>Current Loans</span></a>
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
            <h6 class="m-0 font-weight-bold text-primary">Tambah Buku</h6>
        </div>
        <div class="card-body py-3">
            <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="form-group col-md-6">
                        <label>Judul Buku<span class="text-danger">*</span></label>
                        <input type="text" name="namaBuku" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group ml-2">
                        <div class="form-group">
                            <label>Gambar Buku<span class="text-danger">*</span></label>
                            <input type="file" name="gambarBuku" class="form-control-file" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group col-md-6">
                            <label>Penulis<span class="text-danger">*</span></label>
                            <input type="floatingTextarea2" name="penulisBuku" class="form-control" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group col-md-6">
                            <label>Deskripsi Buku<span class="text-danger">*</span></label>
                            <textarea name="deskripsiBuku" class="form-control" autocomplete="off" required rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group col-md-6">
                            <label>Penerbit Buku<span class="text-danger">*</span></label>
                            <input type="text" name="penerbitBuku" class="form-control" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group col-md-6">
                            <label>Tahun Terbit<span class="text-danger">*</span></label>
                            <input type="number" name="tahunTerbit" class="form-control" autocomplete="off" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="form-group col-md-6">
                            <label>Kategori Buku<span class="text-danger">*</span></label>
                            <br>
                            <select name="kategoriBuku" class="form-control" required>
                                <option value="">Pilih Kategori</option>
                                @foreach ($data as $book)
                                    <option value="{{ $book->id_kategori }}">{{ $book->namaKategori }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Stok Buku<span class="text-danger">*</span></label>
                            <input type="number" name="stokBuku" class="form-control" autocomplete="off" required min="1">
                    </div> 
                    
                    <div class="form-group col-md-6">
                        <label>Stok Tersedia<span class="text-danger">*</span></label>
                            <input type="number" name="stokTersedia" class="form-control" autocomplete="off" required min="1">
                    </div> 

                    <div class="form-group col-md-6">
                        <button type="submit" class="btn btn-primary btn-icon-split mt-2 p-2">
                            <span class="mr-2">
                                <i class="fas fa-save"></i>
                            </span>
                            Simpan Buku
                        </button>
                    </div>
                </div>
             </form>
        </div>
    </div>
    
@endsection