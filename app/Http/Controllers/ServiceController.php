<?php

namespace App\Http\Controllers;

use App\Service;
use App\Balance;
use Session;
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
        $services = Service::all();
        return view ('service.index')->with('services', $services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('service.create');
    }

    public function pay(Request $request)
    {
        $serviceName = $request->get('serviceName');
        $money = $request->get('importe');

        $balance = Balance::all();

        $salary = 0;

        foreach ($balance as $item){
            $salary += $item -> importe;
        }

        if($salary>=$money){
            $balance = new Balance();
            $balance -> fecha = date('y-m-d');
            $balance -> desc = "Pago de Servicio" . $serviceName;
            $balance -> importe = -$money;
            $balance -> save();

            Session::flash('payMsg', 'Servicio ' . $serviceName . ' abonado con exito');
            Session::flash('alertClass', 'alert-danger');
        } else {
            Session::flash('payMsg', 'No tiene el saldo suficiente para abonar el servicio ' . $serviceName);
            Session::flash('alertClass', 'alert-danger');
            
        }

        return redirect()->route('service.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service();

        $service->nombre = $request->input('nombre');
        $service->num_ref = $request->input('numRef');

        $service->save();

        return redirect()->route('service.index');
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
