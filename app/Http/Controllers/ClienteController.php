<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClienteController extends Controller
{
    public function index(Response $response)
    {
        $clientes = [
            "Joao" => ['nome' => 'João da Silva'],
            "Maria" => ['nome' => 'Maria da Silva']
        ];

        // $dadosString = json_encode($clientes);

        // return $response->setContent($dadosString)
        //                 ->header('Content-Type', 'application/json')
        //                 ->setStatusCode(200);

        // return response()->json($clientes);

        return $clientes;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Response $response)
    {
        $conteudo = view('create')->render();

        return $response->setContent($conteudo)
                        ->setStatusCode(200)
                        ->header('Content-Type', 'text/html');

        //return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }
}
