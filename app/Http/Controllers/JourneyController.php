<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Station;
use App\Models\Line;



class JourneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stations = Station::all();
        return  view('index')->with('stations', $stations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $departure_station, $arrival_station) {
       
       //dd($request->all());
        $departure_station = $request->input('departure_station');
        $arrival_station = $request->input('arrival_station');

            $journies = Line::where(array(
                'departure_station' =>  $departure_station,
                'arrival_station' =>  $arrival_station))->get();
                
                $dep_station = Station::where(
                    'id', '=',  $departure_station)->get();
                    $arr_station = Station::where(
                        'id', '=',  $arrival_station)->get();
                
            return view('result')
            ->with('journies' ,$journies)
            ->with('dep_station', $dep_station)
            ->with('arr_station', $arr_station);
        }
        
    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function app()
    {
        //
        
        return  view('app');
    }

    
}
