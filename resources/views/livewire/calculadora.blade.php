<div class="section-full p-t40 p-b50">
                <div class="container">
                    <div class="section-content">
                    	<div class="row">
                            <div class="col-lg-12 col-md-12"> 

                                <div class="p-b40">
                                    <h1 class="text-center">Calculadora de vallados</h1>
                                </div>

                                @if (session()->has('error'))

                                <div class="p-b40">
                                    <h4 class="text-center text-danger">{{ session('error') }}</h4>
                                </div>
                                @endif




                                @switch(Session::get('calculadora_step'))
                                    @case(0)

                                    <h3 class="text-center">Selecciona el tipo de vallado</h3>
                                    <div class="grid-wrapper grid-col-auto">
                                        <label for="radio-card-1" class="radio-card">
                                            <input type="radio" name="tipo_valla" id="radio-card-1" value="modern_line" wire:model="data.tipo" />
                                            <div class="card-content-wrapper">
                                            <span class="check-icon"></span>
                                            <div class="card-content">
                                                <img
                                                src="{{ url('images/linea_moderna.jpeg') }}"
                                                alt=""
                                                />
                                                <h4>Modern Line</h4>
                                            </div>
                                            </div>
                                        </label>
                                        <!-- /.radio-card -->

                                        <label for="radio-card-2" class="radio-card">
                                            <input type="radio" name="tipo_valla" value="simple_line" id="radio-card-2" wire:model="data.tipo"/>
                                            <div class="card-content-wrapper">
                                            <span class="check-icon"></span>
                                            <div class="card-content">
                                                <img
                                                src="{{ url('images/linea_sencilla.jpeg') }}"
                                                alt=""
                                                />
                                                <h4>Simple Line</h4>
                                            </div>
                                            </div>
                                        </label>
                                        <!-- /.radio-card -->

                                    </div>

                                    <div class="grid-wrapper grid-col-auto">
                                        <label for="radio-card-3" class="radio-card">
                                            <input type="radio" name="tipo_valla" value="aero_line" id="radio-card-3" wire:model="data.tipo"/>
                                            <div class="card-content-wrapper">
                                            <span class="check-icon"></span>
                                            <div class="card-content">
                                                <img
                                                src="{{ url('images/linea_aero.jpeg') }}"
                                                alt=""
                                                />
                                                <h4>Aero Line</h4>
                                            </div>
                                            </div>
                                        </label>
                                        <!-- /.radio-card -->

                                        <label for="radio-card-4" class="radio-card">
                                            <input type="radio" name="tipo_valla" value="nature_line" id="radio-card-4" wire:model="data.tipo"/>
                                            <div class="card-content-wrapper">
                                            <span class="check-icon"></span>
                                            <div class="card-content">
                                                <img
                                                src="{{ url('images/linea_nat.jpeg') }}"
                                                alt=""
                                                />
                                                <h4>Nature Line</h4>
                                            </div>
                                            </div>
                                        </label>
                                        <!-- /.radio-card -->

                                    </div>

                                    <br>

                                    @error('data.tipo') <span class="text-danger text-center">El tipo de vallado es obligatorio.</span> @enderror


                                        
                                        @break

                                    @case(1)
                                        


                                        <h3 class="text-center">Selecciona la altura</h3>
                                        <div class="grid-wrapper grid-col-auto">
                                            <label for="radio-card-1" class="radio-card">
                                                <input type="radio" name="altura_valla" id="radio-card-1" value="modern_line" wire:model="data.altura" />
                                                <div class="card-content-wrapper">
                                                <span class="check-icon"></span>
                                                <div class="card-content">
                                                    <h4>0.5 metros</h4>
                                                </div>
                                                </div>
                                            </label>
                                            <!-- /.radio-card -->

                                            <label for="radio-card-2" class="radio-card">
                                                <input type="radio" name="altura_valla" value="simple_line" id="radio-card-2" wire:model="data.altura"/>
                                                <div class="card-content-wrapper">
                                                <span class="check-icon"></span>
                                                <div class="card-content">
                                                    <h4>1.0 metros</h4>
                                                </div>
                                                </div>
                                            </label>
                                            <!-- /.radio-card -->

                                        </div>

                                        <div class="grid-wrapper grid-col-auto">
                                            <label for="radio-card-3" class="radio-card">
                                                <input type="radio" name="altura_valla" value="aero_line" id="radio-card-3" wire:model="data.altura"/>
                                                <div class="card-content-wrapper">
                                                <span class="check-icon"></span>
                                                <div class="card-content">
                                                    <h4>1.5 metros</h4>
                                                </div>
                                                </div>
                                            </label>
                                            <!-- /.radio-card -->

                                            <label for="radio-card-4" class="radio-card">
                                                <input type="radio" name="altura_valla" value="nature_line" id="radio-card-4" wire:model="data.altura"/>
                                                <div class="card-content-wrapper">
                                                <span class="check-icon"></span>
                                                <div class="card-content">
                                                    <h4>2.0 metros</h4>
                                                </div>
                                                </div>
                                            </label>
                                            <!-- /.radio-card -->

                                        </div>



                                        @break

                                        @case(2)
                                            <h3 class="text-center">Distancia entre los postes</h3>
                                            <div class="offset-md-4 col-md-4 mb-3">
                                                <select name="" class="form-control" wire:model="data.distancia">
                                                    <option value="2">Cada 2 Metros</option>
                                                </select>
                                            </div>
                                        @break

                                        @case(3)
                                            <h3 class="text-center">Metros lineales totales de tu cercado</h3>
                                            <div class="offset-md-4 col-md-4 mb-3">
                                                    <span>Mi cercado tiene</span>  
                                                    <input type="number" class="form-control" placeholder="Pon aquí los metros" wire:model="data.metros">
                                                    <span>metros lineales</span>
                                                    <br>

                                                    @error('data.metros') <span class="text-danger">Los metros son obligatorios.</span> @enderror

                                            </div>
                                        @break

                                        @case(4)
                                            <h3 class="text-center">¿Cuántas esquinas tiene tu cercado?</h3>
                                            <div class="offset-md-4 col-md-4 mb-3">
                                                    <span>Mi cercado tiene</span>  
                                                    <input type="number" class="form-control" placeholder="Pon aquí los esquinas" wire:model="data.esquinas">
                                                    <span>esquinas</span>

                                                    <br>

                                                    @error('data.esquinas') <span class="text-danger">Esquinas son obligatorios.</span> @enderror

                                            </div>
                                        @break

                                        @case(5)
                                            <h3 class="text-center">Número de postes arranque-final</h3>
                                            <div class="offset-md-4 col-md-4 mb-3">
                                                    <span>Mi cercado tiene</span>  
                                                    <input type="number" class="form-control" placeholder="Pon aquí el número de postes" wire:model="data.arranque">
                                                    <span>postes arranque-final</span>
                                            </div>
                                        @break

                                        @case(6)
                                            <h3 class="text-center">Selecciona cómo irán fijados los postes</h3>
                                            <div class="grid-wrapper grid-col-auto">
                                                <label for="radio-card-10" class="radio-card">
                                                    <input type="radio" name="altura_valla" id="radio-card-10" value="modern_line" wire:model="data.fijados" />
                                                    <div class="card-content-wrapper">
                                                    <span class="check-icon"></span>
                                                    <div class="card-content">
                                                        <h4>Hormigon</h4>
                                                    </div>
                                                    </div>
                                                </label>
                                                <!-- /.radio-card -->
                                            </div>
                                        @break

                                        @case(7)
                                            <h3 class="text-center">Elige el modelo de poste que quieres para cercado</h3>
                                            <div class="grid-wrapper grid-col-auto">

                                            @foreach($products as $key => $product)
                                                <label for="modelos-card-{{$key}}" class="radio-card">
                                                    <input type="radio" name="modelos_carcados" id="modelos-card-{{$key}}" value="{{$product->id}}" wire:model="data.modelos" />
                                                    <div class="card-content-wrapper">
                                                    <span class="check-icon"></span>
                                                    <div class="card-content">
                                                        <h4>{{ $product->translateAttribute('name') }}</h4>
                                                    </div>
                                                    </div>
                                                </label>
                                            @endforeach
                                                
                                                <!-- /.radio-card -->
                                            </div>


                                        @break


                                        @case(8)
                                            <h3 class="text-center">Elige el color de tu vallado</h3>

                                            <div class="grid-wrapper grid-col-auto">
                                                <label for="radio-color-1" class="radio-card">
                                                    <input type="radio" name="modelo-color" id="radio-color-1" value="blanco" wire:model="data.color" />
                                                    <div class="card-content-wrapper">
                                                    <span class="check-icon"></span>
                                                    <div class="card-content">
                                                        <h4><input type="color" value="#ffffff" disabled> Blanco </h4>
                                                    </div>
                                                    </div>
                                                </label>

                                                <label for="radio-color-2" class="radio-card">
                                                    <input type="radio" name="modelo-color" id="radio-color-2" value="gris" wire:model="data.color" />
                                                    <div class="card-content-wrapper">
                                                    <span class="check-icon"></span>
                                                    <div class="card-content">
                                                        <h4><input type="color" value="#f3f3f3" disabled> Gris Hormigon </h4>
                                                    </div>
                                                    </div>
                                                </label>
                                                <!-- /.radio-card -->
                                            </div>

                                            <div class="grid-wrapper grid-col-auto">
                                                <label for="radio-color-3" class="radio-card">
                                                    <input type="radio" name="modelo-color" id="radio-color-3" value="negro" wire:model="data.color" />
                                                    <div class="card-content-wrapper">
                                                    <span class="check-icon"></span>
                                                    <div class="card-content">
                                                        <h4><input type="color" value="#000000" disabled> Negro</h4>
                                                    </div>
                                                    </div>
                                                </label>

                                                <label for="radio-color-4" class="radio-card">
                                                    <input type="radio" name="modelo-color" id="radio-color-4" value="ral" wire:model="data.color" />
                                                    <div class="card-content-wrapper">
                                                    <span class="check-icon"></span>
                                                    <div class="card-content">
                                                        <h4> <input type="color" value="#ffffff" disabled style="background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);"> Color RAL</h4>
                                                    </div>
                                                    </div>
                                                </label>
                                                <!-- /.radio-card -->
                                            </div>
                                        @break


                                        @case(9)
                                            <h3 class="text-center">Indica el número de puertas de acceso peatonal</h3>
                                            <div class="offset-md-4 col-md-4 mb-3">
                                                    <span>Puertas acceso peatonal de 0.8ml</span>  
                                                    <input type="number" class="form-control" placeholder="" wire:model="data.peatonal">
                                            </div>
                                        @break

                                        @case(10)
                                            <h3 class="text-center">Indica el número de puertas para vehículos</h3>
                                            <div class="offset-md-4 col-md-4 mb-3">
                                                    <span>Puertas acceso vehículos de 3ml</span>  
                                                    <input type="number" class="form-control" placeholder="" wire:model="data.puertas_veh_3"> <br>
                                                    <span>Puertas acceso vehículos de 4ml</span>  
                                                    <input type="number" class="form-control" placeholder="" wire:model="data.puertas_veh_4">
                                            </div>
                                        @break


                                        @case(11)
                                            <h3 class="text-center">Material necesario para vallado {{ $data['tipo'] }}</h3>
                                            <div class="offset-md-4 col-md-8 informacion-vallado">
                                                   <ul>
                                                    <li>
                                                        <p>-</p>
                                                        <p>Color del vallado: {{ $data['color'] }}</p>
                                                    </li>
                                                    <li>
                                                        <p>1</p>
                                                        <p>rollos de malla simple torsión</p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            {{ $data['metros'] / 2 }}
                                                        </p>
                                                        <p>
                                                            postes de 2m de altura
                                                        </p>
                                                    </li>

                                                    <li>
                                                        <p>
                                                        {{ $data['arranque'] }}
                                                        </p>
                                                        <p>
                                                            postes arranque o final
                                                        </p>
                                                    </li>

                                                    <li>
                                                        <p>
                                                        {{ $data['esquinas'] }}
                                                        </p>
                                                        <p>
                                                            Postes esquina
                                                        </p>
                                                    </li>

                                                    <li>
                                                        <p>
                                                        {{ $data['puertas_veh_3'] }}
                                                        </p>
                                                        <p>
                                                            Puerta de acceso para vehículos 3ml
                                                        </p>
                                                    </li>

                                                   </ul>
                                            </div>
                                        @break


                                    @default
                                        <span>Something went wrong, please try again</span>
                                @endswitch


                                <div class="offset-md-4">
                                    @if($current_step > 0 && $current_step < 11)
                                    <button wire:click.prevent="changeStep({{$current_step - 1}})" class="col-md-3 btn btn-primary" onclick="window.scrollTo(0, 0);">
                                        <i class="fa fa-angle-left"></i> Anterior
                                    </button>
                                    @endif

                                    @if($current_step == 10)
                                    <button wire:click.prevent="calcular()" class="col-md-3 btn btn-success">
                                        <i class="fa fa-calculator"></i> Calcular
                                    </button>
                                    @endif

                                    @if($current_step < 10)
                                    <button wire:click.prevent="changeStep({{$current_step + 1}})" class="col-md-3 btn btn-success" onclick="window.scrollTo(0, 0);">
                                        Siguiente <i class="fa fa-angle-right"></i>
                                    </button>
                                    @endif
                                </div>
                                <div class="offset-md-2">
                                    @if($current_step == 11)
                                    <button wire:click.prevent="recalcular()" wire:confirm="Seguro quieres Volver a calcular?" class="col-md-3 btn btn-success">
                                        <i class="fa fa-calculator"></i> Volver a calcular
                                    </button>

                                    <button class="col-md-6 btn btn-success">
                                        <i class="fa fa-envelope"></i> Enviar formulario para solicitar presupuesto
                                    </button>
                                    @endif
                                </div>

                            
                                
                                    <!-- /.grid-wrapper -->

                            </div>
                       </div> 
                   </div>
                 </div>
</div>


<script>
    $(document).on('click', '#sigue', function (e) {
        $('html, body').animate({scrollTop:0}, 'slow');
    });
</script>