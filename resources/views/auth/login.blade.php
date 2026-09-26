<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود به چت</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-950 text-white">

<div class="min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-md">

        <!-- Logo -->
        <div class="text-center mb-8">

            <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-2xl bg-purple-600 shadow-lg shadow-purple-600/20">
                <x-icons.chat/>
            </div>

            <h1 class="text-2xl font-bold">
                ورود به چت
            </h1>

            <p class="mt-2 text-sm text-slate-400">
                برای شروع گفتگو وارد حساب خود شوید
            </p>
        </div>

        <div class="rounded-3xl border border-slate-800 bg-slate-900 p-6 shadow-2xl">
            <form
                action="{{route('store')}}"
                method="post"
                class="space-y-5" >
                @csrf
                <x-inputs.input type="text" label="نام کاربر" name="name" />
                <x-inputs.input type="email" label="آدرس ایمیل" name="email" />
                <x-inputs.input type="password" label="رمز عبور" name="password"/>
                <button
                    type="submit"
                    class="w-full rounded-xl bg-purple-600 px-4 py-3 text-sm font-semibold text-white transition hover:bg-purple-500 active:scale-[0.98]"
                >
                    ورود به حساب
                </button>
            </form>
        </div>
        <p class="mt-6 text-center text-xs text-slate-600">
            سیستم چت Real-Time با Laravel و WebSocket
        </p>

    </div>

</div>

</body>
</html>
