@extends('layouts.mahasiswa')

@section('content')

{{-- HEADER ATAS (STAY SAAT SCROLL, LOGIN DI POJOK KANAN) --}}
<header class="fixed top-0 inset-x-0 z-50 bg-white/90 backdrop-blur shadow-sm">
    <div class="w-full pl-4 pr-6 py-2 flex items-center justify-end">
        <a href="{{ route('login') }}"
           class="px-5 py-2 bg-orange-500 hover:bg-orange-600 text-white rounded-full text-sm font-semibold shadow transition-all duration-200">
            Login Admin
        </a>
    </div>
</header>

{{-- KONTEN: DORONG SEDIKIT KE BAWAH SUPAYA TIDAK TERTUTUP HEADER --}}
<div class="pt-14 min-h-screen bg-gray-50 flex">

    {{-- SIDEBAR (tetap di kiri, sticky saat scroll) --}}
    <aside
        class="hidden md:flex w-64 bg-white border-r flex-col sticky top-14 self-start h-[calc(100vh-3.5rem)]">
        <div class="px-6 py-4 font-bold text-orange-500 text-lg border-b">
            SIMAWA ITH
        </div>

        <nav class="flex-1 px-4 py-6 space-y-2 text-sm overflow-y-auto">

            {{-- Kalender --}}
            <a href="#kalender" class="flex items-center gap-3 px-3 py-2 rounded-lg bg-orange-50 text-orange-600 font-semibold">
                <span class="text-lg">📅</span>
                <span>Kalender Kegiatan</span>
            </a>

            {{-- BEM --}}
            <a href="#bem" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100">
                <span class="text-lg">🏛️</span>
                <span>Badan Eksekutif Mahasiswa</span>
            </a>

            {{-- News --}}
            <a href="#news" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100">
                <span class="text-lg">📰</span>
                <span>News</span>
            </a>

            {{-- Tes Minat --}}
            <a href="#tesminat" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100">
                <span class="text-lg">🧠</span>
                <span>Tes Minat</span>
            </a>
        </nav>
    </aside>

    {{-- KONTEN UTAMA --}}
    <main class="flex-1 flex flex-col">

        {{-- Top bar untuk mobile (hanya muncul di layar kecil) --}}
        <div class="md:hidden bg-white shadow-sm p-3 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="font-bold text-orange-500">SIMAWA ITH</div>
            </div>
            <a href="{{ route('login') }}" class="text-sm text-orange-600 font-medium">
                Login Admin
            </a>
        </div>

        {{-- HERO --}}
        <section class="w-full">
            <div
                class="relative w-full h-[320px] sm:h-[340px] md:h-[380px] lg:h-[400px] bg-center bg-cover overflow-hidden"
                style="background-image: url('{{ asset('images/kampus.jpeg') }}');">

                {{-- Overlay oranye --}}
                <div class="absolute inset-0 bg-orange-900/40"></div>

                {{-- Teks di tengah --}}
                <div class="absolute inset-0 z-10 flex items-center justify-center text-center px-4">
                    <div class="max-w-3xl">
                        <p class="text-sm tracking-widest text-white/90">WELCOME TO</p>
                        <h1 class="mt-2 text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-widest text-white">
                            SIMAWA
                        </h1>
                        <p class="mt-2 text-sm md:text-base text-white/90">
                            Institut Teknologi Bacharuddin Jusuf Habibie
                        </p>
                    </div>
                </div>

                {{-- Fade putih di bawah --}}
                <div class="absolute bottom-0 left-0 right-0 h-8 bg-gradient-to-t from-white/70 to-transparent pointer-events-none"></div>
            </div>
        </section>

        {{-- Search & bulan --}}
        <div class="bg-gray-100 px-6 pb-4">
            {{-- Search kegiatan --}}
            <div class="max-w-xl mx-auto -mt-4 mb-4 relative z-10">
                <div class="bg-white shadow-md rounded-full flex items-center px-4 py-2">
                    <input
                        type="text"
                        placeholder="Cari Kegiatan"
                        class="flex-1 text-sm outline-none border-none bg-transparent">
                    <button class="text-gray-500">🔍</button>
                </div>
            </div>

            {{-- Bulan --}}
            <div class="flex items-center justify-center mt-4 gap-6 text-sm font-semibold text-orange-600">
                <button class="text-2xl bg-white rounded-md px-2 py-1 shadow-sm">&lt;</button>
                <span class="px-3 py-1 bg-white rounded-md shadow">November, 2022</span>
                <button class="text-2xl bg-white rounded-md px-2 py-1 shadow-sm">&gt;</button>
            </div>
        </div>

        {{-- KALENDER --}}
        <section id="kalender" class="px-6 py-4 scroll-mt-24">
            <div class="bg-gray-100 rounded-lg p-4 md:p-6">
                <div class="grid grid-cols-7 text-center text-sm font-semibold text-gray-600 mb-3">
                    <div>Minggu</div><div>Senin</div><div>Selasa</div>
                    <div>Rabu</div><div>Kamis</div><div>Jumat</div><div>Sabtu</div>
                </div>

                <div class="grid grid-cols-7 gap-2 text-sm">
                    @php
                        $cells = array_fill(0,35,null);
                        $start = 5; // day index where day 1 starts
                        for ($i = 0; $i < 30; $i++) {
                            $cells[$start + $i] = $i + 1;
                        }
                    @endphp

                    @foreach ($cells as $c)
                        <div class="min-h-[64px] p-2 rounded-md border border-gray-200 bg-white flex flex-col transition-shadow hover:shadow-sm">
                            @if ($c)
                                <div class="text-xs font-medium text-gray-700">
                                    <span class="inline-flex w-6 h-6 items-center justify-center rounded-full bg-gray-100">
                                        {{ $c }}
                                    </span>
                                </div>

                                @if ($c == 13)
                                    <div class="mt-2 flex flex-col gap-1 text-[11px]">
                                        <span class="inline-block px-2 py-0.5 rounded-full bg-purple-50 text-purple-700">Seminar</span>
                                        <span class="inline-block px-2 py-0.5 rounded-full bg-indigo-50 text-indigo-700">Pelatihan</span>
                                    </div>
                                @elseif ($c == 5)
                                    <div class="mt-2">
                                        <span class="inline-block px-2 py-0.5 rounded-full bg-green-50 text-green-700">UKM Fair</span>
                                    </div>
                                @endif
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- BAGIAN BEM --}}
        <section id="bem" class="px-6 pb-10 space-y-10 scroll-mt-24">
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h2 class="text-center text-xl font-bold mb-6">Badan Eksekutif Mahasiswa</h2>

                <div class="flex flex-col md:flex-row items-center gap-6">
                    {{-- Kotak logo BEM --}}
                    <a href="{{ route('bem.page') }}"
   class="w-48 h-48 flex items-center justify-center rounded-xl border bg-white overflow-hidden shadow-sm hover:shadow-md transition">
    <img src="{{ asset('images/bemith.png') }}" alt="Logo BEM" class="w-40 h-40 object-contain">
