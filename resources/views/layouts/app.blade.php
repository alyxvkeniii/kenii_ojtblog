<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | OJT Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Quicksand', sans-serif; }
        .bg-pastel { background-color: #FFFBF9; }
        details summary::-webkit-details-marker { display: none; }
    </style>
</head>
<body class="bg-pastel text-slate-700 antialiased">

    <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-orange-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <a href="/" class="text-xl md:text-2xl font-bold text-orange-500 hover:scale-105 transition">
                    ✨ OJT<span class="text-blue-400 font-medium">Logs</span>
                </a>
                
                <div class="hidden md:flex space-x-8 text-sm font-bold uppercase tracking-widest text-slate-600">
                    <a href="/" class="hover:text-orange-500 transition">Home</a>
                    <a href="/logs" class="hover:text-orange-500 transition">Logs</a>
                    <a href="/gallery" class="hover:text-orange-500 transition">Gallery</a>
                    <a href="/about" class="hover:text-orange-500 transition">About</a>
                </div>

                <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="md:hidden text-slate-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-orange-50 p-4 space-y-3 shadow-lg">
            <a href="/" class="block font-bold text-slate-600">Home</a>
            <a href="/logs" class="block font-bold text-slate-600">Weekly Logs</a>
            <a href="/gallery" class="block font-bold text-slate-600">Gallery</a>
            <a href="/about" class="block font-bold text-slate-600">About Me</a>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-12">
        @yield('content')
    </main>

    <footer class="py-10 text-center text-slate-400 text-xs border-t border-orange-100">
        <p>© 2026 OJT Portfolio • Bicol University</p>
    </footer>
</body>
</html>