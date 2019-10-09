<?php

namespace App\Http\Controllers;

use App\Investment;
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

        foreach($investments as $inv){
            $operation = rand(1,3); //Random de [1,3)

            if($operation == 1){
                $inv-> valor = $inv->valor/2;
            }else{
                $inv-> valor = $inv->valor*2;
            }

            $inv->save();

        }

        return view('investment.index')->with(['investments' => $investments, 'salary' => $salary]);
    }

    public function getSalary($money){
        $balance = Balance::all();
        $salary = 0;

        foreach($balance as $item){
            $salary += $item -> importe;
        }

        $salary -= $money;

        return $salary;
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
