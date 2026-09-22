<div>

    <label class="mb-2 block text-sm font-medium text-slate-300">
        {{$label}} @error($name) <span class="text-red-500 font-bold">{{$message}}</span>  @enderror
    </label>

    <input
        type="{{$type}}"
        name="{{$name}}"
        placeholder="مثلاً arma"
        class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-sm text-white outline-none transition placeholder:text-slate-600 focus:border-purple-500 focus:ring-2 focus:ring-purple-500/20"
    >

</div>
