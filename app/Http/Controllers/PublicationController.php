<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Publication;
use App\Models\Categorie;
use App\Models\file;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PublicationRequest;
class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$publications=Publication::buscar($request->title)->orderBy('id','DESC')->paginate(12);
        //return view('welcome',compact('publications'));
        //comentado debido a que en home mandamos la vista...
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$categories=Categorie::all();
        $categories=Categorie::orderBy('name','ASC')->select('name','id')->get();
        return view('member.publication.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicationRequest $request)
    {  
        $publication=new Publication($request->all());
        $publication->user_id=Auth::user()->id;
        $publication->save();

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

        flash('Publicacion creada')->success();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publication=Publication::find($id);
        return view('member.publication.show',compact('publication'));
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
