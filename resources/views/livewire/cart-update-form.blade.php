<div>
    {{-- <form action="{{ route('cart.update',$cartItem['id']) }}"> --}}
        <form wire:submit.prevent="updateCart">
        <div class="button minus">
            <button type="button" class="btn btn-primary btn-number" data-type="minus" data-field="quant[{{ $cartItem['id'] }}]">
                <i class="ti-minus"></i>
            </button>
        </div>
        <input type="text" wire:model="quantity" name="quant[{{ $cartItem['id']}}]" class="input-number"  data-min="1" data-max="100" wire:change="updateCart">
        <div class="button plus">
            <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[{{ $cartItem['id'] }}]">
                <i class="ti-plus"></i>
            </button>
        </div>
    </form>
</div>
