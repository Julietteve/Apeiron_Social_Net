<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
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
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show(int $userId)
   {
       // $user = User::find($userId);
       // $followers = $user->followers;
       // $followings = $user->followings;
       // return view('home.feed', compact('user', 'followers' , 'followings');
   }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          return view('profile.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

      public function ProfileUpdate(Request $request)
   {
       // $user= auth()->user();
       // $data = array_diff($request->all(), $user->toArray());
       // $data['image'] = $user->image;
       // if ($request->hasFile('image')) {
       //     $data['image'] = $request->file('image')->store('users');
       // }
       // $update=$user->update($data);
       // return redirect('profile')->with('status', 'Profile updated!');
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

    /**
 * Follow the user.
 *
 * @param $profileId
 *
 */
public function followUser(int $profileId)
{
  $user = User::find($profileId);

  if(! $user) {
     return redirect()->back()->with('error', 'User does not exist.');
 }

 $user->followers()->attach(auth()->user()->id);

 return redirect()->back()->with('success', 'Successfully followed the user.');
}

/**
 * Follow the user.
 *
 * @param $profileId
 *
 */
public function unFollowUser(int $profileId)
{
  $user = User::find($profileId);
  if(! $user) {

     return redirect()->back()->with('error', 'User does not exist.');
 }
$user->followers()->detach(auth()->user()->id);
return redirect()->back()->with('success', 'Successfully unfollowed the user.');
}


}
