@extends('layout')

@section('content')

<div class="container my-5 d-flex justify-content-center align-items-center">
    <form method="POST" action="{{route('register.post')}}" class="card py-4 px-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf
        <div class="text-center logo ml-3">
            <h3>Register Page</h3>
        </div>
        <div class="text-center mt-3">
            
        
        
        </div>
        <div class="position-relative mt-3 form-input">
            <label>E-mail</label>
            <input class="form-control" type="email" name="email" placeholder="Masukan E-mail">
        </div>
        <div class="position-relative mt-3 form-input">
            <label>Nama Lengkap</label>
            <input class="form-control" type="text" name="name" placeholder="Masukan Nama Lengkap">
        </div>
        <div class="position-relative mt-3 form-input">
            <label>Username</label>
            <input class="form-control" type="text" name="username" placeholder="Masukan Username">
        </div>
        <div class="position-relative mt-3 form-input">
            <label>Password</label>
            <input class="form-control" type="password" name="password" placeholder="Masukan Password">
        </div>
        
        
        <div class=" mt-3 ">
            Sudah punya akun?  <span><a href="/" style="text-decoration: none;">Login disini  </a></span>
            
        </div><br>
        <button type="submit" class="btn btn-primary">Buat akun</button>
    </form>
</div>
@endsection

    