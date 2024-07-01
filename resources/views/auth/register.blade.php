{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}



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
                            <h4 class="mb--35 mb-sm--20">Register</h4>
                            <form class="form form--login" action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form__group mb--20">
                                    <label class="form__label form__label--2" for="name">Name <span
                                            class="required">*</span></label>
                                    <input type="text" class="form__input form__input--3" name="name">
                                </div>
                                <div class="form__group mb--20">
                                    <label class="form__label form__label--2" for="email">Email address <span
                                            class="required">*</span></label>
                                    <input type="email" class="form__input form__input--3" name="email">
                                </div>
                                <div class="form__group mb--20">
                                    <label class="form__label form__label--2" for="password">Password <span
                                            class="required">*</span></label>
                                    <input type="password" class="form__input form__input--3"
                                        name="password">
                                </div>
                                <div class="form__group mb--20">
                                    <label class="form__label form__label--2" for="password">Confirm Password <span
                                            class="required">*</span></label>
                                    <input type="password" class="form__input form__input--3"
                                        name="password_confirmation">
                                </div>
                                <p class="privacy-text mb--20">Your personal data will be used to support your
                                    experience throughout this website, to manage access to your account, and for
                                    other purposes described in our privacy policy.</p>
                                <div class="form__group">
                                    <button type="submit"class="btn btn-submit btn-style-1">Register</button>
                                    <span>Login your account Click <a href="{{ route('login') }}" class="btn btn-submit btn-style-1">Login</a></span>
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
