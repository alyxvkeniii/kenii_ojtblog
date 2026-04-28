@extends('layouts.app')

@section('title', 'Gallery')

@section('content')

<div class="text-center mb-12">
    <h1 class="text-4xl font-black text-slate-800 tracking-tight">
        OJT <span class="text-orange-500">Snapshots</span> 📸
    </h1>
    <p class="text-slate-500 mt-2 italic">Pixels of my progress.</p>
</div>

{{-- FILTER BUTTONS --}}
<div class="flex justify-center gap-3 mb-8 flex-wrap">
    <button class="filter-btn active" data-filter="all">All</button>
    <button class="filter-btn" data-filter="feb">February</button>
    <button class="filter-btn" data-filter="mar">March</button>
    <button class="filter-btn" data-filter="apr">April</button>
    <button class="filter-btn" data-filter="may">May</button>
</div>

{{-- GALLERY --}}
@php
$images = [

    // WEEK 1 - FEB
    ['src' => asset('image/docu/1_1.jpg'), 'month' => 'feb'],
    ['src' => asset('image/docu/1_2.jpg'), 'month' => 'feb'],
    ['src' => asset('image/docu/1_3.jpg'), 'month' => 'feb'],
    ['src' => asset('image/docu/1_4.jpg'), 'month' => 'feb'],
    ['src' => asset('image/docu/1_5.jpg'), 'month' => 'feb'],
    ['src' => asset('image/docu/1_6.jpg'), 'month' => 'feb'],
    ['src' => asset('image/docu/1_7.jpg'), 'month' => 'feb'],

    // WEEK 2 - MAR
    ['src' => asset('image/docu/2_1.jpg'), 'month' => 'mar'],
    ['src' => asset('image/docu/2_2.jpg'), 'month' => 'mar'],
    ['src' => asset('image/docu/2_3.jpg'), 'month' => 'mar'],
    ['src' => asset('image/docu/2_4.jpg'), 'month' => 'mar'],
    ['src' => asset('image/docu/2_5.jpg'), 'month' => 'mar'],

    // WEEK 3 - MAR
    ['src' => asset('image/docu/3_1.jpg'), 'month' => 'mar'],
    ['src' => asset('image/docu/3_2.jpg'), 'month' => 'mar'],
    ['src' => asset('image/docu/3_3.jpg'), 'month' => 'mar'],
    ['src' => asset('image/docu/3_4.jpg'), 'month' => 'mar'],
    ['src' => asset('image/docu/3_5.jpg'), 'month' => 'mar'],
    ['src' => asset('image/docu/3_6.jpg'), 'month' => 'mar'],

    // WEEK 4 - MAR
    ['src' => asset('image/docu/4_1.jpg'), 'month' => 'mar'],
    ['src' => asset('image/docu/4_2.jpg'), 'month' => 'mar'],
    ['src' => asset('image/docu/4_3.jpg'), 'month' => 'mar'],
    ['src' => asset('image/docu/4_4.jpg'), 'month' => 'mar'],
    ['src' => asset('image/docu/4_5.jpg'), 'month' => 'mar'],

    // WEEK 5 - MAR
    ['src' => asset('image/docu/5_1.jpg'), 'month' => 'mar'],
    ['src' => asset('image/docu/5_2.jpg'), 'month' => 'mar'],
    ['src' => asset('image/docu/5_3.jpg'), 'month' => 'mar'],
    ['src' => asset('image/docu/5_4.jpg'), 'month' => 'mar'],
    ['src' => asset('image/docu/5_5.jpg'), 'month' => 'mar'],
    ['src' => asset('image/docu/5_6.jpg'), 'month' => 'mar'],

    // WEEK 6 - APR
    ['src' => asset('image/docu/6_1.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/6_2.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/6_3.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/6_4.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/6_5.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/6_6.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/6_7.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/6_8.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/6_9.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/6_10.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/6_11.jpg'), 'month' => 'apr'],

    // WEEK 7 - APR
    ['src' => asset('image/docu/7_1.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/7_2.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/7_3.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/7_4.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/7_5.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/7_6.jpg'), 'month' => 'apr'],

    // WEEK 8 - APR
    ['src' => asset('image/docu/8_1.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/8_2.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/8_3.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/8_4.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/8_5.jpg'), 'month' => 'apr'],

    // WEEK 9 - APR
    ['src' => asset('image/docu/9_1.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/9_2.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/9_3.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/9_4.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/9_5.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/9_6.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/9_7.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/9_8.jpg'), 'month' => 'apr'],
    ['src' => asset('image/docu/9_9.jpg'), 'month' => 'apr'],

    // WEEK 10 - MAY
    ['src' => asset('image/docu/10_1.jpg'), 'month' => 'may'],
    ['src' => asset('image/docu/10_2.jpg'), 'month' => 'may'],
    ['src' => asset('image/docu/10_3.jpg'), 'month' => 'may'],
    ['src' => asset('image/docu/10_4.jpg'), 'month' => 'may'],
    ['src' => asset('image/docu/10_5.jpg'), 'month' => 'may'],
    ['src' => asset('image/docu/10_6.jpg'), 'month' => 'may'],
];
@endphp

