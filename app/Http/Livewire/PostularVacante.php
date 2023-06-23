<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{
    use WithFileUploads;
    public $cv;
    public $vacante;

    protected $rules = [
        'cv' => 'required|mimes:pdf'
    ];

    public function mount(Vacante $vacante){
        
        $this->vacante=$vacante;
    }



    public function postularme(){
        //Almacenar el cv en el disco duro 
        $datos = $this->validate();
        //Almacenar el cv
        $cv = $this->cv->store('public/cv');
        $datos['cv']= str_replace('public/cv/','',$cv);

        //Crear el candidato de la vacante
        $this->vacante->candidatos()->create([
            'user_id'=> auth()->user()->id,
            'cv' => $datos['cv']
        ]);

        //crear notificacion y enviar email 

        //mostrar al usuario un mensaje todo ok 
        session()->flash('mensaje','Se envio correctamete tu informacion, mucha suerte');

        return redirect()->back();

    }
    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
