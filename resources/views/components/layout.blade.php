<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-700 text-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/imgs/mm-basic.png" type="image/x-icon">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</head>

<body class="h-full">
    <nav
        class="relative bg-gray-800/50 after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-white/10">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" command="--toggle" commandfor="mobile-menu"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex shrink-0 items-center">
                        <img src="/imgs/logo.png" alt="Your Company" class="h-8 w-auto" />
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                            <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                            <x-nav-link href="/contacts" :active="request()->is('contacts')">Contacts</x-nav-link>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    @guest
                        <x-nav-link href="/login" :active="request()->is('login')">Log In</x-nav-link>
                        <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
                    @endguest

                    @auth
                        <form method="POST" action="/logout">
                            @csrf
                            <x-form-button>Log Out</x-form-button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>

        <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
            <div class="space-y-1 px-2 pt-2 pb-3">
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                <x-nav-link href="/contacts" :active="request()->is('contacts')">Contacts</x-nav-link>
            </div>
        </el-disclosure>
    </nav>

    <header class="bg-slate-700 shadow">
        <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8 flex justify-between align-middle">
            <h1 class="text-3xl font-bold tracking-tight">{{ $header }}</h1>
            <a href="/jobs/create" class="text-blue-400 underline mt-1">Add a New Job</a>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-2 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>
</body>

</html>
