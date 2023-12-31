<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics= Comic::all();
        return view('comic.index', compact('comics'));    
    }
        /**
         * Show the form for creating a new resource.
         *
         * @return\Illuminate\Http\Response
         */
    public function create()
    {
        return view('comic.create');   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        return redirect()->route('comic.show', $comic);    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comic.show', compact('comic'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)  
    {
        return view('comic.edit', compact('comic'));    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *  @return \Illuminate\Http\Response
     */
    public function update(Request $request,Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);
        
        return redirect()->route('comic.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comic.index');
    }

}