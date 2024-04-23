@extends('auth.layouts.app')

@section('title')
Juara Security Login
@endsection

<style>
    #login{
        height: 100vh;
    }
    .banner{
        min-height: 50%;
        max-height: 70%;
        width: 100%;
    }
    input, button, a{
        border-radius: 0 !important;
    }
    @media (min-width: 768px){
        .banner{
            width: 50%;
        }
    }
</style>

@section('auth')

<section id="login">
    <div class="h-100 w-100 position-relative">
        <img src="https://images.unsplash.com/photo-1526666361175-e3595627c376" alt="" class="h-100 w-100 object-fit-cover">
    </div>
    <div class="position-absolute top-50 start-50 translate-middle h-100 container d-flex justify-content-center align-items-center">
        <div class="banner bg-dark shadow-lg"> 
            <form action="" class="text-light p-3 p-md-5 d-flex flex-column justify-content-between gap-3">
                {{-- Header --}}
                <div class="d-flex justify-content-between align-items-center">
                    <a href="" class="d-flex justify-content-start align-items-center link-light link-offset-2 fw-bold" style="text-decoration: none; width: 90px;">
                        <i class="bi bi-chevron-left me-2"></i>
                        <p class="mb-0">BACK</p>
                    </a>
                    <a class="d-flex justify-content-center align-items-center rounded" href="#">
                        <img src="{{ asset('images/juara-icon.png') }}" alt="" class="me-2" style="width: 30px;">
                        <img src="{{ asset('images/juara-font-full.png') }}" alt="" style="width: 100px;">
                    </a>
                    <div style="width: 90px"></div>
                </div>
                {{-- Input --}}
                <div class="d-flex flex-column">
                    <h3 class="text-center">Login</h3>
                    <p class="text-center mb-5">Login with your account to access Juara Security Services Leaderboard</p>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type your username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Type your password">
                    </div>
                    <div class="mb-5 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                </div>
                {{-- Submit Button --}}
                <a class="btn btn-light fw-bold" href="{{ url('/dashboard') }}">Masuk</a>
                <p class="text-center mb-0">
                    Dont have an account ? <a href="" class="link-light link-offset-2 fw-bold" style="text-decoration: none">Register Here</a>
                </p>
            </form>
        </div>
    </div>
</section>

@endsection