<div class="modal fade" id="myModal" wire:ignore.self>
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Enviar formulario para solicitar presupuesto</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      

      <!-- Modal body -->
      <div class="modal-body presupuesto">

        @if (session()->has('success'))

            <div class="p-b20">
                <h4 class="text-center text-success">{{ session('success') }}</h4>
            </div>
        @endif
            <div class="mb-3 row">
                    <div class="col-md-12">
                    <input type="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" wire:model="nombre" placeholder="Nombre">
                    @if ($errors->has('nombre'))
                        <span class="text-danger">{{ $errors->first('nombre') }}</span>
                    @endif
                </div>
             </div>
             
             <div class="mb-3 row">
                    <div class="col-md-12">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" wire:model="email" placeholder="Correo electrónico">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
             </div>

             <div class="mb-3 row">
                    <div class="col-md-12">
                    <input type="location" class="form-control @error('location') is-invalid @enderror" id="location" wire:model="location" placeholder="Lugar de envío (localidad, ciudad, provincia...)">
                    @if ($errors->has('location'))
                        <span class="text-danger">{{ $errors->first('location') }}</span>
                    @endif
                </div>
             </div>

             <div class="mb-3 row">
                    <div class="col-md-12">
                    <input type="postal_code" class="form-control @error('postal_code') is-invalid @enderror" id="postal_code" wire:model="postal_code" placeholder="Código postal">
                    @if ($errors->has('postal_code'))
                        <span class="text-danger">{{ $errors->first('postal_code') }}</span>
                    @endif
                </div>
             </div>

        </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button class="btn btn-success" wire:click.prevent="enviarPresupuesto()" >Enviar mensaje</button>
      </div>

    </div>
  </div>
</div>