<!doctype html>
<html lang="en-GB">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <x-seo />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/github-dark.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/php.min.js"></script>

    @vite('resources/css/app.css')
</head>

<body>
    <header
        class="sticky top-0 z-50 flex items-center justify-between px-3 py-2 border-b shadow-lg  bg-slate-900 backdrop-blur-sm border-slate-400/40">
        <div class="flex items-center flex-grow basis-0 my-2 px-2 xl:px-10">
            <a href="{{ route('home') }}" class="flex items-center text-lg font-semibold tracking-tight text-white">
                <x-filasend class="w-10 h-10"/>
                <span class="ml-4 text-md">Filament Newsletter</span>
            </a>
        </div>

        {{-- <form action="https://duckduckgo.com/" class="md:w-80 lg:w-96">
            <span class="relative flex items-center group">
                <svg aria-hidden="true" viewBox="0 0 20 20"
                    class="absolute w-4 h-4 ml-3 fill-slate-400 group-hover:fill-slate-500 group-focus:fill-slate-500">
                    <path
                        d="M16.293 17.707a1 1 0 0 0 1.414-1.414l-1.414 1.414ZM9 14a5 5 0 0 1-5-5H2a7 7 0 0 0 7 7v-2ZM4 9a5 5 0 0 1 5-5V2a7 7 0 0 0-7 7h2Zm5-5a5 5 0 0 1 5 5h2a7 7 0 0 0-7-7v2Zm8.707 12.293-3.757-3.757-1.414 1.414 3.757 3.757 1.414-1.414ZM14 9a4.98 4.98 0 0 1-1.464 3.536l1.414 1.414A6.98 6.98 0 0 0 16 9h-2Zm-1.464 3.536A4.98 4.98 0 0 1 9 14v2a6.98 6.98 0 0 0 4.95-2.05l-1.414-1.414Z">
                    </path>
                </svg>
                <input type="text" name="q" placeholder="Search docs…"
                    class="w-full py-2 pl-10 pr-2 border rounded bg-slate-100 placeholder-slate-400 text-slate-800 border-slate-100 outline outline-offset-2 outline-2 outline-transparent hover:border-slate-200 focus:border-slate-200 focus:outline-slate-600" />
            </span>
            <input type="hidden" name="sites" value="{{ env('APP_URL') }}">
            <input type="submit" value="Search" class="sr-only" />
        </form> --}}

        {{-- <div class="items-center justify-end flex-grow hidden basis-0 md:flex">
            <a href="https://github.com/solutionforest/Filament-Newsletter"
                class="px-4 py-2 text-sm font-semibold rounded bg-slate-50 text-slate-800 transition ease-in-out delay-75 hover:scale-105 duration-200">
                View on GitHub →
            </a>
        </div> --}}
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
                {{-- <header class="">
                    <p class="text-base font-medium text-slate-500">
                        Getting started
                    </p>

                    <h1 class="text-3xl font-bold tracking-tight text-slate-900">
                        How does Spinal work?
                    </h1>
                </header>

                <p class="mt-2 text-xl text-slate-600">
                    Need to get started quickly with Spinal? You will learn all the basics in just minutes.
                </p>

                <div
                    class="mt-8 prose prose-slate max-w-none prose-headings:font-semibold prose-headings:tracking-tight prose-lead:text-slate-500 prose-a:font-semibold prose-a:underline prose-pre:bg-slate-900">
                    <h2>
                        Humblebrag hammock swag
                    </h2>

                    <p>
                        Humblebrag hammock swag, cardigan praxis yr vexillologist locavore activated charcoal. Offal
                        paleo iPhone, DSA cronut wolf tote bag jianbing yes plz drinking vinegar. Chartreuse polaroid
                        irony offal meggings cornhole crucifix, banh mi glossier taxidermy tattooed shabby chic hashtag
                        cred. 8-bit hammock humblebrag, hot chicken post-ironic meditation farm-to-table cray everyday
                        carry succulents franzen deep v mlkshk unicorn. Literally vexillologist salvia four dollar toast
                        direct trade fixie vice. Typewriter mustache edison bulb, everyday carry DIY craft beer
                        sartorial yr gastropub hot chicken pabst squid.
                    </p>

                    <h3>
                        Paleo yuccie pickled fingerstache
                    </h3>

                    <p>
                        Paleo yuccie pickled fingerstache. Lyft kale chips dreamcatcher kinfolk, hot chicken man braid
                        semiotics iceland cold-pressed tattooed church-key vegan authentic hashtag twee. Small batch
                        mustache chia sriracha irony PBR&B, brooklyn ethical truffaut. Pop-up tumeric ugh, kickstarter
                        quinoa semiotics keffiyeh messenger bag air plant slow-carb. Chillwave selfies thundercats
                        gochujang intelligentsia, marfa butcher forage single-origin coffee la croix coloring book
                        try-hard cred listicle. Messenger bag everyday carry bicycle rights, art party kinfolk stumptown
                        kickstarter green juice meh. Portland bespoke four dollar toast migas mumblecore fanny pack.
                    </p>

                    <h3>
                        Selfies vegan microdosing aesthetic cardigan
                    </h3>

                    <p>
                        Selfies vegan microdosing aesthetic cardigan. Raclette tofu narwhal fanny pack cred flannel.
                        Chartreuse kale chips viral gentrify vape palo santo 90's. Actually activated charcoal meggings
                        try-hard yuccie thundercats tumeric.
                    </p>

                    <h2>
                        Pinterest twee flexitarian
                    </h2>

                    <p>
                        Pinterest twee flexitarian keytar mixtape shaman chambray actually lomo humblebrag keffiyeh
                        yuccie health goth. Edison bulb copper mug listicle cred tote bag swag migas blog yes plz
                        humblebrag. Bespoke keffiyeh kale chips seitan hella. Pok pok chartreuse squid jean shorts small
                        batch, dreamcatcher williamsburg raclette flexitarian yr crucifix. Salvia church-key prism,
                        glossier shabby chic post-ironic retro everyday carry austin master cleanse sustainable.
                        Gastropub kombucha yuccie, photo booth semiotics tumblr vaporware normcore drinking vinegar
                        blog.
                    </p>
                </div> --}}
            </article>

            {{-- <dl class="flex pt-6 mt-6 border-t border-slate-200">
                <div class="mr-auto text-left">
                    <dt class="text-sm font-normal tracking-tight text-slate-600">
                        Previous
                    </dt>

                    <dd class="mt-1">
                        <a href="#" class="text-base font-semibold text-slate-900 hover:underline">
                            Quick start guide
                        </a>
                    </dd>
                </div>

                <div class="ml-auto text-right">
                    <dt class="text-sm font-normal tracking-tight text-slate-600">
                        Next
                    </dt>

                    <dd class="mt-1">
                        <a href="#" class="text-base font-semibold text-slate-900 hover:underline">
                            What are content types?
                        </a>
                    </dd>
                </div>
            </dl> --}}
        </div>
    </main>
    <script>
        hljs.highlightAll({ language: 'php' });
    </script>
</body>

</html>