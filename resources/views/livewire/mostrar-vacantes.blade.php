<div>
    
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

            @forelse ($vacantes as $vacante)
            <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 md:flex md:justify-between md:items-center">
                <div class="space-y-3">
                    <a href="{{route('vacantes.show',$vacante->id)}}" class="text-xl font-bold dark:text-gray-200">
                        {{ $vacante ->titulo }}
                    </a>
                    <p class="text-sm text-gray-600 dark:text-gray-200 font-bold">{{$vacante->empresa}}</p>
                    <p class="text-sm text-gray-500 dark:text-gray-200">Ultimo dia: {{$vacante->ultimo_dia->format('d/m/Y')}}</p>
                </div>
                <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                    <a href="{{route('candidatos.index',$vacante)}}" class="text-center bg-slate-800 px-4 rounded-lg text-white text-xs font-bold uppercase">
                        {{$vacante->candidatos->count()}}
                        Candidatos
                    </a>

                    <a href="{{route('vacantes.edit',$vacante->id)}}" class="text-center bg-blue-800 px-4 rounded-lg text-white text-xs font-bold uppercase">
                        Editar
                    </a>

                    <button 
                        wire:click="$emit('mostarAlerta',{{$vacante->id}})"
                        href="" class="text-center bg-red-500 px-4 rounded-lg text-white text-xs font-bold uppercase">
                        Eliminar 
                    </button>

                </div>
            </div>
            
        @empty
            <p class="p-3 text-center text-sm text-gray-600">No hay vacantes que mostrar</p>
        @endforelse


    </div>
    <div class="mt-10">
        {{$vacantes->links()}}

    </div>
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        livewire.on('mostarAlerta',vacanteId=>{
            Swal.fire({
            title: '¿Eliminar vacante?',
            text: "Una vacante eliminada no se puede recuperar",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, ¡Eliminar!',
            cancelButtonText:'Cancelar'
        }).then((result) => {
        if (result.isConfirmed) {
            //eliminar la vacante desde el servidor
                livewire.emit('eliminarVacante',vacanteId)
                Swal.fire(
                '¡Se elimino la vacante!',
                'Eliminado correctamente.',
                'success'
            )
                }
            })
        })
        
    </script>
@endpush