<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 md:gap-6">
    @foreach ($images as $index => $img)
    <div 
        class="gallery-item group relative aspect-square bg-white rounded-3xl overflow-hidden border-2 md:border-4 border-white shadow-sm hover:shadow-xl transition-all duration-500"
        data-month="{{ $img['month'] }}"
        data-index="{{ $index }}"
    >
        <img 
            src="{{ $img['src'] }}"
            class="w-full h-full object-cover group-hover:scale-110 transition duration-700 cursor-pointer"
            onclick="openModal({{ $index }})"
        >
        <div class="absolute inset-0 bg-gradient-to-t from-orange-500/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
    </div>
    @endforeach
</div>

{{-- MODAL --}}
<div id="imageModal" class="fixed inset-0 bg-black/80 hidden items-center justify-center z-50">
    
    {{-- CLOSE --}}
    <span class="absolute top-5 right-8 text-white text-3xl cursor-pointer" onclick="closeModal()">✕</span>

    {{-- IMAGE --}}
    <img id="modalImage" class="max-w-[90%] max-h-[80%] rounded-xl shadow-lg">

    {{-- NAVIGATION --}}
    <button onclick="prevImage()" class="absolute left-5 text-white text-4xl">❮</button>
    <button onclick="nextImage()" class="absolute right-5 text-white text-4xl">❯</button>
</div>

{{-- STYLES --}}
<style>
.filter-btn {
    padding: 8px 16px;
    border-radius: 9999px;
    background: #e2e8f0;
    color: #334155;
    font-weight: 500;
    transition: 0.3s;
}
.filter-btn:hover {
    background: #fb923c;
    color: white;
}
.filter-btn.active {
    background: #f97316;
    color: white;
}
</style>

{{-- SCRIPT --}}
<script>
let currentIndex = 0;
let images = @json(array_column($images, 'src'));

document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll('.gallery-item');
    const buttons = document.querySelectorAll('.filter-btn');

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            buttons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.dataset.filter;

            items.forEach(item => {
                if (filter === 'all' || item.dataset.month === filter) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });
        });
    });
});

// OPEN MODAL
function openModal(index) {
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');

    currentIndex = index;
    modalImg.src = images[currentIndex];

    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

// CLOSE
function closeModal() {
    const modal = document.getElementById('imageModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

// CLICK OUTSIDE CLOSE
document.getElementById('imageModal').addEventListener('click', function(e) {
    if (e.target.id === 'imageModal') {
        closeModal();
    }
});

// NEXT
function nextImage() {
    currentIndex = (currentIndex + 1) % images.length;
    document.getElementById('modalImage').src = images[currentIndex];
}

// PREV
function prevImage() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    document.getElementById('modalImage').src = images[currentIndex];
}
</script>

@endsection