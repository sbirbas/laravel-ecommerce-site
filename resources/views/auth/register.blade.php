<!-- resources/views/auth/register.blade.php -->

@extends('layout.app')

@section('title', 'Register')

@section('content')
    <div class="max-w-md mx-auto p-6">
        <h2 class="text-xl font-bold text-center mb-4">Register</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium">Name</label>
                <input type="text" name="name" id="name" class="w-full p-2 border rounded" required>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium">Email</label>
                <input type="email" name="email" id="email" class="w-full p-2 border rounded" required>
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium">Password</label>
                <input type="password" name="password" id="password" class="w-full p-2 border rounded" required>
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-2 border rounded" required>
            </div>

            <!-- Role -->
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium">Role</label>
                <select name="role" id="role" class="w-full p-2 border rounded">
                    <option value="customer">Customer</option>
                    <option value="vendor">Vendor</option>
                </select>
            </div>

            <!-- Register Button -->
            <div class="mb-4">
                <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Register</button>
            </div>
        </form>
    </div>
@endsection
