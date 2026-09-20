<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>چت خصوصی</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen overflow-hidden bg-slate-950 text-white">

<div class="flex h-screen">


    <!-- Users Sidebar -->
    <aside class="hidden w-80 shrink-0 border-l border-slate-800 bg-slate-900 md:flex md:flex-col">

        <!-- Header -->
        <div class="flex h-20 items-center justify-between border-b border-slate-800 px-5">

            <div>
                <h1 class="font-bold">
                    گفتگوها
                </h1>

                <p class="mt-1 text-xs text-slate-500">
                    ۱۲ کاربر آنلاین
                </p>
            </div>

            <button
                class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-800 text-slate-300 hover:bg-slate-700">

                <svg xmlns="http://www.w3.org/2000/svg"
                     class="h-5 w-5"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M12 4v16m8-8H4"/>
                </svg>

            </button>

        </div>


        <!-- Search -->
        <div class="p-4">

            <div class="relative">

                <input
                    type="text"
                    placeholder="جستجوی کاربران..."
                    class="w-full rounded-xl border border-slate-800 bg-slate-950 py-3 pr-10 pl-4 text-sm outline-none placeholder:text-slate-600 focus:border-purple-500"
                >

                <svg xmlns="http://www.w3.org/2000/svg"
                     class="absolute right-3 top-3.5 h-4 w-4 text-slate-500"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="m21 21-4.35-4.35m1.35-5.65a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>

            </div>

        </div>


        <!-- Users -->
        <div class="flex-1 overflow-y-auto px-3">


            <!-- Active User -->
            <div class="mb-1 flex cursor-pointer items-center gap-3 rounded-2xl bg-purple-600/10 p-3">

                <div class="relative">

                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-purple-600 font-bold">
                        ع
                    </div>

                    <span class="absolute bottom-0 left-0 h-3.5 w-3.5 rounded-full border-2 border-slate-900 bg-green-500"></span>

                </div>

                <div class="min-w-0 flex-1">

                    <div class="flex items-center justify-between">

                        <h3 class="truncate text-sm font-semibold">
                            علی رضایی
                        </h3>

                        <span class="text-[10px] text-slate-500">
                            ۱۲:۴۵
                        </span>

                    </div>

                    <p class="mt-1 truncate text-xs text-slate-500">
                        سلام، خوبی؟
                    </p>

                </div>

            </div>


            <!-- User -->
            <div class="mb-1 flex cursor-pointer items-center gap-3 rounded-2xl p-3 hover:bg-slate-800">

                <div class="relative">

                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-blue-600 font-bold">
                        م
                    </div>

                    <span class="absolute bottom-0 left-0 h-3.5 w-3.5 rounded-full border-2 border-slate-900 bg-green-500"></span>

                </div>

                <div class="min-w-0 flex-1">

                    <div class="flex items-center justify-between">

                        <h3 class="truncate text-sm font-semibold">
                            محمد احمدی
                        </h3>

                        <span class="text-[10px] text-slate-500">
                            ۱۲:۲۰
                        </span>

                    </div>

                    <p class="mt-1 truncate text-xs text-slate-500">
                        فایل رو برات فرستادم
                    </p>

                </div>

            </div>


            <!-- User -->
            <div class="mb-1 flex cursor-pointer items-center gap-3 rounded-2xl p-3 hover:bg-slate-800">

                <div class="relative">

                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-pink-600 font-bold">
                        س
                    </div>

                    <span class="absolute bottom-0 left-0 h-3.5 w-3.5 rounded-full border-2 border-slate-900 bg-slate-600"></span>

                </div>

                <div class="min-w-0 flex-1">

                    <div class="flex items-center justify-between">

                        <h3 class="truncate text-sm font-semibold">
                            سارا محمدی
                        </h3>

                        <span class="text-[10px] text-slate-500">
                            دیروز
                        </span>

                    </div>

                    <p class="mt-1 truncate text-xs text-slate-500">
                        ممنون 🙏
                    </p>

                </div>

            </div>

        </div>


        <!-- Current User -->
        <div class="border-t border-slate-800 p-4">

            <div class="flex items-center gap-3">

                <div class="flex h-11 w-11 items-center justify-center rounded-full bg-gradient-to-br from-purple-500 to-indigo-600 font-bold">
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


    <!-- Chat -->
    <main class="flex min-w-0 flex-1 flex-col">


        <!-- Chat Header -->
        <header class="flex h-20 shrink-0 items-center gap-3 border-b border-slate-800 bg-slate-900 px-5">

            <div class="flex h-11 w-11 items-center justify-center rounded-full bg-purple-600 font-bold">
                ع
            </div>

            <div class="flex-1">

                <h2 class="font-semibold">
                    علی رضایی
                </h2>

                <p class="mt-1 flex items-center gap-1 text-xs text-green-400">
                    <span class="h-2 w-2 rounded-full bg-green-500"></span>
                    آنلاین
                </p>

            </div>


            <button class="rounded-xl p-2.5 text-slate-400 hover:bg-slate-800 hover:text-white">

                <svg xmlns="http://www.w3.org/2000/svg"
                     class="h-5 w-5"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 5a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2H5z"/>
                </svg>

            </button>

            <button class="rounded-xl p-2.5 text-slate-400 hover:bg-slate-800 hover:text-white">
                ⋮
            </button>

        </header>


        <!-- Messages -->
        <div class="flex-1 overflow-y-auto bg-slate-950 px-5 py-6">


            <!-- Date -->
            <div class="mb-6 flex justify-center">

                <span class="rounded-full bg-slate-900 px-4 py-1.5 text-[11px] text-slate-500">
                    امروز
                </span>

            </div>


            <!-- Received -->
            <div class="mb-4 flex justify-start">

                <div class="max-w-[75%]">

                    <div class="rounded-2xl rounded-br-md border border-slate-800 bg-slate-900 px-4 py-3">

                        <p class="text-sm leading-7 text-slate-200">
                            سلام، خوبی؟
                        </p>

                    </div>

                    <div class="mt-1 mr-1 text-[10px] text-slate-600">
                        ۱۲:۴۲
                    </div>

                </div>

            </div>


            <!-- Sent -->
            <div class="mb-4 flex justify-end">

                <div class="max-w-[75%]">

                    <div class="rounded-2xl rounded-bl-md bg-purple-600 px-4 py-3">

                        <p class="text-sm leading-7">
                            سلام علی جان 👋
                        </p>

                    </div>

                    <div class="mt-1 ml-1 text-left text-[10px] text-slate-600">
                        ۱۲:۴۳ ✓✓
                    </div>

                </div>

            </div>


            <!-- Received -->
            <div class="mb-4 flex justify-start">

                <div class="max-w-[75%]">

                    <div class="rounded-2xl rounded-br-md border border-slate-800 bg-slate-900 px-4 py-3">

                        <p class="text-sm leading-7 text-slate-200">
                            می‌خواستم در مورد پروژه جدید باهات صحبت کنم.
                        </p>

                    </div>

                    <div class="mt-1 mr-1 text-[10px] text-slate-600">
                        ۱۲:۴۴
                    </div>

                </div>

            </div>


            <!-- Sent -->
            <div class="mb-4 flex justify-end">

                <div class="max-w-[75%]">

                    <div class="rounded-2xl rounded-bl-md bg-purple-600 px-4 py-3">

                        <p class="text-sm leading-7">
                            حتماً، بگو ببینم چه چیزی مدنظرت هست؟
                        </p>

                    </div>

                    <div class="mt-1 ml-1 text-left text-[10px] text-slate-600">
                        ۱۲:۴۵ ✓✓
                    </div>

                </div>

            </div>

        </div>


        <!-- Message Input -->
        <div class="border-t border-slate-800 bg-slate-900 p-4">

            <form class="flex items-center gap-3">

                <button
                    type="button"
                    class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-slate-800 text-slate-400 hover:bg-slate-700 hover:text-white">

                    +

                </button>


                <input
                    type="text"
                    placeholder="پیام خود را بنویسید..."
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
