<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Image;
use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemons = Pokemon::all();
        $types = Type::all();
        return view('Home', compact('pokemons', 'types'));
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

        $request->validate([
            'nom' => 'required|unique:pokemon,nom',
            'type_id' => 'required|numeric',
            'niveau' => 'required|numeric|min:1|max:100'

        ]);

        $store = new Pokemon;
        $image = new Image;
        Storage::put('public/img/', $request->file('url'));
        $store -> nom = $request -> nom;
        $store -> type_id = $request->type_id;
        $store -> niveau = $request->niveau;
        $image -> url = $request ->file('url')->hashName();
        $image -> save();
        $store -> image_id = $image -> id;
        $store -> save();
        return redirect()->back()->with('success', 'Pokémon ajouté!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pokemons = Pokemon::find($id);
        return view('pages.PokemonShow', compact('pokemons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $types = Type::all();
        $pokemons = Pokemon::find($id);
        return view('pages.PokemonEdit', compact('pokemons', 'types'));
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
        $image = Image::find($id);

        $pokemons = Pokemon::find($id);
        $pokemons -> nom = $request->nom;
        $pokemons -> type_id = $request->type_id;
        $pokemons -> niveau = $request->niveau;
        if ($request->file('url') != null) {
            Storage::delete('public/img/' . $pokemon->image->url);

            Storage::put('public/img/', $request->file('url'));

            $image->url = $request->file('url')->hashName();
            $image->save();
            $pokemons -> image_id = $image -> id;
        }

       $pokemons->save();

        return redirect('/pokemon');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Pokemon::find($id);
        $destroy -> delete();
        Storage::delete('public/img/' . $destroy->image->url);
        $destroy-> image()->delete();
        return redirect('/');
    }
}
