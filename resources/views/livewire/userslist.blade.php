<div>
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
    <div class="p-4">
        <div class="relative">

            <input
                type="text"
                placeholder="جستجوی کاربران..."
                wire:model.live="q"
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
    <div class="flex-1 overflow-y-auto px-3">
        @foreach($users as $user)
            <div class="mb-1 flex cursor-pointer items-center gap-3 rounded-2xl hover:bg-purple-600/10 p-3">

                <div class="relative">

                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-purple-600 font-bold">
                        ع
                    </div>

                    <span
                        class="absolute bottom-0 left-0 h-3.5 w-3.5 rounded-full border-2 border-slate-900 bg-green-500"></span>

                </div>

                <div class="min-w-0 flex-1">

                    <div class="flex items-center justify-between">

                        <h3 class="truncate text-sm font-semibold">
                            {{$user->name}}
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
        @endforeach

    </div>
</div>
