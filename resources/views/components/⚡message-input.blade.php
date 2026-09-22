<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
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

</div>
