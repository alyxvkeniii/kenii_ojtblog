@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="text-center py-12">
    <div class="relative inline-block">
        <div class="absolute -top-6 -right-6 text-4xl animate-bounce">✨</div>
        <h1 class="text-5xl font-extrabold text-slate-800 tracking-tight">
            My OJT <span class="text-orange-500 underline decoration-blue-200">Adventure</span>
        </h1>
    </div>
    <p class="mt-4 text-slate-500 text-lg">A journey through my on-the-job training experience</p>
</div>

<div class="max-w-md mx-auto bg-white rounded-3xl p-6 shadow-lg border border-orange-50 hover:-translate-y-2 transition-transform duration-300">
    <div class="flex flex-col items-center">
        <img src="{{ asset('image/pfp1.jpg') }}" 
             class="w-32 h-32 shadow-inner mb-4 border-4 border-white">
        
        <h2 class="text-2xl font-bold text-slate-800">KEN ANNE JAYO ACOSTA</h2>
        <p class="text-blue-500 font-medium">BS Information Technology</p>
        <p class="text-center text-slate-500 mt-3 text-sm italic">
            "Debugging life and learning along the way"
        </p>

        <div class="mt-6 flex space-x-3 w-full">
            <a href="/logs" class="flex-1 text-center bg-orange-500 text-white py-3 rounded-2xl font-bold hover:bg-orange-600 transition shadow-md shadow-orange-200">
                View Logs
            </a>
            <a href="/about" class="flex-1 text-center bg-blue-50 text-blue-600 py-3 rounded-2xl font-bold hover:bg-blue-100 transition">
                About Me
            </a>
        </div>
    </div>
</div>
@endsection