@extends('layouts.frontend_master')
@section('content')
    <!-- Breadcrumb area Start -->
    <div class="breadcrumb-area bg--white-6 breadcrumb-bg-1 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Login &amp; Register</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="current"><span>Register</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area End -->

    <!-- Main Content Wrapper Start -->
    <div id="content" class="main-content-wrapper">
        <div class="page-content-inner">
            <div class="container">
                <div class="row pt--75 pt-md--55 pt-sm--35 pb--80 pb-md--60 pb-sm--40">
                    <div class="col-md-8">
                        <div class="register-box">
                            <h4 class="mb--35 mb-sm--20">Login</h4>
                            <form class="form form--login" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form__group mb--20">
                                    <label class="form__label form__label--2" for="email">Email address <span
                                            class="required">*</span></label>
                                    <input type="email" class="form__input form__input--3" name="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form__group mb--20">
                                    <label class="form__label form__label--2" for="password">Password <span
                                            class="required">*</span></label>
                                    <input type="password" class="form__input form__input--3" name="password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <p class="privacy-text mb--20">Your personal data will be used to support your
                                    experience throughout this website, to manage access to your account, and for
                                    other purposes described in our privacy policy.</p>
                                <div class="form__group">
                                    <button type="submit"class="btn btn-submit btn-style-1">Login</button>
                                    <span>Register your account Click <a href="{{ route('login') }}"
                                            class="btn btn-submit btn-style-1">Register</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->
@endsection
