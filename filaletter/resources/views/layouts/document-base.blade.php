<!doctype html>
<html lang="en-GB">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <x-seo />
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/github-dark.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/php.min.js"></script>

    @vite('resources/css/app.css')

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C2CB9NHBP5"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-C2CB9NHBP5');
    </script>
</head>

<body>
    <header
        class="sticky top-0 z-50 flex items-center justify-between px-3 py-2 border-b shadow-lg bg-slate-900 backdrop-blur-sm border-slate-400/40">
        <div class="flex items-center flex-grow basis-0 my-2 px-2 xl:px-10">
            <a href="{{ route('home') }}" class="flex items-center text-lg font-semibold tracking-tight text-white">
                <x-filasend class="w-10 h-10" />
                <span class="ml-4 text-md">Filament Newsletter</span>
            </a>
        </div>
        <div class="relative">
            <select
                class="min-w-[5rem] block w-full px-3 py-2 text-sm font-medium bg-white border border-slate-600 rounded-md shadow-sm focus:outline-none"
                id="version-selector">
                <option value="v3.x" {{ request()->query('version') === 'v3.x' ? 'selected' : '' }}>v3.x</option>
                <option value="v2.x" {{ request()->query('version') === 'v2.x' ? 'selected' : '' }}>v2.x</option>
                <option value="v1.x" {{ request()->query('version') === 'v1.x' ? 'selected' : '' }}>v1.x</option>
            </select>
        </div>
        <script>
            document.getElementById('version-selector').addEventListener('change', function() {
                const selectedVersion = this.value;
                const url = new URL(window.location.href);
                url.searchParams.set('version', selectedVersion);
                window.location.href = url.toString();
            });
        </script>
    </header>

    <main class="relative flex justify-center mx-auto max-w-8xl sm:px-2 lg:px-8 xl:px-12">
        <label for="navigation"
            class="fixed bottom-0 left-0 z-50 flex items-center justify-center w-12 h-12 mb-4 ml-4 bg-white border rounded-full shadow-lg cursor-pointer text-slate-600 border-slate-300 lg:hidden transition duration-200 ease-in-out active:scale-95">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
            </svg>
        </label>

        <input type="checkbox" name="navigation" id="navigation" class="hidden peer" />
        <div
            class="fixed top-[3.5rem] h-screen shadow-xl px-4 left-0 hidden peer-checked:block lg:relative lg:top-0 lg:h-auto lg:px-0 lg:block lg:flex-none lg:shadow-none">
            <div class="absolute inset-y-0 right-0 w-full lg:w-[50vw] bg-white lg:bg-slate-50"></div>

            <x-sidebar />
        </div>

        <div class="flex-auto max-w-2xl min-w-0 px-4 py-10 lg:max-w-none lg:pr-0 lg:pl-8 xl:px-16">
            <article class="doc-content">
                @yield('content')
            </article>
        </div>
    </main>
    <script>
        hljs.highlightAll({ language: 'php' });
    </script>
</body>

</html>