<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::orderBy('created_at', 'desc')->get();
        return view('blogs.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $request->validate([
            'title' => 'required',
            'autor' => 'required',
            'contenido' => 'required',
        ]);

        try {  
            \DB::beginTransaction();
            $id=Post::create([
                'title' => $input['title'],
                'autor' => $input['autor'],
                'contenido' => $input['contenido'],
            ]);
                    
                
            if ($id) {
                \DB::commit();
                $mensaje="Post creado";
            }else{
                \DB::rollBack();
            }
                
                
            } catch (\Illuminate\Database\QueryException $ex) {
                \DB::rollBack();
                $txt = $ex->getMessage();
                $mensaje = "No se pudo crear el post.";
            }

        return redirect()->route('home')->with('success', $mensaje);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
