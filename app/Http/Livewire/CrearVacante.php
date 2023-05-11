<?php

namespace App\Http\Livewire;

use App\Models\Salario;
use Livewire\Component;
use App\Models\Categoria;

class CrearVacante extends Component
{
    public $titulo;
    public $salario;
    public $categoria;
    public $empresa;
    public $ultimo_dia;
    public $descripcion;
    public $imagen;

    protected $rules = [
        'titulo' => 'required|string',
        'salario' => 'required',
        'categoria' => 'required',
        'empresa' => 'required',
        'ultimo_dia' => 'required',
        'descripcion' => 'required',
        'imagen'=>'required'
    ];

    public function crearVacante(){
        $datos = $this->validate();
    }




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