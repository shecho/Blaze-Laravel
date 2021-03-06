<?php

namespace App\Http\Controllers;

use App\Service;
use App\Barber;
use DB;
use App\CreateDate;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CreateService(Request $request)
    {
        //
        $newervice = new Service();    
        $newervice->serviceName = $request->serviceName;
        $newervice->serviceDescription = $request->serviceDescription;
        $newervice->servicePrice = $request->servicePrice;
        $newervice->save();
        $response = $newService;

        return $response;
    }

    public function deleteService($idService)
    {
        $barberos = Barber::all();
        $servicios = Service::all();
        $users = DB::table('users')->select('id','name', 'phone', 'email')->get();
        $response = Service::destroy($idService);
        //1: borrado; 0 no borrado.
        $citas = CreateDate::all();
        //dd($citas);
        return redirect()->route('home');
        // return view('home', compact('citas','users','servicios','barberos'));
        // return redirect()->route('home', [$citas],[$users]);
        //return $response;
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
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
