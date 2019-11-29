<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campain;
use Auth;


class CampaignsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $campaings= Campain::all();
        return view('campaigns.campaigns',[
            'campains'=>$campaigns,
          ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($campaigns)
    {
       //  'name'=> $name,
       //  'images'=> $images,
       // 'description'=> $description,
       // 'created_at'=> $created_at,
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
            'name' => 'required',
            'images' => 'file',
            'video' => 'file',
            'description' => 'required',

        ]);

        Post::create($request->all());

        return redirect('campains');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $campaigns = Campaigns::find($id);

        $campaigns_files = [
          'name' => 'required',
          'images' => 'file',
          'video' => 'file',
          'description' => 'required',
        ];


        $this->validate($request,$campaigns)

        // $lider->nombre_y_apellido = $request->input('name');
        // $lider->medio = $request->input('medio');
        // $lider->cumpleanios = $request->input('fecha_nac');
        // $lider->estilo = $request->input('estilo');
        // $lider->perfil = $request->input('perfil');
        //
        // if($request->file('foto') !== null) {
        //     $file = $request->file('foto')->store('lideres/fotos', 'public');
        //     $lider->foto = $file;
        // }

        $campaigns->save();

        return redirect()->back()->with('success', 'La ficha se actualizó de manera correcta');
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
