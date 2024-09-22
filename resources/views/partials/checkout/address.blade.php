<div class="card mb-2">
  <div class="card-header">
    Detalles de envío 

    @if ($currentStep > $step)
        <button type="button" 
        wire:click.prevent="$set('currentStep', {{ $step }})"
        class="site-button" style="float: right;">Cambiar</button>

    @endif

  </div>

<form wire:submit.prevent="saveAddress('{{ $type }}')">

@if ($currentStep >= $step)

<div class="card-body">

                    @if ($step == $currentStep)
                                    
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Nombre *</label>
                                                <input 
                                                type="text" 
                                                class="form-control"  
                                                placeholder=""
                                                :errors="$errors->get($type . '.first_name')"
                                                wire:model.defer="{{ $type }}.first_name"
                                                required
                                                >
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Apellido *</label>
                                                <input 
                                                type="text" 
                                                class="form-control"  
                                                placeholder=""
                                                :errors="$errors->get($type . '.last_name')"
                                                wire:model.defer="{{ $type }}.last_name"
                                                required
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Empreza *</label>
                                        <input 
                                        type="text" 
                                        class="form-control" 
                                        placeholder=""
                                        :errors="$errors->get($type . '.company_name')"
                                        wire:model.defer="{{ $type }}.company_name"
                                        >
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Teléfono</label>
                                                <input 
                                                type="text" 
                                                class="form-control"  
                                                placeholder=""
                                                :errors="$errors->get($type . '.contact_phone')"
                                                wire:model.defer="{{ $type }}.contact_phone"
                                                >
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Correo</label>
                                                <input 
                                                type="email" 
                                                class="form-control"  
                                                placeholder=""
                                                :errors="$errors->get($type . '.contact_email')"
                                                wire:model.defer="{{ $type }}.contact_email"
                                                required
                                                >
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label>Dirección</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input 
                                                type="text" 
                                                class="form-control m-b30"  
                                                placeholder=""
                                                :errors="$errors->get($type . '.line_one')"
                                                wire:model.defer="{{ $type }}.line_one"
                                                required
                                                >

                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <input 
                                                type="text" 
                                                class="form-control m-b30"  
                                                placeholder=""
                                                :errors="$errors->get($type . '.line_two')"
                                                wire:model.defer="{{ $type }}.line_two"
                                                >
                                            </div>

                                    </div>


                                    
                                    <div class="row">

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Ciudad</label>
                                                <input 
                                                type="text" 
                                                class="form-control m-b30"  
                                                placeholder=""
                                                :errors="$errors->get($type . '.city')"
                                                wire:model.defer="{{ $type }}.city"
                                                required
                                                >
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Región</label>
                                                <input 
                                                type="text" 
                                                class="form-control m-b30"  
                                                placeholder=""
                                                :errors="$errors->get($type . '.state')"
                                                wire:model.defer="{{ $type }}.state"

                                                >
                                            </div>
                                        </div>


                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Código postal</label>
                                                <input 
                                                type="text" 
                                                class="form-control m-b30"  
                                                placeholder=""
                                                :errors="$errors->get($type . '.postcode')"
                                                wire:model.defer="{{ $type }}.postcode"
                                                required
                                                >
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>País/región</label>
                                                <select class="form-control" wire:model.defer="{{ $type }}.country_id" required>
                                                        <option value="--" wire:key="0">
                                                           Eligir País
                                                        </option disabled>
                                                    @foreach ($this->countries as $country)
                                                        <option value="{{ $country->id }}"
                                                                wire:key="country_{{ $country->id }}">
                                                            {{ $country->native }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                        @if ($type == 'shipping' && $step == $currentStep)
                                        
                                        <div class="form-group form-inline">
                                            <div class="radio">
                                                <input 
                                                id="checkmeout1" 
                                                value="1"
                                                wire:model.defer="shippingIsBilling"
                                                type="checkbox">
                                                <label for="checkmeout1">Lo mismo que la facturación</label>
                                            </div>
                                        </div>
                                        @endif




                            @elseif($currentStep > $step)
                                    <h3>Detalles de envío</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div>
                                                    <dt class="font-medium">
                                                        Nombre completo
                                                    </dt>

                                                    <dd class="mt-0.5">
                                                        {{ $this->{$type}->first_name }} {{ $this->{$type}->last_name }}
                                                    </dd>
                                                </div>

                                                @if ($this->{$type}->contact_phone)
                                                    <div>
                                                        <dt class="font-medium">
                                                            Teléfono
                                                        </dt>

                                                        <dd class="mt-0.5">
                                                            {{ $this->{$type}->contact_phone }}
                                                        </dd>
                                                    </div>
                                                @endif

                                                <div>
                                                    <dt class="font-medium">
                                                        Correo
                                                    </dt>

                                                    <dd class="mt-0.5">
                                                        {{ $this->{$type}->contact_email }}
                                                    </dd>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <dt class="font-medium">
                                                    Dirección
                                                </dt>

                                                <dd class="mt-0.5">
                                                    {{ $this->{$type}->line_one }}<br>
                                                    @if ($this->{$type}->line_two)
                                                        {{ $this->{$type}->line_two }}<br>
                                                    @endif
                                                    @if ($this->{$type}->line_three)
                                                        {{ $this->{$type}->line_three }}<br>
                                                    @endif
                                                    @if ($this->{$type}->city)
                                                        {{ $this->{$type}->city }}<br>
                                                    @endif
                                                    @if ($this->{$type}->state)
                                                        {{ $this->{$type}->state }}<br>
                                                    @endif
                                                    {{ $this->{$type}->postcode }}<br>
                                                    {{ $this->{$type}->country?->native }}
                                                </dd>
                                            </div>

                                        </div>
                            @endif


                                    @if ($step == $currentStep)
                                        <div class="mt-6 text-right">
                                            <button class="site-button"
                                                    type="submit"
                                                    wire:key="submit_btn"
                                                    wire:loading.attr="disabled"
                                                    wire:target="saveAddress">
                                                <span wire:loading.remove
                                                    wire:target="saveAddress">
                                                    Guardar y continuar
                                                </span>

                                                <span wire:loading
                                                    wire:target="saveAddress">
                                                    <span class="inline-flex items-center">
                                                        Saving

                                                        ...
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    @endif
</div>

@endif
</form>


</div>

