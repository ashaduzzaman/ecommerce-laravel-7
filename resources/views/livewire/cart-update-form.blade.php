<div>
    <div class="button minus">
        <button type="button" class="btn btn-primary btn-number" {{ $isDisabled ? 'disabled' : '' }} data-type="minus" wire:click="minusItem">
            <i class="ti-minus"></i>
        </button>
    </div>
    <input type="text" wire:model="quantity" class="input-number" disabled data-min="1" data-max="100" wire:change="updateCart">
    <div class="button plus">
        <button type="button" class="btn btn-primary btn-number" data-type="plus" wire:click="plusItem">
            <i class="ti-plus"></i>
        </button>
    </div>
</div>
