<!DOCTYPE html>
<html lang="mn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mbook</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
    body { font-family: 'Inter', sans-serif; }
    #testimonials {
  text-align: center;
  background: #f5f9ff;
  padding: 40px 20px;
}

.testimonial-container {
  position: relative;
  max-width: 700px;
  margin: 0 auto;
  overflow: hidden;
}

.testimonial {
  display: none;
  opacity: 0;
  transition: opacity 0.6s ease;
}

.testimonial.active {
  display: block;
  opacity: 1;
}

.controls {
  margin-top: 20px;
}

button {
  background: #007bff;
  border: none;
  color: #fff;
  padding: 10px 16px;
  margin: 0 5px;
  border-radius: 8px;
  cursor: pointer;
}
.search-input {
  width: 18rem;
  padding: 0.5rem 1rem 0.5rem 2.5rem;
  border: 1px solid #d1d5db;
  border-radius: 9999px;
  color: #374151;
  outline: none;
  transition: border-color 0.2s;
  font-size: 1rem;
  background: #fff;
}
.search-input:focus {
  border-color: #3b82f6;
  box-shadow: none;
}
</style>
</head>
<body class="bg-gradient-to-b from-[#f6f9ff] to-white min-h-screen">

    <!-- Header -->
    <header class="bg-white border-b border-gray-100 px-0 pt-4 pb-2">
  <div class="max-w-7xl mx-auto flex items-center justify-between px-8">
    <div class="flex items-center gap-2">
      <span class="text-2xl font-bold text-blue-600">M</span>
      <span class="text-xl font-semibold">book</span>
    </div>
    <div class="flex items-center gap-4">
      <div class="relative" style="width: 18rem;">
  <input 
    type="text" 
    class="search-input" 
    placeholder="Ном хайх..." 
    autocomplete="off"
    
  >
  <svg class="absolute" style="left: 0.75rem; top: 0.7rem; width: 1.25rem; height: 1.25rem; color: #9ca3af; pointer-events: none;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1016.65 16.65z" />
  </svg>
</div>
      <button class="text-blue-600 font-semibold flex items-center gap-2">
        <svg class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <circle cx="12" cy="12" r="10" stroke-width="2" stroke="currentColor" fill="none"/>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 16v-4m0-4h.01" />
        </svg>
        Нэвтрэх
      </button>
    </div>
  </div>
  <nav class="max-w-7xl mx-auto px-8 mt-4 flex items-center gap-8 text-gray-700 font-medium">
    <a href="#" class="px-2 py-1 rounded-full transition hover:bg-blue-50 hover:text-blue-600 text-blue-600 font-semibold">Танд зориулав</a>
    <a href="#" class="px-2 py-1 rounded-full transition hover:bg-blue-50 hover:text-blue-600">Аймшгийн баяр <span class="ml-1">🎃</span></a>
    <a href="#" class="px-2 py-1 rounded-full transition hover:bg-blue-50 hover:text-blue-600">Ном</a>
    <a href="#" class="px-2 py-1 rounded-full transition hover:bg-blue-50 hover:text-blue-600">Subscription</a>
    <a href="#" class="px-2 py-1 rounded-full transition hover:bg-blue-50 hover:text-blue-600">Подкаст</a>
    <a href="#" class="px-2 py-1 rounded-full transition hover:bg-blue-50 hover:text-blue-600">Үйлчилгээ</a>
  </nav>
</header>
