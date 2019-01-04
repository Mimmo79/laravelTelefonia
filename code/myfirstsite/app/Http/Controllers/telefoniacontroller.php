<?php

namespace App\Http\Controllers;

use App\telefonia;
use App\DBview;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class telefoniacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sp_fatt_bim = DB::connection('mysql2')->select('call mobile("2018", "1", "%")');
      $assegnazioni_view = DBview::all();
      $ser=$assegnazioni_view->toArray();
      //$$sp_fatt_bim->toJson();
      //dd($sp_fatt_bim);

      return view ('telefonia.index',['assegnazioni'=>$ser]);
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
     * @param  \App\telefonia  $telefonia
     * @return \Illuminate\Http\Response
     */
    public function show(telefonia $telefonia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\telefonia  $telefonia
     * @return \Illuminate\Http\Response
     */
    public function edit(telefonia $telefonia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\telefonia  $telefonia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, telefonia $telefonia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\telefonia  $telefonia
     * @return \Illuminate\Http\Response
     */
    public function destroy(telefonia $telefonia)
    {
        //
    }
}
