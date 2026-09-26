<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    @livewireStyles
</head>

<body class="h-screen overflow-hidden bg-slate-950 text-white">

<div class="flex h-screen">


    <!-- Users Sidebar -->
    <aside class="hidden w-80 shrink-0 border-l border-slate-800 bg-slate-900 md:flex md:flex-col justify-between">
        <livewire:userslist/>
        <div class="border-t border-slate-800 p-4">

            <div class="flex items-center gap-3">

                <div
                    class="flex h-11 w-11 items-center justify-center rounded-full bg-gradient-to-br from-purple-500 to-indigo-600 font-bold">
                    ش
                </div>

                <div class="flex-1">

                    <h3 class="text-sm font-semibold">
                        شما
                    </h3>

                    <p class="text-xs text-green-400">
                        آنلاین
                    </p>

                </div>

                <button class="text-slate-500 hover:text-white">
                    ⋮
                </button>

            </div>

        </div>
    </aside>


    @yield('content')
</div>
@livewireScripts

</body>
</html>
