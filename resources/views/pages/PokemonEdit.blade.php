@extends('layout.index')

@section('content')
<form class="genContainer {{$pokemons->type->type}}" action="/pokemon/{{ $pokemons->id }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="ShowContainer">
        <div class="FirstColor">
            <div class="InfosPokemon">

                <div class="niveauInput">
                    <label for="">#lvl: </label>
                    <input class="niveau" type="number" name="niveau" value="{{ $pokemons->niveau }}">
                </div>
                <div class="containerNomInput">
                    <label for="">#nom</label>
                    <input class="nomInput" type="text" name="nom" value="{{ $pokemons->nom }}">
                </div>
                <div>
                    <select name="type_id" id="">
                        <option value="">Choisissez un type</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->type }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <input class="fileInput" type="file" name="url" id="url">
                </div>
            </div>
        </div>
        <div class="SecondColor">
        </div>
        <div class="imgContainerPokemon">
            <img class="imgPokemon" src="{{ asset('storage/img/' . $pokemons->image->url) }}" alt="">
        </div>
        <div class="circle">
        </div>
        <a href="/pokemon/{{$pokemons->id}}">
            <div class="boutonClose">
            </div>
        </a>
        <div class="btnUpdate">
            <button class="boutonUpdate" type="submit">update</button>
        </div>
    </div>
</form>
@endsection

