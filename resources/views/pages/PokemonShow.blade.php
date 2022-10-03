@extends('layout.index')

@section('content')
    <div class="genContainer {{ $pokemons->type->type }}">
        <div class="ShowContainer">
            <div class="FirstColor">
                <div class="InfosPokemon">
                    <div class="niveau">#lvl {{ $pokemons->niveau }}</div>
                    <div class="nom">{{ $pokemons->nom }}</div>
                    <div class="type">Type: {{ $pokemons->type->type }}</div>
                </div>
                <div class="buttonsShow">
                    <div>
                        <a href="/pokemon/{{ $pokemons->id }}/edit">


                            <span class="containerBall">
                                <img class="pokeball" src="/assets/images/pokeball.png" alt="">
                                <button type="submit">
                                    Éditer
                                </button>
                            </span>


                        </a>
                    </div>
                    <div>
                        <form action="/pokemon/{{ $pokemons->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <span class="containerBall">
                                <img class="pokeball" src="/assets/images/pokeball.png" alt=""> <button
                                    type="submit">Supprimer</button>
                            </span>
                        </form>
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
            <a href="/pokemon">
                <div class="boutonClose">

                </div>
            </a>
        </div>

    </div>
@endsection
