<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ورود به چت</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-950 text-white">

<div class="min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-md">

        <!-- Logo -->
        <div class="text-center mb-8">

            <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-2xl bg-purple-600 shadow-lg shadow-purple-600/20">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="h-8 w-8"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor"
                     stroke-width="1.8">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.6 9.6 0 01-4.35-1.02L3 20l1.32-4.32A7.4 7.4 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
            </div>

            <h1 class="text-2xl font-bold">
                ورود به چت
            </h1>

            <p class="mt-2 text-sm text-slate-400">
                برای شروع گفتگو وارد حساب خود شوید
            </p>

        </div>


        <!-- Login Card -->
        <div class="rounded-3xl border border-slate-800 bg-slate-900 p-6 shadow-2xl">

            <form class="space-y-5">

                <!-- Username -->
                <div>

                    <label class="mb-2 block text-sm font-medium text-slate-300">
                        نام کاربری
                    </label>

                    <input
                        type="text"
                        placeholder="مثلاً arma"
                        class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-sm text-white outline-none transition placeholder:text-slate-600 focus:border-purple-500 focus:ring-2 focus:ring-purple-500/20"
                    >

                </div>


                <!-- Password -->
                <div>

                    <label class="mb-2 block text-sm font-medium text-slate-300">
                        رمز عبور
                    </label>

                    <input
                        type="password"
                        placeholder="رمز عبور خود را وارد کنید"
                        class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-sm text-white outline-none transition placeholder:text-slate-600 focus:border-purple-500 focus:ring-2 focus:ring-purple-500/20"
                    >

                </div>


                <!-- Remember -->
                <div class="flex items-center justify-between">

                    <label class="flex cursor-pointer items-center gap-2 text-sm text-slate-400">

                        <input
                            type="checkbox"
                            class="h-4 w-4 rounded border-slate-700 bg-slate-950 text-purple-600 focus:ring-purple-500"
                        >

                        مرا به خاطر بسپار

                    </label>

                    <a href="#" class="text-sm text-purple-400 hover:text-purple-300">
                        فراموشی رمز؟
                    </a>

                </div>


                <!-- Button -->
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
