<div class="section-full p-t40 p-b50">
                <div class="container">
                    <div class="section-content">
                    <div class="row justify-content-center mt-5">
                            <div class="col-md-8">

                            <form>
                                <div class="mb-3 row">
                                    <label for="name" class="col-md-4 col-form-label text-md-end text-start">Nombre</label>
                                    <div class="col-md-6">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" wire:model="name">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email</label>
                                    <div class="col-md-6">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" wire:model="email">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="password" class="col-md-4 col-form-label text-md-end text-start">Contraseña</label>
                                    <div class="col-md-6">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" wire:model="password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confirm Contraseña</label>
                                    <div class="col-md-6">
                                    <input type="password" class="form-control" id="password_confirmation" wire:model="password_confirmation">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <button wire:click.prevent="register" class="col-md-3 offset-md-5 btn btn-primary">
                                    Regístrate
                                </button>
                                </div>
                            </form>
                        </div>
                 </div>
</div>