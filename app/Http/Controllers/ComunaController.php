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
     //   $comunas = Comuna::all();
        $comunas = DB::table('tb_comuna')
           ->join('tb_municipio', 'tb_comuna.muni_codi', '=', 'tb_municipio.muni_codi')
            ->join('tb_departamento', 'tb_municipio.depa_codi', '=', 'tb_departamento.depa_codi')
           ->select('tb_comuna.*', 'tb_municipio.muni_nomb')
           ->get();

        //dd($comunas); 

        return view("comunas.index", ["comunas" => $comunas]);
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipios = DB::table('tb_municipio')
        ->orderBy('muni_nomb')
        ->get();


        return view('comunas.new', [
            'municipios' => $municipios,

        ]);
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comuna = new Comuna();
        $comuna->comu_nomb = $request->name;
        $comuna->muni_codi = $request->code;
        $comuna->save();
        return redirect()->route('comunas.index') ;

     $comunas = DB::table('tb_comuna')
           ->join('tb_municipio', 'tb_comuna.muni_codi', '=', 'tb_municipio.muni_codi')
            ->join('tb_departamento', 'tb_municipio.depa_codi', '=', 'tb_departamento.depa_codi')
           ->select('tb_comuna.*', 'tb_municipio.muni_nomb')
           ->get();
    }

}