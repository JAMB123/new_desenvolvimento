@extends('sistema.layout')
@section('title', 'JAMB')
@section('content')


    <div class="containerCadastro">
        <div class="col-sm-12" style="background-color: #fffff" style="width: auto; height: 400px">
            <div class="container">
                <p class="h4 text-center" style="color: #2B1998; margin-top: 20px; font-size: 60px"><b>Cadastrar Animal</b>
                </p>
                <form method="POST" action="{{ route('gravaNovoCadastro') }}" id=""enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <img src="{{ asset('storage/imagens/pata.png') }}" />
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="nome" placeholder="Nome" required>
                        </div>

                        <div class="col-sm-6">
                            <img src="{{ asset('storage/imagens/osso.png') }}" />
                            <label for="idade" class="form-label">Idade</label>
                            <input type="number" class="form-control" name="idade" placeholder="Idade" min="0"
                                required>
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <img src="{{ asset('storage/imagens/pata.png') }}" />
                            <label for="raca" class="form-label">Raça</label>
                            <input type="text" class="form-control" name="raca" placeholder="Raça" required>
                        </div>
                        <br>
                        <br>
                        <div class="col-sm-6">
                            <img src="{{ asset('storage/imagens/catioro.png') }}" />
                            <label for="especie" class="form-label">Espécie</label>
                            <select class="form-select" name="especie" required>
                                <option value="">Selecione a Espécie...</option>
                                <option>Cachorro</option>
                                <option>Gato</option>
                                <option>Passáro</option>
                            </select>
                        </div>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <img src="{{ asset('storage/imagens/sexos .png') }}" />
                                <label for="sexo" class="form-label">Sexo</label>
                                <select class="form-select" name="sexo" required>
                                    <option value="">Selecione o Sexo...</option>
                                    <option>Macho</option>
                                    <option>Fêmea</option>
                                </select>
                                <br>
                                <div class="col-sm-6">
                                    <img src="{{ asset('storage/imagens/sexos .png') }}" />
                                    <label for="porte" class="form-label">Porte</label>
                                    <select class="form-select" name="porte" required>
                                        <option value="">Selecione o Porte...</option>
                                        <option>Pequeno</option>
                                        <option>Médio</option>
                                        <option>Grande</option>
                                    </select>
                                </div>
                                <br>
                                <div class="col-6">
                                    <img src="{{ asset('storage/imagens/sobre.png') }}" />
                                    <label for="sobre" class="form-label">Sobre</label>
                                    <td><textarea name="sobre" id="sobre" max="255" rows="5" cols="40" placeholder="Sobre..."></textarea></td>
                                </div>
                                <br>
                                <div class="col-6">
                                    <img src="{{ asset('storage/imagens/pata.png') }}" />
                                    <label for="arquivo" class="form-label">Imagem</label>
                                    <input type="file" name="arquivo" name="arquivo">
                                </div>
                                <br>
                                <br>
                                <tr>
                                    <td colspan="2">
                                    <td><a href="/">
                                        <input type="hidden" name="user_id" value="{{Auth::User()->id}}">
                                            <button onclick="window.location.href='/';"
                                                class="btn btn-primary my-2 my-sm-0"; id= "botaocads" type="button"
                                                style="margin-right: 15px">Cancelar</button>
                                        </a>
                                    </td>
                                    </td>
                                    <td><button class="btn btn-primary my-2 my-sm-0"; id="botaocad" type="submit"
                                            style="margin-right: 15px">Cadastrar</button></td>
                                </tr>
                </form>
            @endsection
