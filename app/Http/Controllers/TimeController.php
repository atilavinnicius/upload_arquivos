<?php

namespace App\Http\Controllers;

use App\Models\Time;
use App\Models\TimeBrasao;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('times.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Salvando Time
        $time = new Time();
        $time->nome_time = $request->nome_time;
        $time->save();
        // dd($request->allFiles()['brasoes']);
        //Laço para salvar arquivos
        $brasoes = $request->allFiles()['brasoes'];
        for ( $i = 0 ; $i < count($brasoes) ; $i++)
        {
            $file = $brasoes[$i];
            $fileName = $brasoes[$i]->getClientOriginalName();//falta adicionar nome ao arquivo ***

            $timeBrasao = new TimeBrasao();
            $timeBrasao->time_id = $time->id;// ja tem ID alimentado salvou agr
            $timeBrasao->path = $file->store('times/' .$time->id); //criando diretorio com id de cada Time
            $timeBrasao->save();
            unset($timeBrasao); //limpa a cada repeticao
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Time $time)
    {
        return view ('times.show', [
            'time' => $time
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
