<?php

namespace App\Http\Controllers;

use App\Service;
use App\Investment;
use App\Balance;
use App\Investment as AppInvestment;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investments = Investment::all();

        $salary = $this->getSalary(0);

        foreach ($investments as $inv) {
            $operation = rand(1, 3); //Random de [1,3)

            if ($operation == 1) {
                $inv->valor = $inv->valor / 2;
            } else {
                $inv->valor = $inv->valor * 2;
            }

            $inv->save();
        }

        return view('investment.index')->with(['investments' => $investments, 'salary' => $salary]);
    }

    public function getSalary($money)
    {
        $balance = Balance::all();
        $salary = 0;

        foreach ($balance as $item) {
            $salary += $item->importe;
        }

        $salary -= $money;

        return $salary;
    }

    public function buy($id)
    {
        $inv = Investment::findOrFail($id);

        if ($inv->acciones > 0) {
            $salary = $this->getSalary(0);

            if ($salary >= $inv->valor) {
                $inv->acciones -= 1;
                $inv->save();

                $balance = new Balance();

                $balance->fecha = date('Y-m-d');
                $balance->desc = "Compra de Acción: " . $inv->empresa;
                $balance->importe = $inv->valor * -1;
                $balance->save();

                dd("Se compro una acción de la empresa " . $inv->empresa);
            } else {
                dd("No tiene dinero suficiente para adquirir la acción de " . $inv->empresa);
            }
        } else {
            dd("No hay acciones disponibles para adquirir");
        }
    }

    public function sell($id)
    {
        $inv = Investment::findOrFail($id);

        if ($inv->acciones > 0) {

            if ($inv->acciones >= $inv->total) {
                dd("Careces de acciones adquiridas");
            }

            $salary = $this->getSalary($inv->valor);

            if ($salary >= 0) {

                $inv->acciones += 1;
                $inv->save();

                $balance = new Balance();
                $balance->fecha = date('Y-m-d');
                $balance->desc = "Venta de Acción: " . $inv->empresa;
                $balance->importe = $inv->valor;
                $balance->save();

                dd("Se vendió una acción de la empresa " . $inv->empresa);
            } else {

                dd("No tiene dinero suficiente para adquirir la acción de " . $inv->empresa);
            }
        } else {
            dd("No hay acciones disponibles para vender");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('investment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invest = new Investment();

        $invest->empresa = $request->input('nombre')->unique();
        $invest->valor = $request->input('valor');
        $invest->acciones = $request->input('cantidad');
        $invest->total = $request->input('cantidad');

        $invest->save();

        return redirect()->route('investment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function show(Investment $investment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function edit(Investment $investment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investment $investment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investment $investment)
    {
        //
    }
}
