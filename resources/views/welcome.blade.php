@extends('sistema.layout')
@section('title', 'JAMB')
@section('content')
    <div class="row">
        <div class="col-sm-8" style="">
            <p class="h1 text-start" id="index-titulo" style=" font-size: 40px; margin-left: 45px; margin-top: 100px"><b>Bem-vindo ao Cepetz!</b></p>
            <p class="h6 text-start" style="font-size: 25px; margin-left: 45px; margin-bottom: 80px"><b>Neste site você encontra uma forma mais rápida e prática para adotar um animal de estimação.</b></p>
            <p class="h6 text-start" style="font-size: 25px; margin-left: 45px; margin-bottom: 80px; color: #808080"><b>O site possui uma seção para anunciar os animais que estão a espera de um lar.
                 No perfil do animal, é apresentado mais informações sobre ele, além das suas características. 
                Para adotar, basta clicar no botão de “Quero adotar”, o contato do doador estará 
                a mostra para entrar em contato.</b></p>
        </div>
        <img src="{{asset('storage/imagens/homecapa.png')}}" style="width: 400px; margin-top: 300px; margin-left: 200px"/>
        </div>
    </div>
@endsection