{{-- resources/views/book/show.blade.php --}}

@include('include.header')

<main class="bg-blue-50 dark:bg-gray-900 min-h-screen py-12 transition-colors duration-300">
  <div class="max-w-4xl mx-auto bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden flex flex-col md:flex-row transition-colors duration-300">
    <!-- Book Image -->
    <div class="md:w-1/2 flex items-center justify-center bg-gradient-to-br from-blue-100 to-blue-200 dark:from-gray-800 dark:to-gray-700 p-8">
      <img src="{{ $book->cover ? asset('storage/' . $book->cover) : 'https://via.placeholder.com/250x360?text=No+Image' }}"
           alt="{{ $book->title }}"
           class="rounded-xl shadow-lg w-64 h-96 object-cover border-4 border-white dark:border-gray-700 transition-all duration-300">
    </div>
    <!-- Book Info -->
    <div class="md:w-1/2 p-8 flex flex-col justify-center">
      <h2 class="text-3xl font-extrabold text-blue-800 dark:text-blue-200 mb-2 drop-shadow">{{ $book->title }}</h2>
      <p class="text-gray-700 dark:text-gray-300 font-medium mb-2">Зохиолч: <span class="font-semibold text-blue-500 dark:text-blue-300">{{ $book->author ?? '-' }}</span></p>
      <div class="flex items-center gap-6 mb-4">
        <span class="inline-block bg-blue-200 dark:bg-blue-900 text-blue-900 dark:text-blue-200 px-3 py-1 rounded-full font-semibold text-lg shadow">{{ $book->duration ?? '-' }}</span>
        <span class="inline-block bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-3 py-1 rounded-full font-semibold text-lg shadow">{{ $book->price }}₮</span>
      </div>
      <button class="mt-2 bg-gradient-to-r from-blue-600 to-blue-400 dark:from-blue-800 dark:to-blue-600 text-white px-8 py-3 rounded-full shadow-md hover:from-blue-700 hover:to-blue-500 dark:hover:from-blue-900 dark:hover:to-blue-700 hover:scale-105 transition font-semibold text-lg focus:outline-none focus:ring-2 focus:ring-blue-300">
        Худалдан авах
      </button>
      <hr class="my-6 border-blue-200 dark:border-blue-900">
      <h4 class="text-xl font-bold text-blue-700 dark:text-blue-300 mb-2">Номын тухай</h4>
      <p class="text-gray-600 dark:text-gray-300 leading-relaxed text-base">{{ $book->description }}</p>
    </div>
  </div>
</main>

@include('include.footer')