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
    <li class="nav-item active">
        <a class="nav-link collapsed active" href="{{ route('copyright.index') }}" >
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
            <h6 class="m-0 font-weight-bold text-primary">Copyright Notice</h6>
        </div>
        <div class="card-body justify-content-between text-justify">
            <div>                    
                <h3 class="mb-3 font-weight-bold">Pemberitahuan Hak Cipta</h3>
                <h6>© 2006 BooksPhoria. Seluruh konten dalam website ini, termasuk teks, desain, logo, dan sistem, dilindungi oleh undang-undang hak cipta. Dilarang menyalin, mendistribusikan, atau menggunakan konten tanpa izin tertulis dari BooksPhoria, kecuali untuk penggunaan pribadi dan non-komersial sesuai ketentuan hukum yang berlaku.</h6>
            </div>
        </div>
    </div>
@endsection