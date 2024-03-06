<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArbolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $arboles = DB::table('arboles')->get();
        return response()->json($arboles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $arbol = DB::table('arboles')->insert([
            'nombre' => $request->nombre,
        ]);

        return response()->json($arbol, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
