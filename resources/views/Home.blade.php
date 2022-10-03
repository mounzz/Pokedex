@extends('layout.index')

@include('layout.flash')

@section('content')
    <div class="container">
        <div class="header">
        </div>
        <div class="titreContainer">
            <h1 class="titre">Attrapez-les tous<i>!</i></h1>
            <h4>ajouter un pokémon.</h4>
        </div>
        <form class="formContainer" action="/pokemon" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <input type="text" placeholder="nom du pokémon" name="nom">
                <input type="number" placeholder="niveau du pokémon" name="niveau">
            </div>
            <div>
                <select name="type_id" id="">
                    <option value="">Choisissez un type</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->type }}</option>
                    @endforeach
                </select>
                <input class="InputForm" type="file" name="url" id="url">
            </div>

            <div><button type="submit">envoyer</button></div>

        </form>


        <h1>Pokémons découverts</h1>

        <div class="listePokemon">
            <span class="titreCol">Nom du Pokémon</span>
            <span class="titreCol">Type</span>
            <span class="titreCol"></span>
            @foreach ($pokemons as $pokemon)
                <span>{{ $pokemon->nom }}</span>
                <span>{{ $pokemon->type->type }}</span>
                <span class="buttonList">
                    <a href="/pokemon/{{ $pokemon->id }}">
                        <button>plus</button>
                    </a>
                </span>
            @endforeach
        </div>

    </div>
@endsection
