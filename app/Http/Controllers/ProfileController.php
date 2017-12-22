<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=Auth::user();
        if($user->id != $id){
            flash('Este no es su perfil!')->error();
            return redirect()->route('home');
        }else{
            return view('member.profile.edit',compact('user'));
        }
        
        
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
        dd($request);
        
        $user=User::find($id);
        $user->fill($request->all());
        $user->password=bcrypt($request->password);
        if($request->file('file'))
        {     
            $archivo=$request->file('file');
            $name=Auth::user()->name . time() . '.' . $archivo->getClientOriginalExtension();
            $path=public_path() . '/images/publications/';
            $archivo->move($path,$name);

            $file=new File();
            $file->publication_id=$publication->id;
            $file->name=$name;
            $file->direction=$path;
            $file->save();   
        }
        $user->save();
        flash('Editado correctamente')->success();
        return redirect()->route('profile.show',$user->id);
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