</a>

                    <p class="text-sm text-justify leading-relaxed">
                        Badan Eksekutif Mahasiswa hadir sebagai penggerak utama dinamika kampus. Melalui berbagai program,
                        kegiatan, dan advokasi, BEM berupaya memberikan ruang bagi mahasiswa untuk tumbuh, memimpin, dan
                        berkontribusi secara nyata, serta memperkuat rasa kebersamaan.
                    </p>
                </div>
            </div>

            {{-- NEWS --}}
            <div id="news" class="bg-white rounded-xl shadow-sm p-6 scroll-mt-24">
                <h2 class="text-center text-xl font-bold mb-6">NEWS</h2>
                <div class="grid md:grid-cols-3 gap-4 text-sm">
                    @foreach (range(1,3) as $i)
                        <div class="bg-gray-100 rounded-lg overflow-hidden">
                            <div class="h-32 bg-gray-300"></div>
                            <div class="p-3">
                                <p class="font-semibold mb-1">Judul Kegiatan {{ $i }}</p>
                                <p class="text-xs text-gray-600">Deskripsi singkat kegiatan...</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- UKM + Tes Minat --}}
            <div class="bg-white rounded-xl shadow-sm p-6 space-y-8">
                <h2 class="text-center text-xl font-bold">DAFTAR UKM</h2>

                <div class="bg-orange-100 rounded-2xl p-4 flex flex-wrap gap-4 justify-center">
                    @foreach (['HERO','HCC','SENI','OLAHRAGA'] as $ukm)
                        <div class="w-28 h-28 bg-white rounded-xl shadow flex flex-col items-center justify-center">
                            @if ($ukm === 'HERO')
                                <img src="{{ asset('images/hero.png') }}"
                                     alt="Logo HERO"
                                     class="w-12 h-12 object-contain mb-2">
                            @else
                                <div class="w-12 h-12 bg-gray-300 rounded mb-2"></div>
                            @endif

                            <span class="text-xs font-semibold">{{ $ukm }}</span>
                        </div>
                    @endforeach
                </div>

                <div id="tesminat" class="text-center scroll-mt-24">
                    <p class="font-semibold mb-2">TES MINAT</p>
                    <a href="#" class="px-6 py-2 rounded-full bg-orange-500 text-white text-sm">
                        Ayo Mulai Tes!
                    </a>
                </div>
            </div>
        </section>

    </main>
</div>

@endsection
