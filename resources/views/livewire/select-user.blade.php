<div>
    <div class="text-center ml-4">
        <select 
            name="tipo" 
            class="w-full border rounded p-2  {{$usuario->tipo == 0 ? "border-blue-600 text-blue-500" : "text-green-500 border-green-600"}}" 
            wire:change="$emit('cambiaSelect',{{$usuario->id}})"
        > 
            <option value="0" @selected($usuario->tipo == 0)>Usuario</option>
            <option value="1" @selected($usuario->tipo == 1)>Administrador</option>
        </select>
    </div>
</div>
