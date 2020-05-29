@extends('layouts.app')
    
   
@foreach($cartContent as $pdt)
<div>
<p>Product Price: {{$pdt->price}}</p>
<p>Product Name: {{$pdt->name}}</p>
<p>Quantity: {{$pdt->qty}}</p>
</div>
<a href="{{route('cart.decr', ['id' => $pdt->rowId, 'qty' => $pdt-> qty ])}}">-</a>
<a href="{{route('cart.incr', ['id' => $pdt->rowId, 'qty' => $pdt-> qty ])}}">+</a>

@endforeach