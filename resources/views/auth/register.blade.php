@extends('layouts.guest')
@section('content')
<div class="img-box" style="margin-left: 119px ">
    <img src="images/slider-img.png" alt="">
  </div>
<div style='width: 50%;
display: flex;
justify-content: center;
align-items: center'>
<p style="
text-align: center;
font-weight: bold;
font-size: 33px;
margin: 20px;
position: absolute;
top: 49px;

">registre</p>
@section('auth')
<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div class="ligne" style='display:flex; gap: 23px;'>
        <div>
            <x-input-label for="firstName" :value="__('First Name')" />
            <x-text-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="old('firstName')" required autofocus autocomplete="name" placeholder="Enter your First Name" />
            <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="lastName" :value="__('Last Name')" />
            <x-text-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required autofocus autocomplete="name" placeholder="Enter your Last Name" />
            <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
        </div>
    </div>
   
    <input type="hidden" name="role" value="3">
    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Enter your mail address"/>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="address" :value="__('Address')" />
        <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="name" placeholder="Casablanca-SB"/>
        <x-input-error :messages="$errors->get('address')" class="mt-2" />
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
        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <x-primary-button class="ms-4">
            {{ __('Register') }}
        </x-primary-button>
    </div>
</form>
@endsection
   

 