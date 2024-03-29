<div>
    <div class="w-full text-center bg-green-100">
        <div class="text-lg bold">
            Búsquedas
        </div>
    </div>
    <form wire:submit.prevent='buscarDatos'>
        <div class="w-full grid grid-cols-3 text-center bg-green-100 mb-2 p-1 gap-4">
            <div>
                <label for="hortaliza">Hortaliza</label>
                <input type="text" name="hortaliza" class="w-full border border-indigo-500 rounded p-1" wire:model="hortaliza">
            </div>
            <div>
                <label for="descripcion">Variedad</label>
                <input type="text" name="variedad" class="w-full border border-indigo-500 rounded p-1" wire:model="variedad">
            </div>
            <div>
                <label for="descripcion">Familia</label>
                <input type="text" name="familia" class="w-full border border-indigo-500 rounded p-1" wire:model="familia">
            </div>
            <div class="flex justify-end">
                <input type="submit" value="Buscar" class="p-2 py-1 bg-green-400 rounded w-full cursor-pointer">
            </div>
        </div>
    </form>
</div>
