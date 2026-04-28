@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="flex flex-col lg:flex-row gap-8 lg:gap-16 items-center lg:items-start">
    <div class="w-full lg:w-1/3">
        <div class="relative group">
            <div class="absolute inset-0 bg-blue-200 rounded-[3rem] rotate-6 group-hover:rotate-3 transition duration-500"></div>
            <img src="{{ asset('image/pfp.jpg') }}"  
                 class="relative rounded-[3rem] w-full shadow-xl grayscale hover:grayscale-0 transition duration-500">
        </div>
    </div>

    <div class="w-full lg:w-2/3 text-center lg:text-left space-y-6">
        <h1 class="text-4xl md:text-6xl font-black text-slate-800">The <span class="text-blue-400 underline decoration-orange-200">Creative</span> Intern.</h1>
        <p class="text-lg text-slate-600 leading-relaxed">
            A fourth-year IT student at Bicol University gaining practical experience through OJT, involving document organization, requirement verification, report encoding, student assistance, and basic system-related tasks in a real office environment.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-4">
            <div class="p-6 bg-white rounded-[2rem] border border-orange-100 shadow-sm">
                <h4 class="font-bold text-orange-500 mb-2 uppercase text-xs tracking-widest">Company</h4>
                <p class="font-bold text-slate-800">Office of the Student Affairs and Services</p>
            </div>
            <div class="p-6 bg-white rounded-[2rem] border border-blue-100 shadow-sm">
                <h4 class="font-bold text-blue-400 mb-2 uppercase text-xs tracking-widest">Role</h4>
                <p class="font-bold text-slate-800">On-the-Job Training Intern</p>
            </div>
            <div class="p-6 bg-white rounded-[2rem] border border-blue-100 shadow-sm">
                <h4 class="font-bold text-blue-400 mb-2 uppercase text-xs tracking-widest">Duration</h4>
                <p class="font-bold text-slate-800">486 Hours (Ongoing)</p>
            </div>
        </div>
    </div>
</div>
@endsection