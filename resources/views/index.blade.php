@extends('layouts.app')
    
   
 
  

    @section('journeyResult')
   
    <form action="{{ route('rslt', ['departure_station', 'arrival_station']) }}" method="get">
    {{csrf_field()}}

    @method('GET')
       <div class="form-group">
               
                <label for="form"><h3 class="text-base text-blue-darker uppercase font-medium"> From</h3></label>
                <select name="departure_station" class="form-control form-control-sm">
  <option value="" disabled selected>Choose your departure station</option>
  @foreach($stations as $station)


  <option value="{{$station->id}}">{{$station->station_name}}</option>
  @endforeach

</select>
</div>

<div class="form-group">

                <label for="To"><h3 class="text-base text-blue-darker uppercase font-medium"> To</h3></label>
                <select name="arrival_station" class="form-control form-control-sm">
  <option value="" disabled selected>Choose your destnation</option>
  @foreach($stations as $station)


  <option value="{{$station->id}}">{{$station->station_name}}</option>
  @endforeach

</select>
</div>
<button class="btn btn-primary btn-sm">Search journey</button>
</form>
    @jquery
    @toastr_js
    @toastr_render
    @endsection

