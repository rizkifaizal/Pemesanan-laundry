<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use App\Http\Requests\StoreChartRequest;
use App\Http\Requests\UpdateChartRequest;
use Illuminate\Http\Request;


class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id_user)
    {
        return view('cart', [
            "title" => "Cart",
            "active" => "cart",
            "carts" => Chart::where('id_user', $id_user)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */

     public function saveChart(Chart $chart, Request $chartRequest)
     {
         $data = $chartRequest->all();
         //dd($data);
         $chart->create($data);
         return redirect('/products')->with('success', 'Berhasil ditambahkan Ke Chart');
     }

     public function delete(Chart $chart)
     {
         $chart->delete();
         return back()->with('success', 'Berhasil Di Hapus');
     }
     
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChartRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Chart $chart)
    {  
        // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chart $chart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChartRequest $request, Chart $chart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chart $chart)
    {
        //
    }
}
