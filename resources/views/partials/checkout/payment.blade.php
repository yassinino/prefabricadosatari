<div class="card mb-2">
  <div class="card-header">
        Payment
  </div>


  @if ($currentStep >= $step)
  <div class="card-body">

        <div class="p-6 space-y-4">
            <div class="site-button mb-4"
                        type="button"
                        wire:click.prevent="$set('paymentType', 'card')">
                    Pay by card
                </button>

            </div>

            @if ($paymentType == 'card')
                <livewire:stripe.payment :cart="$cart"
                                         :returnUrl="route('checkout.view')" />
            @endif

        </div>
</div>

@endif
</div>
