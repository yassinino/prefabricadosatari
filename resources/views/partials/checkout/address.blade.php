<form wire:submit.prevent="saveAddress('{{ $type }}')">

@if ($currentStep >= $step)

                    @if ($step == $currentStep)
                                    
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>First Name *</label>
                                                <input 
                                                type="text" 
                                                class="form-control"  
                                                placeholder="First Name"
                                                :errors="$errors->get($type . '.first_name')"
                                                wire:model.defer="{{ $type }}.first_name"
                                                required
                                                >
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Last Name *</label>
                                                <input 
                                                type="text" 
                                                class="form-control"  
                                                placeholder="Last Name"
                                                :errors="$errors->get($type . '.last_name')"
                                                wire:model.defer="{{ $type }}.last_name"
                                                required
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Company Name *</label>
                                        <input 
                                        type="text" 
                                        class="form-control" 
                                        placeholder="Company Name"
                                        :errors="$errors->get($type . '.company_name')"
                                        wire:model.defer="{{ $type }}.company_name"
                                        >
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input 
                                                type="text" 
                                                class="form-control"  
                                                placeholder="Enter Phone Number"
                                                :errors="$errors->get($type . '.contact_phone')"
                                                wire:model.defer="{{ $type }}.contact_phone"
                                                >
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input 
                                                type="email" 
                                                class="form-control"  
                                                placeholder="Enter email"
                                                :errors="$errors->get($type . '.contact_email')"
                                                wire:model.defer="{{ $type }}.contact_email"
                                                required
                                                >
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label>Address</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input 
                                                type="text" 
                                                class="form-control m-b30"  
                                                placeholder="Address 1"
                                                :errors="$errors->get($type . '.line_one')"
                                                wire:model.defer="{{ $type }}.line_one"
                                                required
                                                >

                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <input 
                                                type="text" 
                                                class="form-control m-b30"  
                                                placeholder="Address 2"
                                                :errors="$errors->get($type . '.line_two')"
                                                wire:model.defer="{{ $type }}.line_two"
                                                >
                                            </div>

                                    </div>


                                    
                                    <div class="row">

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input 
                                                type="text" 
                                                class="form-control m-b30"  
                                                placeholder="City"
                                                :errors="$errors->get($type . '.city')"
                                                wire:model.defer="{{ $type }}.city"
                                                required
                                                >
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>State / Province</label>
                                                <input 
                                                type="text" 
                                                class="form-control m-b30"  
                                                placeholder="State / Province"
                                                :errors="$errors->get($type . '.state')"
                                                wire:model.defer="{{ $type }}.state"

                                                >
                                            </div>
                                        </div>


                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Postcode</label>
                                                <input 
                                                type="text" 
                                                class="form-control m-b30"  
                                                placeholder="Address 1"
                                                :errors="$errors->get($type . '.postcode')"
                                                wire:model.defer="{{ $type }}.postcode"
                                                required
                                                >
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select class="form-control selectpicker" wire:model.defer="{{ $type }}.country_id" required>
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
                                                <label for="checkmeout1">Same as billing</label>
                                            </div>
                                        </div>
                                        @endif


                                        @if ($currentStep > $step)
                                            <button type="button"
                                                    wire:click.prevent="$set('currentStep', {{ $step }})"
                                                    class="site-button">Edit</button>

                                        @endif

            


                            @elseif($currentStep > $step)
                                    <dl class="grid grid-cols-1 gap-8 text-sm sm:grid-cols-2">
                                        <div>
                                            <div class="space-y-4">
                                                <div>
                                                    <dt class="font-medium">
                                                        Name
                                                    </dt>

                                                    <dd class="mt-0.5">
                                                        {{ $this->{$type}->first_name }} {{ $this->{$type}->last_name }}
                                                    </dd>
                                                </div>

                                                @if ($this->{$type}->company_name)
                                                    <div>
                                                        <dt class="font-medium">
                                                            Company
                                                        </dt>

                                                        <dd class="mt-0.5">
                                                            {{ $this->{$type}->company_name }}
                                                        </dd>
                                                    </div>
                                                @endif

                                                @if ($this->{$type}->contact_phone)
                                                    <div>
                                                        <dt class="font-medium">
                                                            Phone Number
                                                        </dt>

                                                        <dd class="mt-0.5">
                                                            {{ $this->{$type}->contact_phone }}
                                                        </dd>
                                                    </div>
                                                @endif

                                                <div>
                                                    <dt class="font-medium">
                                                        Email
                                                    </dt>

                                                    <dd class="mt-0.5">
                                                        {{ $this->{$type}->contact_email }}
                                                    </dd>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <dt class="font-medium">
                                                Address
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
                                    </dl>
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
                                                    Save Address
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
@endif
</form>

