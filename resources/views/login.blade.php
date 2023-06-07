@extends('layouts.html_structure')

@section('style-css')
    <style media="screen">
        body {
            background: linear-gradient(117deg, rgba(2, 0, 36, 1) 0%, rgba(19, 84, 45, 1) 62%);
            background-size: cover;
            background-attachment: fixed;
            ;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .card {
            overflow: hidden;
            border: 0 !important;
            border-radius: 20px !important;
            box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);

        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .form-input {
            position: relative;
        }

        .btn-login {
            width: 60%;
            cursor: pointer;
            border-radius: 10px;
            font-weight: bold;
            background: #13542D;
            display: block;
            padding: 10px;
        }
    </style>
@endsection

@section('container')
    <div class="container">
        <div class="row px-3">
            <div class="col-lg-5 col-xl-4 card flex-row mx-auto px-0">
                <div class="card-body py-5 px-0">
                    <h4 class="text-center my-3 mb-4 fw-bold">Login</h4>
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="/login" enctype="multipart/form-data" method="post" class="form-box px-5" id='loginForm'>
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" required value="{{ old('email') }}" placeholder="Masukkan email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="password" required
                                value="{{ old('password') }}" placeholder="Masukkan password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-center mb-2">

                            <button type="submit" class="btn btn-primary text-uppercase btn-login mt-3">Login</button>
                        </div>
                        <small class="d-block text-center">Hanya untuk admin</small>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
