<div>
    @if(session()->has('message'))
        <div class="w-full p-2 bg-green-300 text-center">
            {{session('message')}}
        </div>
    @endif

    <form wire:submit.prevent='guardaRiego'>

        <div class="w-full mb-2">
            <label for="tipo" class="mb-2 block text-gray-600 font-bold">
                Tipo de riego
            </label>
            <input 
                class="w-full border border-indigo-500 rounded p-2" 
                type="text" 
                wire:model="tipo" 
                value="{{old('tipo')}}" 
                placeholder="Tipo de riego">
            @error('tipo')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
            @enderror
        </div>

        <div class="w-full mb-2">
            <label for="vecesDia" class="mb-2 block text-gray-600 font-bold">
                Nº Veces al día
            </label>
            <input 
                class="w-full border border-indigo-500 rounded p-2" 
                type="text" 
                wire:model="vecesDia" 
                value="{{old('vecesDia')}}" 
                placeholder="Veces al día">
            @error('vecesDia')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
            @enderror
        </div>

        <div class="w-full mb-2">
            <label for="vecesDia" class="mb-2 block text-gray-600 font-bold">
                Imagen
            </label>
            <input type="file" wire:model="imagen" accept="image/*">
            <div class="my-2 w-64">
                @if ($imagen)
                    Foto preview:
                    <img src="{{ $imagen->temporaryUrl() }}">
                @endif
            </div>

            @error('imagen')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
            @enderror
        </div>
        
        <input 
            type="submit" 
            value="Guardar" 
            class="w-full p-2 border border-green-600 bg-green-200 rounded  text-center cursor-pointer">
    </form>
</div>
