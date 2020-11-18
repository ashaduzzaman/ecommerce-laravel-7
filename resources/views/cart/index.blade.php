@extends('layouts.app')

@section('content')
    <h2>Your Cart</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $cartItem)
                <tr>
                <td scope="row">{{ $cartItem->name }}</td>
                <td>{{ Cart::session(auth()->id())->get($cartItem->id)->getPriceSum() }}</td>
                <td>
                <form action="{{ route('cart.update',$cartItem->id) }}">
                    <input type="number" name="quantity" id="" value="{{ $cartItem->quantity }}">
                    <input type="submit" value="Update">
                </form>
                </td>
                <td>
                <a href="{{ route('cart.destroy', $cartItem->id) }}">X</a>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <h3>
            Total: $ {{ \Cart::session(auth()->id())->getTotal() }}
        </h3>
    <a name="" id="" class="btn btn-primary" href="{{ route('cart.checkout') }}" role="button">Proceed to checkout</a>
@endsection
