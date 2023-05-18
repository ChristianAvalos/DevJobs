<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    @foreach ($vacantes as $vacante)
        <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
            <div class="space-y-3">
                <a href="" class="text-xl font-bold">
                    {{ $vacante ->titulo }}
                </a>
                <p class="text-sm text-gray-600 font-bold">{{$vacante->empresa}}</p>
                <p class="text-sm text-gray-500">Ultimo dia: {{$vacante->ultimo_dia->format('d/m/Y')}}</p>
            </div>
            <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                <a href="" class="text-center bg-slate-800 px-4 rounded-lg text-white text-xs font-bold uppercase">
                    Candidatos
                </a>

                <a href="" class="text-center bg-blue-800 px-4 rounded-lg text-white text-xs font-bold uppercase">
                    Editar
                </a>

                <a href="" class="text-center bg-red-500 px-4 rounded-lg text-white text-xs font-bold uppercase">
                    Eliminar 
                </a>

            </div>
        </div>
    @endforeach

</div>