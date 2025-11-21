@extends('layouts.mahasiswa')

@section('content')

{{-- HEADER STAY (ambil dari layout) --}}
<div class="pt-20 flex">

    {{-- SIDEBAR --}}
    <aside class="hidden md:flex w-64 bg-white border-r flex-col sticky top-20 self-start h-[calc(100vh-5rem)]">
        <div class="px-6 py-4 font-bold text-orange-500 text-lg border-b">
            SIMAWA ITH
        </div>

        <nav class="flex-1 px-4 py-6 space-y-2 text-sm overflow-y-auto">
            <a href="{{ url('/dashboard-mahasiswa') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100">
                <span class="text-lg">📅</span> <span>Kalender Kegiatan</span>
            </a>

            <a href="{{ route('bem.page') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg bg-orange-50 text-orange-600 font-semibold">
                <span class="text-lg">🏛️</span> <span>Badan Eksekutif Mahasiswa</span>
            </a>

            <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100">
                <span class="text-lg">📰</span> <span>News</span>
            </a>

            <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100">
                <span class="text-lg">🧠</span> <span>Tes Minat</span>
            </a>
        </nav>
    </aside>

    {{-- MAIN HALAMAN BEM --}}
    <main class="flex-1 px-6 pb-10">

        {{-- HERO BEM --}}
        <div class="w-full h-72 sm:h-80 md:h-96 rounded-xl overflow-hidden relative mb-10"
             style="background-image: url('{{ asset('images/kampus.jpeg') }}'); background-size: cover; background-position: center;">
            <div class="absolute inset-0 bg-black/40"></div>

            <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-3">
                <p class="text-sm tracking-widest">WELCOME TO</p>
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-wider">
                    Badan Eksekutif Mahasiswa
                </h1>
                <p class="mt-2 text-white/90">
                    Institut Teknologi Bacharuddin Jusuf Habibie
                </p>
            </div>
        </div>

        {{-- LOGO BEM --}}
        <div class="flex justify-center mb-10">
            <div class="w-40 h-40 md:w-48 md:h-48 rounded-xl bg-white border shadow flex items-center justify-center">
                <img src="{{ asset('images/bemith.png') }}" class="w-32 h-32 object-contain" alt="BEM ITH">
            </div>
        </div>

        {{-- 3 SECTION BEM --}}
        <div class="grid md:grid-cols-2 gap-6">

            {{-- Organizational Structure --}}
            <div class="bg-white shadow rounded-xl p-6">
                <h3 class="font-bold mb-2">Organizational Structure</h3>
                <p class="text-sm text-gray-700 leading-relaxed">
                    The BEM consists of elected representatives, committees, and advisory boards.
                </p>
            </div>

            {{-- Vision --}}
            <div class="bg-white shadow rounded-xl p-6">
                <h3 class="font-bold mb-2">Vision</h3>
                <p class="text-sm text-gray-700 leading-relaxed">
                    To empower the student body and foster a vibrant academic community.
                </p>
            </div>

            {{-- Mission --}}
            <div class="bg-white shadow rounded-xl p-6 md:col-span-2">
                <h3 class="font-bold mb-2">Mission</h3>
                <p class="text-sm text-gray-700 leading-relaxed">
                    To represent students’ interests and enhance their university experience.
                </p>
            </div>

        </div>

    </main>

</div>

@endsection
