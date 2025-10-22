@extends('layouts.sidebar')

@section('content')
<div class="p-6">
    <h1 class="text-3xl font-bold mb-6">📊 Хяналтын самбар</h1>

    <div class="grid grid-cols-4 gap-6 mb-6">
        <div class="bg-white p-4 rounded-xl shadow text-center">
            <p class="text-gray-500">Нийт хэрэглэгчид</p>
            <p class="text-3xl font-bold text-blue-600"></p>
        </div>

        <div class="bg-white p-4 rounded-xl shadow text-center">
            <a href="{{ route('admin.books.index') }}" class="text-gray-500">Нийт номнууд</a>
            <p class="text-3xl font-bold text-green-600"></p>
        </div>

        <div class="bg-white p-4 rounded-xl shadow text-center">
            <p class="text-gray-500">Подкаст</p>
            <p class="text-3xl font-bold text-yellow-600">0</p>
        </div>

        <div class="bg-white p-4 rounded-xl shadow text-center">
            <p class="text-gray-500">Шинэ хэрэглэгч</p>
            <p class="text-3xl font-bold text-purple-600">0</p>
        </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow">
        <h2 class="text-xl font-semibold mb-4">📈 Номын статистик</h2>
        <p class="text-gray-600">Энд номын график эсвэл нэмэлт мэдээлэл гарч ирнэ.</p>
    </div>
</div>



<script>
const ctx = document.getElementById("bookChart").getContext("2d");
new Chart(ctx, {
    type: "bar",
    data: {
        labels: ["Уран зохиол", "Түүх", "Шинжлэх ухаан", "Сургалт"],
        datasets: [{
            label: "Номын тоо",
            data: [14, 9, 7, 3],
            backgroundColor: [
                "rgba(37, 99, 235, 0.6)",
                "rgba(22, 163, 74, 0.6)",
                "rgba(234, 179, 8, 0.6)",
                "rgba(147, 51, 234, 0.6)"
            ],
            borderRadius: 8,
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: false },
            title: { display: true, text: "Номын төрөл тус бүрийн статистик", font: { size: 18 } }
        },
        scales: { y: { beginAtZero: true, ticks: { stepSize: 5 } } }
    }
});
</script>
@endsection

