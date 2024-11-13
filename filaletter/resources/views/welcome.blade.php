<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Filament Newsletter - Send Newsletters Cost-Effectively via Amazon SES</title>
    <meta name="description" content="A self hosted newsletter application in Filament that lets you send trackable emails via Amazon Simple Email Service (SES) at cost effectively than other hosted solutions.">
	<meta name="keywords" content="filament, laravel, newsletter, emails, email newsletters, amazon ses, newsletter amazon ses, blast emails, blast emails amazon ses, send emails amazon ses, amazon simple email service, email reports, email subscribers"/>
		
    <!-- Fonts -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @filamentStyles
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-900">

    <div class="flex flex-col min-h-screen justify-between bg-gray-900">
        <main>
            <!-- Hero section -->
            <div class="relative isolate overflow-hidden">
                <svg class="absolute inset-0 -z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
                    aria-hidden="true">
                    <defs>
                        <pattern id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc" width="200" height="200" x="50%" y="-1"
                            patternUnits="userSpaceOnUse">
                            <path d="M.5 200V.5H200" fill="none" />
                        </pattern>
                    </defs>
                    <svg x="50%" y="-1" class="overflow-visible fill-gray-800/20">
                        <path
                            d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                            stroke-width="0" />
                    </svg>
                    <rect width="100%" height="100%" stroke-width="0"
                        fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)" />
                </svg>
                <div class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]"
                    aria-hidden="true">
                    <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20"
                        style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
                    </div>
                </div>
                <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
                    <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:pt-8">
                        <x-filasend class="w-12 h-12"/>
                        <h1 class="mt-10 text-pretty text-5xl font-semibold tracking-tight text-white sm:text-7xl">
                            Filament Newsletter</h1>
                        <p class="mt-8 text-pretty text-lg font-medium text-gray-400 sm:text-xl/8">Effortlessly manage
                            your newsletters with our Filament Newsletter package, designed for seamless integration
                            with the Filament Admin Panel. Enjoy flexible and user-friendly email marketing directly
                            within your admin panel.</p>
                        <div class="mt-10 flex items-center gap-x-6">
                            <a href="{{ route('docs', ['path' => '1-getting-started', 'title' => '1-introduction']) }}"
                                class="rounded-md bg-primary-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-primary-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-400">Documents</a>
                            <a href="#"
                                class="text-sm font-semibold leading-6 text-white">View on Filament Plugin <span
                                    aria-hidden="true">→</span></a>
                        </div>
                    </div>
                    <div
                        class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
                        <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
                            <img src="{{ asset('images/capscreens/capscreen-1.png') }}" alt="App screenshot"
                                width="2432" height="1442"
                                class="w-[76rem] rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logo cloud -->
            <div class="mx-auto mt-8 max-w-7xl px-6 sm:mt-16 lg:px-8">
                <h2 class="text-center text-lg font-semibold leading-8 text-white uppercase">Compatible with</h2>
                <div
                    class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                    <img class="col-span-2 h-16 w-full object-contain lg:col-span-1 bg-zinc-100 rounded-xl px-6 py-4"
                        src="{{ asset('images/icons/ses.png') }}" alt="Transistor" width="158" height="48">
                    <img class="col-span-2 h-16 w-full object-contain lg:col-span-1 bg-zinc-100 rounded-xl px-6 py-4"
                        src="{{ asset('images/icons/mailgun.png') }}" alt="Reform" width="158" height="48">
                    <img class="col-span-2 h-16 w-full object-contain lg:col-span-1 bg-zinc-100 rounded-xl px-6 py-4"
                        src="{{ asset('images/icons/sendgrid.png') }}" alt="Tuple" width="158" height="48">
                    <img class="col-span-2 h-16 w-full object-contain sm:col-start-2 lg:col-span-1 bg-zinc-100 rounded-xl px-6 py-4"
                        src="{{ asset('images/icons/postmark.png') }}" alt="SavvyCal" width="158" height="48">
                    <img class="col-span-2 col-start-2 h-16 w-full object-contain sm:col-start-auto lg:col-span-1 bg-zinc-100 rounded-xl px-6 py-4"
                        src="{{ asset('images/icons/mailjet.png') }}" alt="Statamic" width="158" height="48">
                </div>
            </div>

            <!-- Feature section -->
            {{-- <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-56 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base font-semibold leading-7 text-primary-400">Deploy faster</h2>
                    <p
                        class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-white sm:text-5xl lg:text-balance">
                        Everything you need to deploy your app</p>
                    <p class="mt-6 text-lg leading-8 text-gray-300">Quis tellus eget adipiscing convallis sit sit eget
                        aliquet quis. Suspendisse eget egestas a elementum pulvinar et feugiat blandit at. In mi viverra
                        elit nunc.</p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                        <div class="flex flex-col">
                            <dt class="text-base font-semibold leading-7 text-white">
                                <div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-primary-500">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                                    </svg>
                                </div>
                                Server monitoring
                            </dt>
                            <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-300">
                                <p class="flex-auto">Non quo aperiam repellendus quas est est. Eos aut dolore aut ut
                                    sit nesciunt. Ex tempora quia. Sit nobis consequatur dolores incidunt.</p>
                                <p class="mt-6">
                                    <a href="#" class="text-sm font-semibold leading-6 text-primary-400">Learn
                                        more <span aria-hidden="true">→</span></a>
                                </p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="text-base font-semibold leading-7 text-white">
                                <div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-primary-500">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                    </svg>
                                </div>
                                Collaborate
                            </dt>
                            <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-300">
                                <p class="flex-auto">Vero eum voluptatem aliquid nostrum voluptatem. Vitae esse natus.
                                    Earum nihil deserunt eos quasi cupiditate. A inventore et molestiae natus.</p>
                                <p class="mt-6">
                                    <a href="#" class="text-sm font-semibold leading-6 text-primary-400">Learn
                                        more <span aria-hidden="true">→</span></a>
                                </p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="text-base font-semibold leading-7 text-white">
                                <div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-primary-500">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                    </svg>
                                </div>
                                Task scheduling
                            </dt>
                            <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-300">
                                <p class="flex-auto">Et quod quaerat dolorem quaerat architecto aliquam accusantium. Ex
                                    adipisci et doloremque autem quia quam. Quis eos molestiae at iure impedit.</p>
                                <p class="mt-6">
                                    <a href="#" class="text-sm font-semibold leading-6 text-primary-400">Learn
                                        more <span aria-hidden="true">→</span></a>
                                </p>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div> --}}

            <!-- Feature section -->
            <div class="mt-32 sm:mt-56">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl sm:text-center">
                        <h2 class="text-base font-semibold leading-7 text-primary-400">Everything you need</h2>
                        <p
                            class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-white sm:text-balance sm:text-5xl">
                            Manage Newsletter with Ease.</p>
                        <p class="mt-6 text-lg leading-8 text-gray-300">Designed to integrate seamlessly with the
                            Filament Admin Panel,
                            it offers a user-friendly interface and powerful features to streamline your email marketing
                            campaigns.</p>

                    </div>
                </div>
                <div class="relative overflow-hidden pt-16">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <img src="{{ asset('images/capscreens/capscreen-13.png') }}" alt="App screenshot"
                            class="mb-[-12%] rounded-xl shadow-2xl ring-1 ring-white/10" width="2432" height="1442">
                        <div class="relative" aria-hidden="true">
                            <div class="absolute -inset-x-20 bottom-0 bg-gradient-to-t from-gray-900 pt-[14%]"></div>
                        </div>
                    </div>
                </div>
                <div class="mx-auto mt-16 max-w-7xl px-6 sm:mt-20 md:mt-24 lg:px-8">
                    <dl
                        class="mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-10 text-base leading-7 text-gray-300 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-x-8 lg:gap-y-16">

                        <div class="relative pl-9">
                            <dt class="inline font-semibold text-white">
                                <svg class="absolute left-1 top-1 h-5 w-5 text-primary-500"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M2.25 2.25a.75.75 0 0 0 0 1.5H3v10.5a3 3 0 0 0 3 3h1.21l-1.172 3.513a.75.75 0 0 0 1.424.474l.329-.987h8.418l.33.987a.75.75 0 0 0 1.422-.474l-1.17-3.513H18a3 3 0 0 0 3-3V3.75h.75a.75.75 0 0 0 0-1.5H2.25Zm6.54 15h6.42l.5 1.5H8.29l.5-1.5Zm8.085-8.995a.75.75 0 1 0-.75-1.299 12.81 12.81 0 0 0-3.558 3.05L11.03 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 1 0 1.06 1.06l2.47-2.47 1.617 1.618a.75.75 0 0 0 1.146-.102 11.312 11.312 0 0 1 3.612-3.321Z"
                                        clip-rule="evenodd" />
                                </svg>

                                Dashboard charts.
                            </dt>
                            <dd class="inline"></dd>
                            Visualize your campaign performance with interactive charts and graphs.
                        </div>
                        <div class="relative pl-9">
                            <dt class="inline font-semibold text-white">
                                <svg class="absolute left-1 top-1 h-5 w-5 text-primary-500"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-6">
                                    <path
                                        d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                                    <path
                                        d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                                </svg>

                                Campaign Management.
                            </dt>
                            <dd class="inline">Manage, preview, send, and track campaigns.</dd>
                        </div>
                        <div class="relative pl-9">
                            <dt class="inline font-semibold text-white">
                                <svg class="absolute left-1 top-1 h-5 w-5 text-primary-500"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-6">
                                    <path
                                        d="M7.5 3.375c0-1.036.84-1.875 1.875-1.875h.375a3.75 3.75 0 0 1 3.75 3.75v1.875C13.5 8.161 14.34 9 15.375 9h1.875A3.75 3.75 0 0 1 21 12.75v3.375C21 17.16 20.16 18 19.125 18h-9.75A1.875 1.875 0 0 1 7.5 16.125V3.375Z" />
                                    <path
                                        d="M15 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 17.25 7.5h-1.875A.375.375 0 0 1 15 7.125V5.25ZM4.875 6H6v10.125A3.375 3.375 0 0 0 9.375 19.5H16.5v1.125c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V7.875C3 6.839 3.84 6 4.875 6Z" />
                                </svg>
                                Template Management.
                            </dt>
                            <dd class="inline">Reuse templates for multiple campaigns.</dd>
                        </div>
                        <div class="relative pl-9">
                            <dt class="inline font-semibold text-white">
                                <svg class="absolute left-1 top-1 h-5 w-5 text-primary-500"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z"
                                        clip-rule="evenodd" />
                                    <path
                                        d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                                </svg>


                                Segment Management.
                            </dt>
                            <dd class="inline">Group subscribers into segments for targeted campaigns.</dd>
                        </div>
                        <div class="relative pl-9">
                            <dt class="inline font-semibold text-white">
                                <svg class="absolute left-1 top-1 h-5 w-5 text-primary-500"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-6">
                                    <path
                                        d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z" />
                                </svg>

                                Subscriber Management.
                            </dt>
                            <dd class="inline">Manage subscriber information efficiently.</dd>
                        </div>
                        <div class="relative pl-9">
                            <dt class="inline font-semibold text-white">
                                <svg class="absolute left-1 top-1 h-5 w-5 text-primary-500"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-6">
                                    <path
                                        d="M5.507 4.048A3 3 0 0 1 7.785 3h8.43a3 3 0 0 1 2.278 1.048l1.722 2.008A4.533 4.533 0 0 0 19.5 6h-15c-.243 0-.482.02-.715.056l1.722-2.008Z" />
                                    <path fill-rule="evenodd"
                                        d="M1.5 10.5a3 3 0 0 1 3-3h15a3 3 0 1 1 0 6h-15a3 3 0 0 1-3-3Zm15 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm2.25.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM4.5 15a3 3 0 1 0 0 6h15a3 3 0 1 0 0-6h-15Zm11.25 3.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM19.5 18a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"
                                        clip-rule="evenodd" />
                                </svg>

                                Email Services.
                            </dt>
                            <dd class="inline"></dd>
                            Manage multiple email services effortlessly. Each campaign can utilize a different email
                            service.
                        </div>
                        <div class="relative pl-9">
                            <dt class="inline font-semibold text-white">
                                <svg class="absolute left-1 top-1 h-5 w-5 text-primary-500"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-6">
                                    <path
                                        d="M4.913 2.658c2.075-.27 4.19-.408 6.337-.408 2.147 0 4.262.139 6.337.408 1.922.25 3.291 1.861 3.405 3.727a4.403 4.403 0 0 0-1.032-.211 50.89 50.89 0 0 0-8.42 0c-2.358.196-4.04 2.19-4.04 4.434v4.286a4.47 4.47 0 0 0 2.433 3.984L7.28 21.53A.75.75 0 0 1 6 21v-4.03a48.527 48.527 0 0 1-1.087-.128C2.905 16.58 1.5 14.833 1.5 12.862V6.638c0-1.97 1.405-3.718 3.413-3.979Z" />
                                    <path
                                        d="M15.75 7.5c-1.376 0-2.739.057-4.086.169C10.124 7.797 9 9.103 9 10.609v4.285c0 1.507 1.128 2.814 2.67 2.94 1.243.102 2.5.157 3.768.165l2.782 2.781a.75.75 0 0 0 1.28-.53v-2.39l.33-.026c1.542-.125 2.67-1.433 2.67-2.94v-4.286c0-1.505-1.125-2.811-2.664-2.94A49.392 49.392 0 0 0 15.75 7.5Z" />
                                </svg>

                                Message Management.
                            </dt>
                            <dd class="inline">View sent and draft messages clearly.</dd>
                        </div>
                        <div class="relative pl-9">
                            <dt class="inline font-semibold text-white">
                                <svg class="absolute left-1 top-1 h-5 w-5 text-primary-500"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025.75.75 0 0 1 .313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 0 1 1.248.313 5.25 5.25 0 0 1-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 1 1 2.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0 1 12 6.75ZM4.117 19.125a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z"
                                        clip-rule="evenodd" />
                                    <path
                                        d="m10.076 8.64-2.201-2.2V4.874a.75.75 0 0 0-.364-.643l-3.75-2.25a.75.75 0 0 0-.916.113l-.75.75a.75.75 0 0 0-.113.916l2.25 3.75a.75.75 0 0 0 .643.364h1.564l2.062 2.062 1.575-1.297Z" />
                                    <path fill-rule="evenodd"
                                        d="m12.556 17.329 4.183 4.182a3.375 3.375 0 0 0 4.773-4.773l-3.306-3.305a6.803 6.803 0 0 1-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 0 0-.167.063l-3.086 3.748Zm3.414-1.36a.75.75 0 0 1 1.06 0l1.875 1.876a.75.75 0 1 1-1.06 1.06L15.97 17.03a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" />
                                </svg>

                                Workspace Management.
                            </dt>
                            <dd class="inline">Manage distinct subscriber lists and campaigns for various projects.
                            </dd>
                        </div>
                        <div class="relative pl-9">
                            <dt class="inline font-semibold text-white">
                                <svg class="absolute left-1 top-1 h-5 w-5 text-primary-500"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-6">
                                    <path
                                        d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                    <path
                                        d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                </svg>

                                Supports Multiple Editors.
                            </dt>
                            <dd class="inline"></dd>
                            Use the editor of your choice to create and edit your email templates.
                        </div>
                    </dl>
                </div>
            </div>

            <!-- Stats -->
            {{-- <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-56 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
                    <h2 class="text-base font-semibold leading-8 text-primary-400">Our track record</h2>
                    <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-white sm:text-5xl">Trusted by
                        thousands of creators&nbsp;worldwide</p>
                    <p class="mt-6 text-lg leading-8 text-gray-300">Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis.</p>
                </div>
                <dl
                    class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-10 text-white sm:mt-20 sm:grid-cols-2 sm:gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">
                    <div class="flex flex-col gap-y-3 border-l border-white/10 pl-6">
                        <dt class="text-sm leading-6">Developers on the platform</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight">8,000+</dd>
                    </div>
                    <div class="flex flex-col gap-y-3 border-l border-white/10 pl-6">
                        <dt class="text-sm leading-6">Daily requests</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight">900m+</dd>
                    </div>
                    <div class="flex flex-col gap-y-3 border-l border-white/10 pl-6">
                        <dt class="text-sm leading-6">Uptime guarantee</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight">99.9%</dd>
                    </div>
                    <div class="flex flex-col gap-y-3 border-l border-white/10 pl-6">
                        <dt class="text-sm leading-6">Projects deployed</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight">12m</dd>
                    </div>
                </dl>
            </div> --}}



            <div class="bg-gray-900 py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <dl class="mt-16 grid grid-cols-1 gap-0.5 overflow-hidden rounded-2xl text-center sm:grid-cols-2 lg:grid-cols-4">
                        <div class="flex flex-col bg-white/5 p-8">
                          <dt class="text-sm/6 font-semibold text-gray-300">Number of subscribers</dt>
                          <dd class="order-first text-3xl font-semibold tracking-tight text-white">Unlimited</dd>
                        </div>
                        <div class="flex flex-col bg-white/5 p-8">
                          <dt class="text-sm/6 font-semibold text-gray-300">Monthly fee</dt>
                          <dd class="order-first text-3xl font-semibold tracking-tight text-white">$0</dd>
                        </div>
                        <div class="flex flex-col bg-white/5 p-8">
                          <dt class="text-sm/6 font-semibold text-gray-300">You own your data</dt>
                          <dd class="order-first text-3xl font-semibold tracking-tight text-white">Privacy</dd>
                        </div>
                        <div class="flex flex-col bg-white/5 p-8">
                          <dt class="text-sm/6 font-semibold text-gray-300">Cost per 10,000 emails (AWS SES)</dt>
                          <dd class="order-first text-3xl font-semibold tracking-tight text-white">$1</dd>
                        </div>
                      </dl>
                </div>
              </div>

              
              

            <div class="relative isolate  px-6 py-24 sm:py-32 lg:px-8">
                <div class="absolute inset-x-0 -top-3 -z-10 transform-gpu overflow-hidden px-36 blur-3xl" aria-hidden="true">
                  <div class="mx-auto aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                </div>
                <div class="mx-auto max-w-4xl text-center">
                  <h2 class="text-base/7 font-semibold text-primary-400">Pricing</h2>
                  <div type="button" class="bg-white font-medium inline-flex items-center mt-4 px-2 py-1 rounded-md text-orange-700 text-sm whitespace-nowrap">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
  class="w-6 h-6 mr-2 duration-500 ease-in-out transition-all cursor-pointer group-hover:rotate-[1deg] group-hover:animage-pulse z-10">
  <defs>
    <radialGradient id="emeraldGradient" cx="50%" cy="50%" fx="50%" fy="50%" gradient-units="userSpaceOnUse" r="35%">
      <stop  offset="50%" stop-color="#f6d95f" />
      <stop offset="75%" stop-color="#ee7311" />
      <stop  offset="100%" stop-color="#c35000" />
    </radialGradient>
  </defs>
  <path stroke-linecap="round" stroke-linejoin="round"
    class="fill-[#ee7311] group-hover:fill-[#ef7a0d] transition-all duration-500 ease-in-out"
    stroke="url(#emeraldGradient)"
    d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />
  <path stroke-linecap="round" stroke-linejoin="round"
    class="fill-[#f6d95f] group-hover:fill-[#f8ffcf] transition-all duration-500 ease-in-out"
    stroke="url(#emeraldGradient)"
    d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z" />
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
  class="absolute animate-ping duration-500 ease-in-out h-6 mr-2 opacity-[0%] scale-[90%] transition-all w-6 z-20">
  <path stroke-linecap="round" stroke-linejoin="round"
    class="fill-[#ee7311] group-hover:fill-[#ef7a0d] transition-all duration-500 ease-in-out"
    stroke="#f6d95f"
    d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />
  <path stroke-linecap="round" stroke-linejoin="round"
    class="fill-[#f6d95f] group-hover:fill-[#f8ffcf] transition-all duration-500 ease-in-out"
    stroke="#f6d95f"
    d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z" />
