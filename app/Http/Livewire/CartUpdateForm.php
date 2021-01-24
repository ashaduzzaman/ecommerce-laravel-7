<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartUpdateForm extends Component
{
    public $cartItem = [];

    public $quantity = 0;

    public function mount($cartItem)
    {
        $this->cartItem = $cartItem;

        $this->quantity = $cartItem['quantity'];
    }

    public function updateCart()
    {
        dd('updating cart');
    }
    public function render()
    {
        return view('livewire.cart-update-form');
    }
}
