<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>چت گروهی</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen overflow-hidden bg-slate-950 text-white">

<div class="flex h-screen">


    <!-- Groups Sidebar -->
    <aside class="hidden w-80 shrink-0 border-l border-slate-800 bg-slate-900 md:flex md:flex-col">

        <div class="flex h-20 items-center justify-between border-b border-slate-800 px-5">

            <div>

                <h1 class="font-bold">
                    گروه‌ها
                </h1>

                <p class="mt-1 text-xs text-slate-500">
                    ۵ گروه فعال
                </p>

            </div>

            <button class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-800 text-xl text-slate-300 hover:bg-slate-700">
                +
            </button>

        </div>


        <div class="p-4">

            <input
                type="text"
                placeholder="جستجوی گروه..."
                class="w-full rounded-xl border border-slate-800 bg-slate-950 px-4 py-3 text-sm outline-none placeholder:text-slate-600 focus:border-purple-500"
            >

        </div>


        <div class="flex-1 overflow-y-auto px-3">


            <!-- Active Group -->
            <div class="mb-1 flex cursor-pointer items-center gap-3 rounded-2xl bg-purple-600/10 p-3">

                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-purple-600">
                    #
                </div>

                <div class="min-w-0 flex-1">

                    <div class="flex items-center justify-between">

                        <h3 class="truncate text-sm font-semibold">
                            برنامه نویسان لاراول
                        </h3>

                        <span class="text-[10px] text-slate-500">
                            ۱۲:۴۵
                        </span>

                    </div>

                    <p class="mt-1 truncate text-xs text-slate-500">
                        محمد: فایل پروژه آماده شد
                    </p>

                </div>

            </div>


            <!-- Group -->
            <div class="mb-1 flex cursor-pointer items-center gap-3 rounded-2xl p-3 hover:bg-slate-800">

                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-600">
                    #
                </div>

                <div class="min-w-0 flex-1">

                    <div class="flex items-center justify-between">

                        <h3 class="truncate text-sm font-semibold">
                            تیم طراحی
                        </h3>

                        <span class="text-[10px] text-slate-500">
                            ۱۱:۳۰
                        </span>

                    </div>

                    <p class="mt-1 truncate text-xs text-slate-500">
                        سارا: خیلی خوب شد 👌
                    </p>

                </div>

            </div>


            <!-- Group -->
            <div class="mb-1 flex cursor-pointer items-center gap-3 rounded-2xl p-3 hover:bg-slate-800">

                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-pink-600">
                    #
                </div>

                <div class="min-w-0 flex-1">

                    <div class="flex items-center justify-between">

                        <h3 class="truncate text-sm font-semibold">
                            پروژه فروشگاه
                        </h3>

                        <span class="text-[10px] text-slate-500">
                            دیروز
                        </span>

                    </div>

                    <p class="mt-1 truncate text-xs text-slate-500">
                        علی: بررسی کردم
                    </p>

                </div>

            </div>

        </div>


        <div class="border-t border-slate-800 p-4">

            <div class="flex items-center gap-3">

                <div class="flex h-11 w-11 items-center justify-center rounded-full bg-purple-600 font-bold">
                    ش
                </div>

                <div class="flex-1">

                    <p class="text-sm font-semibold">
                        شما
                    </p>

                    <p class="text-xs text-green-400">
                        آنلاین
                    </p>

                </div>

            </div>

        </div>

    </aside>


    <!-- Main Chat -->
    <main class="flex min-w-0 flex-1 flex-col">


        <!-- Header -->
        <header class="flex h-20 shrink-0 items-center gap-3 border-b border-slate-800 bg-slate-900 px-5">

            <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-purple-600 text-lg font-bold">
                #
            </div>

            <div class="flex-1">

                <h2 class="font-semibold">
                    برنامه نویسان لاراول
                </h2>

                <p class="mt-1 text-xs text-slate-500">
                    ۱۲ عضو
                </p>

            </div>


            <!-- Online Members -->
            <div class="hidden items-center sm:flex">

                <div class="flex -space-x-2 space-x-reverse">

                    <div class="flex h-8 w-8 items-center justify-center rounded-full border-2 border-slate-900 bg-blue-600 text-xs">
                        م
                    </div>

                    <div class="flex h-8 w-8 items-center justify-center rounded-full border-2 border-slate-900 bg-pink-600 text-xs">
                        س
                    </div>

                    <div class="flex h-8 w-8 items-center justify-center rounded-full border-2 border-slate-900 bg-green-600 text-xs">
                        ع
                    </div>

                    <div class="flex h-8 w-8 items-center justify-center rounded-full border-2 border-slate-900 bg-slate-700 text-xs">
                        +9
                    </div>

                </div>

            </div>


            <button class="rounded-xl p-2.5 text-slate-400 hover:bg-slate-800 hover:text-white">
                ⋮
            </button>

        </header>


        <!-- Messages -->
        <div class="flex-1 overflow-y-auto bg-slate-950 px-5 py-6">


            <div class="mb-6 flex justify-center">

                <span class="rounded-full bg-slate-900 px-4 py-1.5 text-[11px] text-slate-500">
                    امروز
                </span>

            </div>


            <!-- User Message -->
            <div class="mb-5 flex justify-start gap-3">

                <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-blue-600 text-xs font-bold">
                    م
                </div>

                <div class="max-w-[75%]">

                    <div class="mb-1 text-xs font-semibold text-blue-400">
                        محمد احمدی
                    </div>

                    <div class="rounded-2xl rounded-br-md border border-slate-800 bg-slate-900 px-4 py-3">

                        <p class="text-sm leading-7 text-slate-200">
                            بچه‌ها کسی با Laravel Reverb کار کرده؟
                        </p>

                    </div>

                    <div class="mt-1 mr-1 text-[10px] text-slate-600">
                        ۱۲:۳۸
                    </div>

                </div>

            </div>


            <!-- User Message -->
            <div class="mb-5 flex justify-start gap-3">

                <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-pink-600 text-xs font-bold">
                    س
                </div>

                <div class="max-w-[75%]">

                    <div class="mb-1 text-xs font-semibold text-pink-400">
                        سارا محمدی
                    </div>

                    <div class="rounded-2xl rounded-br-md border border-slate-800 bg-slate-900 px-4 py-3">

                        <p class="text-sm leading-7 text-slate-200">
                            آره، من هفته پیش یه پروژه باهاش انجام دادم.
                        </p>

                    </div>

                    <div class="mt-1 mr-1 text-[10px] text-slate-600">
                        ۱۲:۴۰
                    </div>

                </div>

            </div>


            <!-- Current User -->
            <div class="mb-5 flex justify-end">

                <div class="max-w-[75%]">

                    <div class="rounded-2xl rounded-bl-md bg-purple-600 px-4 py-3">

                        <p class="text-sm leading-7">
                            عالیه! من هم دارم برای پروژه جدید از Reverb استفاده می‌کنم.
                        </p>

                    </div>

                    <div class="mt-1 ml-1 text-left text-[10px] text-slate-600">
                        ۱۲:۴۲ ✓✓
                    </div>

                </div>

            </div>


            <!-- User Message -->
            <div class="mb-5 flex justify-start gap-3">

                <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-green-600 text-xs font-bold">
                    ع
                </div>

                <div class="max-w-[75%]">

                    <div class="mb-1 text-xs font-semibold text-green-400">
                        علی رضایی
                    </div>

                    <div class="rounded-2xl rounded-br-md border border-slate-800 bg-slate-900 px-4 py-3">

                        <p class="text-sm leading-7 text-slate-200">
                            اگر سوالی داشتی بپرس، در خدمتم.
                        </p>

                    </div>

                    <div class="mt-1 mr-1 text-[10px] text-slate-600">
                        ۱۲:۴۴
                    </div>

                </div>

            </div>


        </div>


        <!-- Input -->
        <div class="border-t border-slate-800 bg-slate-900 p-4">

            <form class="flex items-center gap-3">

                <button
                    type="button"
                    class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-slate-800 text-xl text-slate-400 hover:bg-slate-700 hover:text-white">
                    +
                </button>

                <input
                    type="text"
                    placeholder="پیام خود را برای گروه بنویسید..."
                    class="h-11 flex-1 rounded-xl border border-slate-800 bg-slate-950 px-4 text-sm outline-none placeholder:text-slate-600 focus:border-purple-500"
                >

                <button
                    type="submit"
                    class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-purple-600 hover:bg-purple-500">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-5 w-5"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>

                </button>

            </form>

        </div>

    </main>

</div>

</body>
</html>
