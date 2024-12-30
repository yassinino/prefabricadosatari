<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Session;
use Lunar\Models\Product;
use Illuminate\Support\Facades\Validator;

class CalculadoraVallados extends Component
{

    public array $data = [
        'tipo' => '',
        'metros' => '',
        'color' => '',
        'altura' => '',
        'arranque' => '',
        'distancia' => '',
        'esquinas' => '',
        'peatonal' => '',
        'puertas_veh_3' => '',
        'puertas_veh_4' => '',
    ];

    public $current_step;

    public function mount()
    {
        $this->current_step = Session::get('calculadora_step');
        $this->data = Session::has('calculadora_data') ? Session::get('calculadora_data') : [];

    }

    public function changeStep($step){

        $this->current_step = $step;
        Session::put('calculadora_step', $step);
        Session::put('calculadora_data', $this->data);
    }


    public function calcular(){

        Session::put('calculadora_data', $this->data);
        
        $validator = Validator::make($this->data,[
            'tipo' => 'required',
            'color' => 'required',
            'metros' => 'required',
            'esquinas' => 'required',
        ]);

        if($validator->fails()){
            session()->flash('error', '¡Desculpa! Los Campos son obligatorios para calcular.');
        }else{
            $this->current_step = 10;
            Session::put('calculadora_step', 10);
        }

    }

    public function recalcular(){
        Session::forget('calculadora_step');
        Session::forget('calculadora_data');
        $this->current_step = 0;
        $this->data = [];
    }

    public function render()
    {
        $products = Product::whereHas('collections', function($query){
            $query->where('lunar_collections.id', 7); //pilares 7
        })->orderBy('created_at', 'desc')->get();

        return view('livewire.calculadora' , ['products' => $products]);
    }
}