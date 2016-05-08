<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\editorial;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class editorialController extends Controller
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function storeEditorial(Request $request){
            $this->validate($request, [
            'nombre' => 'required|min:3',
            'telefono' => 'required|min:7'
        ]);
        return Editorial::create($request->all());
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function deleteEditorial(Request $request)
    {   
        $delete = \DB::table('editorial')
            ->where('id_editorial', $request->input('id_editorial'))
            ->delete();
        if($delete){
            return $delete;
        }
    } 
}
