<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Lunar\Facades\CartSession;
use Lunar\Facades\ShippingManifest;
use Illuminate\Support\Facades\Mail;
use App\Mail\PresupuestoMail;
use Session;

class Presupuesto extends Component
{



    public $nombre = '';
    public $email = '';
    public $location = '';
    public $postal_code = '';

    public function mount()
    {

    }


    /**
     * {@inheritDoc}
     */
    public function rules()
    {
        return [
            'nombre' => 'required|min:3',
            'email' => 'required|email|min:3',
            'location' => 'required|min:3',
            'postal_code' => 'required|min:3',
        ];
    }

    /**
     * Save the shipping option.
     *
     * @return void
     */
    public function enviarPresupuesto()
    {
        $this->validate();
        $data = Session::has('calculadora_data') ? Session::get('calculadora_data') : [];

        Mail::to("contact@prefabricadosatari.com")->send(new PresupuestoMail($this->nombre, $this->email, $this->location, $this->postal_code, $data));

        session()->flash('success', '¡Gracias! tu presupuesto esta envíado.');

        $this->reset([ 'nombre', 'email', 'location', 'postal_code' ]);

    }


    public function render()
    {
        return view('livewire.components.presupuesto');
    }
}
