{{-- @extends('layouts.admin')

@section('title', 'Шинэ хэрэглэгч')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-6">➕ Шинэ хэрэглэгч нэмэх</h1>

    <form action="{{ route('users.store') }}" method="POST" class="bg-white p-6 shadow rounded-xl w-full max-w-md">
        @csrf

        <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium mb-1">Нэр</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" 
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                   required>
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" 
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                   required>
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-gray-700 font-medium mb-1">Нууц үг</label>
            <input type="password" name="password" id="password" 
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                   required>
            @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" 
                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
            Хадгалах
        </button>
    </form>
</div>
@endsection --}}
