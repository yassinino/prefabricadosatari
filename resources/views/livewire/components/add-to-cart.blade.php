<div class="cart">
                            {{-- <div class="quantity btn-quantity pull-left m-r10" >
                                <input id="quantity" type="number" value="1" class="form-control" wire:model="quantity">
                            </div>
                            <button type="submit" class="btn btn-primary site-button pull-left" wire:click.prevent="addToCart"><i class="fa fa-cart-plus"></i> Añadir a la cesta</button> --}}
                            <br>
                            <br>
                            @if ($errors->has('quantity'))
                                <div class="alert alert-danger"
                                    role="alert">
                                    @foreach ($errors->get('quantity') as $error)
                                        {{ $error }}
                                    @endforeach
                                </div>
                            @endif

</div>


