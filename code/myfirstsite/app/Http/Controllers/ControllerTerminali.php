<?php

namespace App\Http\Controllers;

use App\ModTerminali;
use Illuminate\Http\Request;
use DB;

class ControllerTerminali extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $TermList = DB::connection('mysql2')
        //             ->table('mobile_modelli')
        //             ->orderby('Modello')
        //             ->get();
        $Marche = DB::connection('mysql2')
                    ->table('mobile_marche')
                    ->get();

        $TermList = DB::connection('mysql2')
                    ->table('mobile_modelli')
                    ->join('mobile_marche', 'FK-IDmarca', '=', 'IDmarche')
                    ->orderby('Modello')
                    ->get();
        //$unique = $TermList->unique('Marca');
        $jsonTermList = $TermList->toJson();
        $arrayTermList = $TermList->toArray();
        return View('mobile/nuovo-terminale',['Marche'=>$Marche, 'TermList'=>$TermList, 'jsonTermList'=>$jsonTermList,'arrayTermList'=>$arrayTermList]);
    }
    function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('country_state_city')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
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
     * @param  \App\ModTerminali  $modTerminali
     * @return \Illuminate\Http\Response
     */
    public function show(ModTerminali $modTerminali)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModTerminali  $modTerminali
     * @return \Illuminate\Http\Response
     */
    public function edit(ModTerminali $modTerminali)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModTerminali  $modTerminali
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModTerminali $modTerminali)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModTerminali  $modTerminali
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModTerminali $modTerminali)
    {
        //
    }
}
