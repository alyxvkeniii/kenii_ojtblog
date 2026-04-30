@props(['week', 'title', 'date', 'content', 'moreContent' => null, 'images'])

@php
    $imageCount = count($images);
    $displayCount = 5;
    $visibleImages = collect($images)->take($displayCount);
@endphp

<div class="bg-white rounded-3xl shadow-md border border-orange-50 overflow-hidden mb-10 hover:shadow-lg transition-shadow duration-300" 
     x-data="{ 
        showModal: false, 
        currentView: 'single', 
        activeImg: '',
        allImages: {{ json_encode($images) }},
        expanded: false,
        limit: 160
     }">
    
    {{-- User Header --}}
    <div class="p-4 flex items-center space-x-3">
        <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-orange-300 to-blue-300 p-0.5">
            <img src="{{ asset('image/pfp1.JPG') }}" class="rounded-full w-full h-full object-cover">
        </div>
        <div>
            <h4 class="font-bold text-sm">alyxvkeniii</h4>
            <p class="text-xs text-slate-400">{{ $date }}</p>
        </div>
    </div>

    {{-- Main Photo Grid --}}
    <div class="grid gap-1 bg-slate-100 h-[450px] overflow-hidden 
        @if($imageCount == 1) grid-cols-1 
        @elseif($imageCount == 2) grid-cols-2 
        @elseif($imageCount == 3) grid-cols-2 
        @else grid-cols-6 grid-rows-2 @endif">
        
        @foreach($visibleImages as $index => $img)
            <div class="relative group cursor-pointer overflow-hidden
                @if($imageCount >= 4)
                    @if($index === 0) col-span-3 row-span-2 
                    @elseif($index === 1) col-span-3 row-span-1 
                    @else col-span-1 row-span-1 @endif
                @elseif($imageCount == 3)
                    {{ $index === 0 ? 'row-span-2' : 'col-span-1' }}
                @endif">
                
                <img src="{{ $img }}" 
                     @click="activeImg = '{{ $img }}'; currentView = 'single'; showModal = true"
                     class="w-full h-full object-cover transition duration-300 group-hover:brightness-90">
                
                @if($imageCount > $displayCount && $index === ($displayCount - 1))
                    <div @click.stop="currentView = 'gallery'; showModal = true" 
                         class="absolute inset-0 bg-black/60 flex flex-col items-center justify-center transition-all hover:bg-black/50">
                        <span class="text-white text-3xl font-bold">+{{ $imageCount - 4 }}</span>
                        <span class="text-white text-[10px] uppercase tracking-widest font-bold">View All</span>
                    </div>
                @endif
            </div>
        @endforeach
    </div>

    <div class="p-4">
        <h3 class="font-bold text-slate-800 mb-2">Week {{ $week }}: {{ $title }}</h3>
        
        <div class="text-sm text-slate-600 leading-relaxed">
            {{-- First Layer --}}
            <p>{{ $content }}</p>

            {{-- Second Layer (Hidden initially) --}}
            @if($moreContent)
                <div x-show="expanded" x-collapse class="mt-4 pt-4 border-t border-slate-100">
                    <p>{{ $moreContent }}</p>
                </div>

                <button @click="expanded = !expanded" class="mt-2 text-blue-500 font-bold text-xs uppercase tracking-wider">
                    <span x-show="!expanded">Read More</span>
                    <span x-show="expanded">Show Less</span>
                </button>
            @endif
        </div>
    </div>

    {{-- THE POP-UP MODAL (Lightbox) --}}
    <div x-show="showModal" 
         {{-- Added @click to close when tapping anywhere --}}
         @click="showModal = false"
         class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/95 p-4 cursor-pointer"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @keydown.escape.window="showModal = false"
         style="display: none;">

        {{-- Close Button --}}
        <button @click="showModal = false" 
                class="absolute top-6 right-6 text-white text-5xl font-light hover:text-orange-400 z-[10000]">
            &times;
        </button>

        {{-- Single Image Pop-up --}}
        <div x-show="currentView === 'single'" class="max-w-5xl max-h-screen flex items-center justify-center">
            <img :src="activeImg" 
                 {{-- @click.stop prevents the modal from closing if you click the actual photo --}}
                 @click.stop 
                 class="max-w-full max-h-[90vh] object-contain rounded shadow-2xl cursor-default">
        </div>

        {{-- "View All" Pop-up Gallery --}}
        <div x-show="currentView === 'gallery'" 
             @click.stop {{-- Stop propagation so clicking inside gallery doesn't close it --}}
             class="w-full max-w-6xl h-full flex flex-col pt-16 cursor-default">
            <h2 class="text-white text-2xl font-bold mb-8 text-center">Weekly Gallery ({{ $imageCount }} Photos)</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 overflow-y-auto px-4 pb-10 custom-scrollbar">
                <template x-for="(img, i) in allImages" :key="i">
                    <div class="aspect-square cursor-pointer hover:scale-95 transition-transform" 
                         @click="activeImg = img; currentView = 'single'">
                        <img :src="img" class="w-full h-full object-cover rounded-lg border border-white/10">
                    </div>
                </template>
            </div>
        </div>
    </div>
</div>