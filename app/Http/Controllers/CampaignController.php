<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaigns;
use Auth;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $campaigns= Campaigns::all();

        return view('profile.profile',[
            'user' => auth()->user(),
            'campaigns'=>$campaigns,
          ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,
      [
            'campaign_text' => 'required',
            'campaign_image' => ['file','image','required'],
      ],
      );


        $newCampaign= new Campaign;

        $newPost->campaign_text=$request->campaign_text;


        // dd($request->file('post_image'));
        $path = $request->file('campaign_image')->store('public');
        $file=basename($path);

        $newCampaign->campaign_image=$file;
        $newCampaign->user_id = Auth::user()->id;

        $newCampaign->save();



        return redirect('campaigns');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          return $campaign;
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
