@include('include.header')

<div class="max-w-md mx-auto mt-16 bg-white p-8 rounded shadow">
    <h2 class="text-2xl font-bold mb-6 text-center">Нэвтрэх</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-4">
            <label for="email" class="block mb-1 font-medium">Имэйл</label>
            <input type="email" name="email" id="email" class="w-full border rounded px-3 py-2" required autofocus>
            @error('email')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-1 font-medium">Нууц үг</label>
            <input type="password" name="password" id="password" class="w-full border rounded px-3 py-2" required>
            @error('password')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="bg-blue-600 w-full py-2 text-white rounded font-bold hover:bg-blue-700">Нэвтрэх</button>
    </form>
    <div class="mt-4 text-center">
        <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Бүртгүүлэх</a>
        <a href="{{ route('login.facebook') }}" class="bg-blue-600 text-white px-4 py-2 rounded block mb-2 text-center">
    Facebook-ээр нэвтрэх
</a>
<a href="{{ route('login.instagram') }}" class="bg-pink-600 text-white px-4 py-2 rounded block mb-4 text-center">
    Instagram-ээр нэвтрэх
</a>
    </div>
</div>

@include('include.footer')