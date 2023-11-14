@extends('sistema.layout')
@section('title', 'JAMB')
@section('content')
    <div class="container" style="margin-left: 15%">
        <p class="h1 text-start" style="color: #321EB1; font-size: 100px"><b>Favoritos</b></p>
        <p class="h2"><b>Nesta seção você tem acesso aos animais que você achou especiais!
            </b></p>
        @if ($cadastro == null)
            <p>Você não favoritou ninguém!</p>
        @else
            <div class="album bg-light">
                <div class="container">
                    <div class="row">
                        @foreach ($cadastro as $item)
                            <div class="col-md-4">
                                <div class="card mb-4 box-shadow">
                                    <img class="card-img-top" src="/storage/{{ $item->animal->arquivo }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h3>{{ $item->animal->nome }}</h3>
                                        <p style="font-size:20px" class="card-text">{{ $item->animal->idade }} ano(s)</p>
                                        <p style="font-size:19px"class="card-text">{{ $item->animal->raca }}</p>
                                        <p style="font-size:19px"class="card-text">{{ $item->animal->sobre }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group" id="botaonfv">
                                                <button onclick="window.location.href='/favoritos';"
                                                    style="color: #ffffff; background-color: ##2B1998; font-size: 18px"
                                                    type="button" class="btn btn-sm btn-outline">Quero Adotar</button>
                                            </div>
                                            <small class="text-muted"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
