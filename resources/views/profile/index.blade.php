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
        <a class="nav-link" href="{{ route('user.myloans') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>My Loans</span>
        </a>
    </li>
@endsection

@push('css')
<style>
    body { margin-top:20px; background-color:#f2f6fc; color:#69707a; }
    .img-account-profile { height: 10rem; }
    .rounded-circle { border-radius: 50% !important; }
    .card { box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%); }
    .card .card-header { font-weight: 500; }
    .card-header:first-child { border-radius: 0.35rem 0.35rem 0 0; }
    .card-header { 
        padding: 1rem 1.35rem; 
        margin-bottom: 0; 
        background-color: rgba(33, 40, 50, 0.03); 
        border-bottom: 1px solid rgba(33, 40, 50, 0.125); 
    }
    .form-control { 
        display: block; width: 100%; padding: 0.875rem 1.125rem; 
        font-size: 0.875rem; font-weight: 400; line-height: 1; 
        color: #69707a; background-color: #fff; background-clip: padding-box; 
        border: 1px solid #c5ccd6; border-radius: 0.35rem; 
    }
    .nav-borders .nav-link.active { color: #0061f2; border-bottom-color: #0061f2; }
    .nav-borders .nav-link { 
        color: #69707a; border-bottom-width: 0.125rem; border-bottom-style: solid; 
        border-bottom-color: transparent; padding-top: 0.5rem; padding-bottom: 0.5rem; 
        margin-left: 1rem; margin-right: 1rem; 
    }
</style>
@endpush

@section('content')
<div class="container-xl px-4 mt-4">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="#">Profile</a>
    </nav>
    <hr class="mt-0 mb-4">
    
    <form action="{{ route('user.update_profile') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-xl-4">
                <div class="card mb-4">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <img class="img-account-profile rounded-circle mb-2" 
                             src="{{ Auth::user()->foto ? asset('storage/' . Auth::user()->foto) : asset('assets/img/default.jpg') }}" 
                             alt="Profile" style="width: 147px; height: 147px; object-fit: cover;">
                        
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        
                        <input type="file" name="foto">
                        <p class="text-muted small mt-2">*Pilih foto lalu klik Save Changes</p>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-8">
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="small mb-1" for="inputName">Full Name</label>
                            <input class="form-control" name="name" id="inputName" type="text" value="{{ old('name', Auth::user()->name) }}">
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" name="email" id="inputEmailAddress" type="email" value="{{ old('email', Auth::user()->email) }}">
                        </div>

                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" name="noHp" id="inputPhone" type="tel" value="{{ old('noHp', Auth::user()->noHp) }}">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Birthday</label>
                                <input class="form-control" name="birthday" id="inputBirthday" type="date" value="{{ old('birthday', Auth::user()->birthday) }}">
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection