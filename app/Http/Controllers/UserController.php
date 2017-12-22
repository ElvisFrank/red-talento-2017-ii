<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Publication;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::orderBy('id','DESC')->paginate(7);
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $user=new User($request->all());
        //$user->fill($request->all());
        $user->password=bcrypt($request->password);
        $user->save();
        flash('Registrado correctamente')->success();
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$user=Auth::user();
        $user=User::find($id);
        if((boolean)(count($user))){
            $publications = Publication::where('user_id','=',$user->id)->orderBy('id','DESC')->paginate(12);
            return view('member.profile.show',compact('user','publications'));
        }else{
            return redirect()->route('home');
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        return view('admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   //dd($request->all());
        $user=User::find($id);
        $user->fill($request->all());
        $user->password=bcrypt($request->password);
        $user->save();
        flash('Modificado Correctamente')->success();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        //dd($user);
        $user->delete();
        flash('Usuario '.$user->name.' Eliminado del sistema.')->error();
        return redirect()->route('users.index');
    }
}
