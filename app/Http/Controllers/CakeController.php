<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCakeRequest;
use App\Http\Requests\UpdateCakeRequest;
use App\Models\Cake;
use Illuminate\Support\Facades\Redirect;

class CakeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cakes = Cake::all();
        return view('catalogue.index', ['cakes' => $cakes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('catalogue.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCakeRequest $request)
    {

        $validated = $request->validated();

        Cake::create([
            'name' => $validated['name'],
            'description' => $validated['description']
        ]);

        return Redirect::route('catalogue.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cake $cake)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cake $cake)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCakeRequest $request, Cake $cake)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cake $cake)
    {
        //
    }
}
