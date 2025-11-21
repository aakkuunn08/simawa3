<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMAWA ITH</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    {{-- OPTIONAL: Navbar dengan tombol login admin --}}
    <header class="w-full bg-white shadow-sm border-b px-6 py-3 flex justify-end">
        <a href="{{ route('login') }}"
           class="px-4 py-2 bg-orange-500 text-white rounded-full text-sm font-semibold">
            Login Admin
        </a>
    </header>

    {{-- Konten utama --}}
    <main>
        @yield('content')
    </main>

</body>
</html>
