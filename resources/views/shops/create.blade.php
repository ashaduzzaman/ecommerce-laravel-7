@extends('layouts.app')

@section('content')
<h2>Submit your shop</h2>

<form action="{{ route('shops.store')}}" method="POST">
    @csrf

    <div class="form-group">
      <label for="name">Name of Shop</label>
      <input type="text" name="name" id="" class="form-control" placeholder="Enter your shop name">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea name="description" id="" class="form-control" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
