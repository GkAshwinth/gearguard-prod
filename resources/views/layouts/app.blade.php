<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen flex flex-col bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="flex-grow">
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="bg-slate-900 border-t border-slate-800/80 mt-auto py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center text-center md:text-left">
                        <!-- Brand Info -->
                        <div>
                            <div class="flex items-center justify-center md:justify-start gap-2">
                                <span class="text-xl font-extrabold text-white tracking-tight">Gear<span class="text-sky-500">Guard</span></span>
                            </div>
                            <p class="mt-3 text-sm text-slate-400 max-w-sm">
                                Premium photo and video gear rental marketplace. Rent cameras, lenses, lighting, and audio equipment with confidence.
                            </p>
                        </div>

                        <!-- Quick Links -->
                        <div class="flex justify-center gap-8 text-sm font-semibold text-slate-300">
                            <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                            <a href="{{ route('equipment.index') }}" class="hover:text-white transition">Browse</a>
                            <a href="{{ route('about') }}" class="hover:text-white transition">About</a>
                            <a href="{{ route('contact') }}" class="hover:text-white transition">Contact</a>
                        </div>

                        <!-- Social Links -->
                        <div class="flex justify-center md:justify-end gap-6 text-slate-400">
                            <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="hover:text-indigo-400 transition" title="Facebook">
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="hover:text-pink-400 transition" title="Instagram">
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.008 3.752.052 2.714.124 4.091 1.503 4.215 4.214.044.968.052 1.322.052 3.752 0 2.43-.008 2.784-.052 3.752-.124 2.714-1.503 4.091-4.215 4.215-.968.044-1.322.052-3.752.052-2.43 0-2.784-.008-3.752-.052-2.714-.124-4.091-1.503-4.215-4.214-.044-.968-.052-1.322-.052-3.752 0-2.43.008-2.784.052-3.752.124-2.714 1.503-4.091 4.215-4.215.968-.044 1.322-.052 3.752-.052zm-.315 2c-2.4 0-2.718.01-3.661.053-2.1.096-3.13 1.13-3.226 3.226-.043.943-.053 1.26-.053 3.66 0 2.4.01 2.718.053 3.66.096 2.1 1.13 3.13 3.226 3.226.943.043 1.26.053 3.66.053 2.4 0 2.718-.01 3.661-.053 2.1-.096 3.13-1.13 3.226-3.226.043-.943.053-1.26.053-3.66 0-2.4-.01-2.718-.053-3.66-.096-2.1-1.13-3.13-3.226-3.226-.943-.043-1.26-.053-3.66-.053zm0 3.75a4.25 4.25 0 100 8.5 4.25 4.25 0 000-8.5zm0 6.5a2.25 2.25 0 110-4.5 2.25 2.25 0 010 4.5zm5.375-7.375a.875.875 0 11-1.75 0 .875.875 0 011.75 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="hover:text-sky-400 transition" title="Twitter">
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <hr class="border-slate-800 my-8">

                    <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                        <p>© {{ date('Y') }} GearGuard. All rights reserved.</p>
                        <p class="flex gap-4">
                            <a href="#" class="hover:text-slate-400 transition">Privacy Policy</a>
                            <a href="#" class="hover:text-slate-400 transition">Terms of Service</a>
                        </p>
                    </div>
                </div>
            </footer>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
