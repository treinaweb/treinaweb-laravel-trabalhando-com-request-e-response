<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClienteController extends Controller
{
    public function index(Response $response)
    {
        // return $response->setContent('<h1>olá mundo</h1>')
        //                 ->setStatusCode(200)
        //                 ->header('Content-Type', 'text/html');

        // return response('<h1>olá mundo</h1>');

        return '<h1>olá mundo</h1>';
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
