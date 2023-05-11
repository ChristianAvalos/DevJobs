<?php

namespace App\Http\Livewire;

use App\Models\Salario;
use Livewire\Component;
use App\Models\Categoria;

class CrearVacante extends Component
{
    public function render()
    {
        //consultar la base de datos 
        $salarios = Salario::all();
        $categorias = Categoria::all();
        return view('livewire.crear-vacante',[
            'salarios' => $salarios,
            'categorias'=> $categorias
        ]);
    }
}
