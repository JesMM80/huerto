<div>
    <div class="w-full grid grid-cols-3 text-center p-1 bg-green-300">
        <div>
            Hortaliza
        </div>
        <div>
            Familia
        </div>
        <div>
            Variedad
        </div>
    </div>
    @foreach ($totalSembradas as $total )
        <div class="w-full grid grid-cols-3 text-center bg-green-50">
            <div>
                {{$total->descripcion}}
            </div>
            <div>
                {{$total->family->nombre}}
            </div>
            <div>
                {{$total->variedad}}
            </div>
        </div>
    @endforeach
</div>
