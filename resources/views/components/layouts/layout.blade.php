<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-800 text-gray-300">
    <header id="navigation" class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="" title="">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="" title="">Jobs</a>
                <a href="" title="">Careers</a>
                <a href="" title="">Salaries</a>
                <a href="" title="">Companies</a>
            </div>
            <div><a href="">post a job</a></div>
        </nav>
    </header>
    <main class="mt-10 px-10 max-w-[986px] mx-auto">
        {{ $slot }}
    </main>
</body>

</html>