</svg>
            
                     Early access · 30% off
                </div>
                  <p class="mt-2 text-balance text-5xl font-semibold tracking-tight text-white sm:text-6xl">Choose the right plan for you</p>
                </div>
                <p class="mx-auto mt-6 max-w-2xl text-pretty text-center text-lg font-medium text-gray-400 sm:text-xl/8">Choose an affordable plan that’s packed with the best features for engaging your audience, creating customer loyalty, and driving sales.</p>
                <div class="mx-auto mt-16 grid max-w-lg grid-cols-1 items-center gap-y-6 sm:mt-20 sm:gap-y-0 lg:max-w-4xl lg:grid-cols-2">
                  <div class="rounded-3xl rounded-t-3xl bg-white p-8 ring-1 ring-gray-900/10 sm:mx-8 sm:rounded-b-none sm:p-10 lg:mx-0 lg:rounded-bl-3xl lg:rounded-tr-none">
                    <h3 id="tier-hobby" class="text-base/7 font-semibold text-primary-400">Single Website License</h3>
                    <p class="mt-4 flex items-baseline gap-x-2">
                      <div class="line-through text-zinc-400 dark:text-zinc-300 font-medium text-xl">$99</div>
                      <span class="text-5xl font-semibold tracking-tight text-gray-900">$69</span>
                      <span class="text-base text-gray-500">per site</span>
                    </p>
                    <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-600 sm:mt-10">
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-primary-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        1 Website
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-primary-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        No monthly fees
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-primary-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Supports Filament V3
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-primary-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        2 activations (local and production).
                      </li>
                    </ul>
                    <a href="#" aria-describedby="tier-hobby" class="mt-8 block rounded-md px-3.5 py-2.5 text-center text-sm font-semibold text-primary-600 ring-1 ring-inset ring-primary-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 hover:bg-primary-400 hover:text-white sm:mt-10">Get started today</a>
                  </div>
                  <div class="relative rounded-3xl shadow-2xl ring-1 ring-white/10  bg-gray-900 p-8 ring-1 sm:p-10">
                    <div class="flex items-center justify-between gap-x-4">
                        <h3 id="tier-enterprise" class="text-base/7 font-semibold text-primary-400">Unlimited Website License</h3>
                        <p class="rounded-full bg-primary-500 px-2.5 py-1 text-xs/5 font-semibold text-white">Most popular</p>
                    </div>
                   \
                    <p class="mt-4 flex items-baseline gap-x-2">
                        <div class="line-through text-zinc-400 dark:text-zinc-300 font-medium text-xl">$499</div>
                      <span class="text-5xl font-semibold tracking-tight text-white">$349</span>
                      <span class="text-base text-gray-400">one-time</span>
                    </p>
                    <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-300 sm:mt-10">
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-primary-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Unlimited Websites
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-primary-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        No monthly fees
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-primary-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Supports Filament V3
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-primary-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Unlimited activations
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-primary-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Ready-to-Use Package with API Access
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-primary-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        1 year of free updates, no subscription
                      </li>
                    </ul>
                    <a href="#" aria-describedby="tier-enterprise" class="mt-8 block rounded-md bg-primary-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-primary-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 sm:mt-10">Get started today</a>
                  </div>
                </div>
              </div>


              <div class="bg-gray-900">
                <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8 lg:py-40">
                  <div class="mx-auto max-w-4xl divide-y divide-white/10">
                    <h2 class="text-4xl font-semibold tracking-tight text-white sm:text-5xl">Frequently asked questions</h2>
                    <dl class="mt-10 space-y-6 divide-y divide-white/10">
                      <div x-data="{ open: false }" class="pt-6">
                          <dt>
                            <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-white" aria-controls="faq-0" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
                              <span class="text-base/7 font-semibold">Is this a one-time purchase?</span>
                              <span class="ml-6 flex h-7 items-center">
                                <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': open }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
            </svg>
                                <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
            </svg>
                              </span>
                            </button>
                          </dt>
                          <dd class="mt-2 pr-12" id="faq-0" x-show="open">
                            <p class="text-base/7 text-gray-300">You get access to updates for a full year. After that year you can choose to renew your license when you want. If you’re satisfied with the current version at that point, you can use it forever.</p>
                          </dd>
                        </div>
                        <div x-data="{ open: false }" class="pt-6">
                            <dt>
                                <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-white" aria-controls="faq-2" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
                                    <span class="text-base/7 font-semibold">What are the running costs?</span>
                                    <span class="ml-6 flex h-7 items-center">
                                        <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': open }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                                        </svg>
                                        <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                                        </svg>
                                    </span>
                                </button>
                            </dt>
                            <dd class="mt-2 pr-12" id="faq-2" x-show="open">
                                <p class="text-base/7 text-gray-300">The only costs are those charged by your chosen email service provider. For example:
                                    <br>- AWS SES: ~$0.10 per 1000 emails
                                    <br>- Mailgun: Starts at ~$15/month
                                    <br>- SendGrid: Starts at ~$19.95/month
                                </p>
                            </dd>
                        </div>

                      <div x-data="{ open: false }" class="pt-6">
                          <dt>
                            <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-white" aria-controls="faq-1" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                              <span class="text-base/7 font-semibold">Can I use a single license on multiple websites?</span>
                              <span class="ml-6 flex h-7 items-center">
                                <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': open }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
            </svg>
                                <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="hidden h-6 w-6" :class="{ 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
            </svg>
                              </span>
                            </button>
                          </dt>
                          <dd class="mt-2 pr-12" id="faq-1" x-show="open" style="display: none;">
                            <p class="text-base/7 text-gray-300">You can if you bought the “Unlimited domains” license. Otherwise your license only allows one production install.</p>
                          </dd>
                        </div>
                      <div x-data="{ open: false }" class="pt-6">
                          <dt>
                            <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-white" aria-controls="faq-2" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                              <span class="text-base/7 font-semibold">Can I white-label or resell the license?</span>
                              <span class="ml-6 flex h-7 items-center">
                                <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': open }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
            </svg>
                                <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="hidden h-6 w-6" :class="{ 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
            </svg>
                              </span>
                            </button>
                          </dt>
                          <dd class="mt-2 pr-12" id="faq-2" x-show="open" style="display: none;">
                            <p class="text-base/7 text-gray-300">If you buy the unlimited domains license, you can integrate into an application of your own. Your primary product cannot be email marketing in this case.</p>
                          </dd>
                        </div>
                        <div x-data="{ open: false }" class="pt-6">
                            <dt>
                                <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-white" aria-controls="faq-3" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
                                    <span class="text-base/7 font-semibold">Where is subscriber data stored?</span>
                                    <span class="ml-6 flex h-7 items-center">
                                        <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': open }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                                        </svg>
                                        <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                                        </svg>
                                    </span>
                                </button>
                            </dt>
                            <dd class="mt-2 pr-12" id="faq-3" x-show="open">
                                <p class="text-base/7 text-gray-300">All subscriber data is stored in your own database. We don't store any data on external servers.</p>
                            </dd>
                        </div>
                      <div x-data="{ open: false }" class="pt-6">
                          <dt>
                            <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-white" aria-controls="faq-3" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                              <span class="text-base/7 font-semibold">Is support included?</span>
                              <span class="ml-6 flex h-7 items-center">
                                <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': open }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
            </svg>
                                <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="hidden h-6 w-6" :class="{ 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
            </svg>
                              </span>
                            </button>
                          </dt>
                          <dd class="mt-2 pr-12" id="faq-3" x-show="open" style="display: none;">
                            <p class="text-base/7 text-gray-300">We try to help where we can, but we cannot provide support for every custom installation. </p>
                          </dd>
                        </div>
                      <div x-data="{ open: false }" class="pt-6">
                          <dt>
                            <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-white" aria-controls="faq-4" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                              <span class="text-base/7 font-semibold">Do you offer refunds?</span>
                              <span class="ml-6 flex h-7 items-center">
                                <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': open }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
            </svg>
                                <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="hidden h-6 w-6" :class="{ 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
            </svg>
                              </span>
                            </button>
                          </dt>
                          <dd class="mt-2 pr-12" id="faq-4" x-show="open" style="display: none;">
                            <p class="text-base/7 text-gray-300">We offer a 7 days money-back guarantee</p>
                          </dd>
                        </div>
                     
                      
                    </dl>
                  </div>
                </div>
              </div>


            <!-- CTA section -->
            <div class="isolate lg:px-8 px-6 py-32 relative sm:py-40">
                <svg class="absolute inset-0 -z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
                    aria-hidden="true">
                    <defs>
                        <pattern id="1d4240dd-898f-445f-932d-e2872fd12de3" width="200" height="200" x="50%"
                            y="0" patternUnits="userSpaceOnUse">
                            <path d="M.5 200V.5H200" fill="none" />
                        </pattern>
                    </defs>
                    <svg x="50%" y="0" class="overflow-visible fill-gray-800/20">
                        <path
                            d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                            stroke-width="0" />
                    </svg>
                    <rect width="100%" height="100%" stroke-width="0"
                        fill="url(#1d4240dd-898f-445f-932d-e2872fd12de3)" />
                </svg>
                <div class="absolute inset-x-0 top-10 -z-10 flex transform-gpu justify-center overflow-hidden blur-3xl"
                    aria-hidden="true">
                    <div class="aspect-[1108/632] w-[69.25rem] flex-none bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20"
                        style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
                    </div>
                </div>
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-balance text-4xl font-semibold tracking-tight text-white sm:text-5xl">Enhance your
                        productivity. Start using our app today.</h2>
                    <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-300">Simplify your email marketing and boost productivity with our all-inclusive newsletter management package. Obtain a license today!
                    </p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="#"
                            class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get
                            Started</a>
                        {{-- <a href="#" class="text-sm font-semibold leading-6 text-white">Learn more <span
                                aria-hidden="true">→</span></a> --}}
                    </div>
                </div>
            </div>
              
        </main>

        <!-- Footer -->
        <footer aria-labelledby="footer-heading" class="relative">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="mx-auto max-w-7xl px-6 pb-8 pt-4 lg:px-8">
                <div class="border-t border-white/10 pt-8 md:flex md:items-center md:justify-between">
                    <div class="flex space-x-6 md:order-2">
                        {{-- <a href="#" class="text-gray-500 hover:text-gray-400">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-400">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-400">
                            <span class="sr-only">X</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z" />
                            </svg>
                        </a> --}}
                        <a href="https://github.com/solutionforest"
                            class="text-gray-500 hover:text-gray-400">
                            <x-logo class="h-6"/>
                        </a>
                    </div>
                    <p class="mt-8 text-xs leading-5 text-gray-400 md:order-1 md:mt-0">&copy; Copyright 2016 - {{ date('Y')}}
                        Solution Forest Ltd All Rights Reserved</p>
                </div>
            </div>
        </footer>
    </div>

    @filamentScripts
    @vite('resources/js/app.js')
</body>

</html>