<div class="bg-gray-100 dark:bg-gray-800  p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl dark:text-gray-200  font-bold my-4"> Postularme a esta vacante</h3>

    @if (session()->has('mensaje'))
        <p class="uppercase border border-green-600 bg-gree-100 text-green-600 font-bold p-2 m-5 text-sm rounded">
        {{ session('mensaje')}}
        </p>
    @else
        <form wire:submit.prevent='postularme' class="w-96 mt-5" action="">
            <div class="mb-4">
                <x-input-label class=" dark:text-gray-200" for="cv" :value="__('Curriculum Vitae (pdf)')" />
                <x-text-input id="cv" wire:model="cv" type="file" accept=".pdf" class="block mt-1 w-full" />
            </div>

            @error('cv')
                <livewire:mostrar-alerta :message="$message">
            @enderror


            <x-primary-button class="my-5" >
                {{__('Postularme')}}
            </x-primary-button>
        </form>
    
    @endif
    


</div>
