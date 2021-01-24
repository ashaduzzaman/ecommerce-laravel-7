@extends('layouts.front')

@section('content')
    <livewire:mall-cart/>
@endsection

@section('scripts')
<script type="text/javascript">
    function myFunction() {
      document.getElementById('update-cart').style.display = "block";
    }
    </script>

@endsection
