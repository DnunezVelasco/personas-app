<?php

namespace App\Http\Controllers;

use App\Models\Comuna;
use App\Models\Pais;
use App\Models\Departamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comunas = Comuna::all();
        // $comunas = DB::table('tb_comuna')
        //     ->join('tb_municipio', 'tb_comuna.muni_codi', '=', 'tb_municipio.muni_codi')
        //     ->join('tb_departamento', 'tb_municipio.depa_codi', '=', 'tb_departamento.depa_codi')
        //     ->select('tb_comuna.*', 'tb_municipio.muni_nomb')
        //     ->get();

        //dd($comunas);

        return view("comunas.index", ["comunas" => $comunas]);
    }


}
