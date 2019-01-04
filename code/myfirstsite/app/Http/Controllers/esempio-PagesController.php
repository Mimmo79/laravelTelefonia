<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
      return view('welcome',[
        'tasks' => ['CIAO','HELLO'],
        'pippo' => 'pippo è il padrone di pluto', /*posso passare n variabili*/
        'queryname' => request('titolo')
        ]);
    }

    public function about()
    {
      return view('about');
    }
}
