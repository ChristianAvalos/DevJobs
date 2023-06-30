<?php

namespace App\Http\Livewire;

use App\Models\Salario;
use Livewire\Component;
use App\Models\Categoria;

class FiltarVacantes extends Component
{
    public $termino;
    public $categoria;
    public $salario;
    
    public function leeDatosFormulario(){
        $this->emit('terminosBusqueda',$this->termino,$this->categoria,$this->salario);
    }

    public function render()
    {
        $salarios = Salario::all();
        $categorias = Categoria::all();
        return view('livewire.filtar-vacantes',[
            'salarios' => $salarios,
            'categorias' =>$categorias
        ]);
    }
}
