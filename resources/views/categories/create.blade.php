
@extends('layouts.main')

@section('dashboard')
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('books.index') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Books</span>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link active" href="{{ route('categories.index') }}">
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
        <a href="{{ route('categories.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    <div class="card shadow mb-6 col-md-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Kategori</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('categories.store') }}" method="POST">
                <div class="form-group">
                    <div class="form-group col-md-6">
                        <label for="judul">Nama kategori<span class="text-danger">*</span></label>
                        <input type="text" name="namaKategori" class="form-control" required>
                    </div>
                </div>

                @csrf

                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary btn-icon-split mt-2 p-2">
                        <span class="mr-2">
                            <i class="fas fa-save"></i>
                        </span>
                        Simpan Kategori
                    </button>
                </div>
            </form>
        </div>
    </div>
    
@endsection