<?php

namespace App\Http\Controllers;

use App\Libro;
use Redirect;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['libros'] = Libro::orderBy('id','desc')->paginate(2);
        return view('libro.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'genero' => 'required',
            'autor' => 'required',
            'edicion' => 'required',
            'editorial' => 'required',
            'sinopsis' => 'required',
        ]);

        Libro::create($request->all());

        return Redirect::to('libro')
        ->with('success','Libro creado satisfactoriamente.');
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
        $where = array('id' => $id);
        $data['libro_info'] = Libro::where($where)->first();
 
        return view('libro.edit', $data);
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
        $request->validate([
            'titulo'   => 'required',
            'genero'   => 'required',
            'autor'    => 'required',
            'edicion'  => 'required',
            'editorial'=> 'required',
            'sinopsis' => 'required',
        ]);
         
        $update = [ 'titulo' => $request->titulo,
                    'genero' => $request->genero,
                    'autor' => $request->autor,
                    'edicion' => $request->edicion,
                    'editorial' => $request->editorial,
                    'sinopsis' => $request->sinopsis
                ];
        Libro::where('id',$id)->update($update);
   
        return Redirect::to('libro')
       ->with('success','Libro actualizado satisfactoriamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Libro::where('id',$id)->delete();
        return Redirect::to('libro')
        ->with('succes','Libro eliminado satisfactoriamente.');
    }
}
