<div class="border-t border-slate-800 bg-slate-900 p-4 ">

    <form
        wire:submit="store"
        class="flex items-center gap-3 relative">
        <div class="">
            @error($message) {{$message}} @enderror
        </div>
        <button
            type="submit"
            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-slate-800 text-slate-400 hover:bg-slate-700 hover:text-white">
            +
        </button>
        <input
            type="text"
            wire:model="message"
            name="message"
            placeholder="پیام خود را بنویسید..."
            class="h-11 flex-1 rounded-xl border border-slate-800 bg-slate-950 px-4 text-sm outline-none placeholder:text-slate-600 focus:border-purple-500"
        >
        <button
            type="submit"
            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-purple-600 hover:bg-purple-500">
           <x-icons.arrow class="w-6 h-6"/>
        </button>

    </form>

</div>
