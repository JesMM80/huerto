<div>
    <div class="w-full text-center bg-green-100">
        <div class="text-lg bold">
            Búsquedas
        </div>
    </div>
    <form wire:submit.prevent='leerDatos'>
        <div class="w-full grid grid-cols-3 grid-rows-2 text-center bg-green-100 mb-2 p-2 gap-4">
            <div>
                <label for="descripcion">Descripción</label>
                <input type="text" wire:model="descripcion" class="w-full border border-green-500 rounded p-1">
                @error('descripcion') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="variedad">Variedad</label>
                <input type="text" wire:model="variedad" class="w-full border border-green-500 rounded p-1">
                @error('variedad') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="familia">Familia</label>
                <input type="text" wire:model="familia" class="w-full border border-green-500 rounded p-1">
                @error('familia') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="grid grid-cols-2 text-center">
                <div>
                    <button wire:click="guardar" class="px-2 py-1 border border-green-500 bg-green-200 rounded hover:bg-green-300">
                        Buscar LW
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
