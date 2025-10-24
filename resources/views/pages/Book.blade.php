@include('include.header')
<!-- Main Section -->
<main class="max-w-7xl mx-auto py-12 px-4">
    <h1 class="text-4xl font-bold mb-8 text-blue-700 text-center">Номуудын жагсаалт</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse ($books as $book)
            <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col items-center">
                @if($book->cover)
                    <img src="{{ asset('storage/' . $book->cover) }}" alt="{{ $book->title }}" class="w-40 h-56 object-cover rounded-lg mb-4">
                @else
                    <div class="w-40 h-56 bg-blue-100 flex items-center justify-center rounded-lg mb-4 text-gray-400">
                        No Image
                    </div>
                @endif
                <h2 class="text-2xl font-semibold mb-2 text-blue-600">{{ $book->title }}</h2>
                <p class="text-gray-700 font-medium mb-1">Зохиолч: {{ $book->author }}</p>
                <p class="text-gray-500 text-sm mb-3">{{ $book->description }}</p>
                <a href="#" class="mt-auto bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition">Дэлгэрэнгүй</a>
            </div>
        @empty
            <div class="col-span-3 text-center text-gray-400">
                Номын мэдээлэл олдсонгүй.
            </div>
        @endforelse
    </div>
</main>
@include('include.footer')