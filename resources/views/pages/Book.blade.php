@include('include.header')
<!-- Main Section -->
<main class="max-w-7xl mx-auto py-12 px-4">
    <h1 class="text-4xl font-bold mb-8 text-blue-700 text-center">Номуудын жагсаалт</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($books as $book)
            <div class="bg-white rounded-xl shadow-md p-4 flex flex-row items-center space-x-4">
                @if($book->cover_image)
                    <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->title }}" class="w-20 h-28 object-cover rounded-md">
                @else
                    <div class="w-20 h-28 bg-blue-100 flex items-center justify-center rounded-md text-gray-400 text-xs">
                        No Image
                    </div>
                @endif
                <div class="flex flex-col flex-1 min-w-0">
                    <h2 class="text-lg font-semibold text-blue-600 truncate">{{ $book->title }}</h2>
                    <p class="text-gray-700 font-medium text-sm mb-2 truncate">Зохиолч: {{ $book->author }}</p>
                    <a href="{{ route('books.show', $book->id) }}" class="mt-auto inline-block bg-blue-600 text-white px-4 py-1 rounded-full hover:bg-blue-700 transition text-xs">Дэлгэрэнгүй</a>
                </div>
            </div>
        @empty
            <div class="col-span-3 text-center text-gray-400">
                Номын мэдээлэл олдсонгүй.
            </div>
        @endforelse
    </div>
</main>
@include('include.footer')