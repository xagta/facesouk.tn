<?php

namespace App\Http\Controllers;

use App\Entreprises;
use Illuminate\Http\Request;

class EntreprisesController extends Controller
{
    public function index()
    {
        $entreprises= Entreprises::all();

        // echo json_encode($opps) ;
        return view('other.entreprises.index',['entreprises'=>$entreprises]) ;
    }

    public function show($id)
    {
        $entreprises= Entreprises::find($id) ;

        // echo json_encode($opps) ;
        return view('other.entreprises.show',['entreprise'=>$entreprises]) ;
    }
}
