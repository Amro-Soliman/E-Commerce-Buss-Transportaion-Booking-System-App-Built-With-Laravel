@extends('layouts.app')


@section('journey-result')
<h2 class="text-info">Busses</h2>

@foreach($journies as $journey)
  <p class="text-muted">Line name: {{$journey->line_name}} </p>
  <p class="text-muted">Line discription: {{$journey->description}}</p>
  @endforeach

  @foreach($journey->trips as $trip)
  <p class="text-muted">Departure time: {{$trip->departure_time}}</p> 
  <p class="text-muted">Arrival time: {{$trip->arrival_time}}</p> 
  @endforeach

  @foreach($journey->trips as $trip)
  @foreach($trip->operates as $operate)
  <p class="text-muted">Vehicle Code: {{$operate->vehicle->code}}</p>
  
  @endforeach
  @endforeach


  
  
  


  
  @foreach($dep_station as $departure_station)

  <p class="text-muted">Departure station:  {{$departure_station->station_name}}</p>
  @endforeach
  @foreach($arr_station as $arrival_station)

  <p class="text-muted">Arrival station:   {{$arrival_station->station_name}}</p>
  
  @endforeach

@foreach($journies as $journey)
<form action="{{ route('cart.add') }}" method="post"> 
  {{csrf_field()}}
  <input class="email input-text qty text" type="hidden" name="price" value="500">
  <input class="email input-text qty text" type="hidden" name="weight" value="0">


  <input type="hidden"  name="line_id" value="{{$journey->id}}">
  <button type="button" class="min" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
  </button>
  <input id="qty" class="email input-text qty text" name="qty"  value="1">


    </div>
  <button type="button" class="plus" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
  <button class="btn btn-primary btn-sm">add to cart</button> 
  
  </form>
@endforeach

