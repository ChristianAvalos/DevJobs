<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-gray-800 my-3">
            {{$vacante->titulo}}
        </h3>
        <div class="md:grid md:grid-cols-2 bg-gray-50 p-4 my-10 dark:bg-gray-900 ">
            <p class="font-bold text-sm uppercase text-gray-800 my-3 dark:text-gray-200">Empresa:
                <span class="normal-case font-norma dark:text-gray-200 ">{{$vacante->empresa}}</span>
            </p>
            <p class="font-bold text-sm uppercase text-gray-800 my-3 dark:text-gray-200">Ultimo dia para postularse:
                <span class="normal-case font-normal">{{$vacante->ultimo_dia->toFormattedDateString()}}</span>
            </p>
            <p class="font-bold text-sm uppercase text-gray-800 my-3 dark:text-gray-200">Categoria:
                <span class="normal-case font-normal dark:text-gray-200">{{$vacante->categoria->categoria}}</span>
            </p>
            <p class="font-bold text-sm uppercase text-gray-800 my-3 dark:text-gray-200">Salario:
                <span class="normal-case font-normal dark:text-gray-200">{{$vacante->salario->salario}}</span>
            </p>
        </div>
    </div>

    <div class="md:grid md:grid-cols-6 gap-4">
        <div class="md:col-span-2">
            <img src="{{asset('storage/vacantes/' . $vacante->imagen)}}" alt="{{ 'Imagen vacante ' . $vacante->titulo}}">
        </div>
        <div class="md:col-span-4 dark:text-gray-200">
            <h2 class="text-2xl font-bold mb-5">Descripcion del puesto</h2>
            <p>{{$vacante->descripcion}}</p>
        </div>
    </div>
    @guest
    <div class="mt-5 bg-gray-50 dark:bg-gray-800 dark:text-gray-200 border border-dashed p-5 text-center ">
        <p>
            ¿Deseas aplicar a esta vacante? <a class="font-bold text-indigo-600" href="{{route('register')}}">Obten una cuenta y aplica a esta y otras vacantes</a>
        </p>
    </div>
    @endguest
    @auth
        @cannot('create', App\Model\Vacante::class)
        <livewire:postular-vacante :vacante="$vacante"/>
        @endcannot
    @endauth


</div>
