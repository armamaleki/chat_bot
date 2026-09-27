@extends('components.layouts.index')

@section('content')
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
            @if(request()->u )

                <div id="messages" class="flex-1 overflow-y-auto bg-slate-950 px-5 py-6">
                    @forelse($messages as $message)
                        @if($message->user_id === auth()->id())
                            <div class="mb-4 flex justify-start">
                                <div class="rounded-2xl bg-purple-600 px-4 py-3">
                                    {{ $message->body }}
                                </div>
                            </div>
                        @else
                            <div class="mb-4 flex justify-end">
                                <div class="rounded-2xl bg-slate-800 px-4 py-3">
                                    {{ $message->body }}
                                </div>
                            </div>
                        @endif
                    @empty

                        <div class="flex h-full items-center justify-center text-slate-500">
                            اولین پیامت رو بفرست 👋
                        </div>

                    @endforelse

                </div>
            @else
                <div class="flex justify-center">
                    برای ارسال پیام کلکی کنید

                </div>
            @endif

        </div>
        <livewire:message-input  :user-id="request('u')"/>
    </main>

@endsection
