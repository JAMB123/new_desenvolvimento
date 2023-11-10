@extends('sistema.layout')
@section('title', 'JAMB')
@section('content')
    <div class="row">
        <div class="col-sm-8" style="">
            <p class="h1 text-start" id="index-titulo" style=" font-size: 40px; margin-left: 45px; margin-top: 100px"><b>Bem-vindo ao Cepetz!</b></p>
            <p class="h6 text-start" style="font-size: 25px; margin-left: 45px; margin-bottom: 80px"><b>Nesta seção, você tem acesso aos animais que ainda estão esperando
            por um lar!</b></p>
            <p class="h6 text-start" style="font-size: 25px; margin-left: 45px; margin-bottom: 80px; color: #808080"><b>O site possui uma seção para anunciar os pets que estão a espera de um lar.
                 Caso você clique na imagem do animal, é apresentada mais informações sobre ele, além das suas características. 
                Para adotar, basta clicar no botão de “Quero adotar” que o contato do doador estará 
                a mostra para entrar em contato.</b></p>
        </div>
        <div class="col-sm-4" style="position:relative">
            <img src="{{asset('storage/imagens/animais.png')}}" style="margin-top: 190px; margin-right: 300px; width; 600px; height: 600px" />
        </div>
        <div style="">
        </div>
    </div>
@endsection