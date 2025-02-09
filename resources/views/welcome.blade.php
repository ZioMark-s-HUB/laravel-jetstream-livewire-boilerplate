<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ session('darkMode') ? 'dark' : '' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-gray-100 dark:bg-gray-900 transition-colors duration-300">
        <div class="min-h-screen">
            <!-- Header Section -->
            <header class="fixed w-full bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm border-b border-gray-200 dark:border-gray-700 z-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between items-center h-16">
                        <!-- Logo -->
                        <div class="flex-shrink-0">
                            <a href="/" class="flex items-center">
                                <svg class="h-8 w-auto text-[#FF2D20] dark:text-white" viewBox="0 0 62 65" fill="none">
                                    <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="currentColor"/></svg>
                                </svg>
                            </a>
                        </div>

                        <!-- Navigation -->
                        @if (Route::has('login'))
                            <nav class="flex space-x-4">
                                @auth
                                    <a href="{{ url('/dashboard') }}" 
                                       class="px-4 py-2 rounded-md text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" 
                                       class="px-4 py-2 rounded-md text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                        Login
                                    </a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" 
                                           class="px-4 py-2 rounded-md bg-[#FF2D20] hover:bg-[#FF2D20]/90 text-white transition">
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </div>
                </div>
            </header>

            <!-- Hero Section with Gradient -->
            <main class="pt-16">
                <div class="relative isolate border-b border-gray-200 dark:border-gray-700">
                    <!-- Background gradient -->
                    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                         x-data="{ rotate: 30 }"
                         x-init="setInterval(() => rotate = rotate === 30 ? 60 : 30, 3000)">
                        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#FF2D20] via-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem] transition-transform duration-3000"
                             :style="{ transform: `rotate(${rotate}deg)` }">
                        </div>
                    </div>

                    <div class="mx-auto max-w-7xl px-6 pt-10 pb-24 sm:pb-32 lg:flex lg:px-8 lg:py-40">
                        <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
                            <h1 class="mt-10 text-4xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-6xl">
                                Laravel Jetstream Boilerplate
                            </h1>
                            <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-300">
                                Start your next project with a fully configured Laravel application featuring avatars, team management, dark mode, and SMTP email verification.
                            </p>
                            <div class="mt-10 flex items-center gap-x-6">
                                <a href="{{ route('register') }}" 
                                   class="rounded-md bg-[#FF2D20] px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-[#FF2D20]/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#FF2D20]">
                                    Get started
                                </a>
                                <a href="https://github.com/your-repo" class="text-sm font-semibold leading-6 text-gray-900 dark:text-gray-300">
                                    View on GitHub <span aria-hidden="true">→</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add this after the Features Grid section -->
                <div class="relative isolate overflow-hidden bg-gray-50 dark:bg-gray-800/50 py-24 sm:py-32">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-2xl lg:text-center mb-16">
                            <h2 class="text-base font-semibold leading-7 text-[#FF2D20]">Why Use This Boilerplate?</h2>
                            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                                A Simple Head Start for Laravel Jetstream & Livewire
                            </p>
                            <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-300">
                                This boilerplate provides a slightly enhanced starting point for Laravel Jetstream with Livewire. While it doesn't introduce major changes, it comes with a few useful pre-configurations.
                            </p>
                        </div>
                        
                        <div class="mx-auto max-w-7xl">
                            <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                                <!-- Dark Mode Toggle -->
                                <div class="relative pl-16">
                                    <dt class="text-base font-semibold leading-7 text-gray-900 dark:text-white">
                                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-[#FF2D20]">
                                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                                            </svg>
                                        </div>
                                        Dark Mode Toggle
                                    </dt>
                                    <dd class="mt-2 text-base leading-7 text-gray-600 dark:text-gray-300">
                                        A built-in switcher for dark mode, which Jetstream doesn't include by default.
                                    </dd>
                                </div>

                                <!-- User Avatars -->
                                <div class="relative pl-16">
                                    <dt class="text-base font-semibold leading-7 text-gray-900 dark:text-white">
                                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-[#FF2D20]">
                                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                            </svg>
                                        </div>
                                        User Avatars Enabled
                                    </dt>
                                    <dd class="mt-2 text-base leading-7 text-gray-600 dark:text-gray-300">
                                        Avatar support is pre-configured, saving you the extra setup step.
                                    </dd>
                                </div>

                                <!-- Email Verification -->
                                <div class="relative pl-16">
                                    <dt class="text-base font-semibold leading-7 text-gray-900 dark:text-white">
                                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-[#FF2D20]">
                                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                            </svg>
                                        </div>
                                        Email Verification via SMTP (TLS)
                                    </dt>
                                    <dd class="mt-2 text-base leading-7 text-gray-600 dark:text-gray-300">
                                        Already set up for verified user authentication.
                                    </dd>
                                </div>
                            </div>

                            <!-- Who Is It For section -->
                            <div class="mt-16 border-t border-gray-200 dark:border-gray-700 pt-16">
                                <h3 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white mb-6">Who Is It For?</h3>
                                <p class="text-lg leading-8 text-gray-600 dark:text-gray-300">
                                    This setup is ideal for beginners who want to avoid spending time on initial configuration. Instead of digging through documentation to enable these basic features, you can start coding right away with a more user-friendly setup.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Footer -->
            <footer class="bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700">
                <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-between lg:px-8">
                    <div class="mt-8 md:mt-0">
                        <p class="text-center text-xs leading-5 text-gray-500 dark:text-gray-400">
                            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                        </p>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Theme Toggle -->
        <livewire:theme-toggle />
        
        @livewireScripts
        <script>
            document.addEventListener('livewire:initialized', () => {
                Livewire.on('theme-changed', (event) => {
                    if (event.darkMode) {
                        document.documentElement.classList.add('dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                    }
                });
            });
        </script>
    </body>
</html>
