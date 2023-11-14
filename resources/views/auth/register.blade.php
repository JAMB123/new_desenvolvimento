@extends('sistema.layout')
@section('content')
    <div class="containerCadastro">
        <div class="col-sm-12" style="background-color: #fffff" style="width: auto; height: 400px">
            <div class="container">
                <p class="h4 text-center" style="color: #2B1998; margin-top: 20px; font-size: 60px"><b>Cadastre-se </b></p>
                <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <img src="{{ asset('storage/imagens/boneco.svg') }}" />
                            <label for="firstName" class="form-label">Nome</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="firstName"
                                placeholder="Nome" value="{{ old('name') }}" name="name" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <img src="{{ asset('storage/imagens/boneco.svg') }}" />
                            <label for="lastName" class="form-label">Sobrenome</label>
                            <input type="text" class="form-control @error('sobrename') is-invalid @enderror"
                                id="lastName" placeholder="Sobrenome" name="sobrename" value="{{ old('sobrename') }}"
                                required>
                            @error('sobrename')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="username" class="form-label">Nome de usuário</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    id="username" placeholder="Username" name="username" value="{{ old('username') }}"
                                    required>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>

                            <div class="col-12">
                                <img src="{{ asset('storage/imagens/email.svg') }}" />
                                <label for="email" class="col-md-4 col-form-label text-md-end"
                                    name="email">Email</label>
                                <div class="col-md-6">
                                    <input name="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" id="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="nome@exemplo.com">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="col-sm-6">
                            <img src="{{ asset('storage/imagens/cpf.png') }}" />
                            <label for="CPF" class="form-label">CPF</label>
                            <input type="text" class="form-control @error('CPF') is-invalid @enderror" id="CPF"
                                placeholder="999.999.999-99" value="{{ old('CPF') }}" name="CPF" required>
                            @error('CPF')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <br>
                        <div class="col-sm-6">
                            <img src="{{ asset('storage/imagens/telefone.png') }}" />
                            <label for="telefone" class="form-label">Telefone/Celular</label>
                            <input id="telefone" type="text" class="telmask telefone form-control @error('telefone') is-invalid @enderror"
                                placeholder="+99(99)99999-9999" name="telefone" value="{{ old('telefone') }}" required>
                            @error('telefone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <img src="{{ asset('storage/imagens/telefone.png') }}" />
                            <label for="endereco" class="form-label">Endereço</label>
                            <input id="endereco" type="text" class="form-control @error('endereco') is-invalid @enderror"
                                placeholder="R. do Jamb, 123, Bairro da Adoção" name="endereco" value="{{ old('endereco') }}" required>
                            @error('endereco')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <br>
                        <div class="col-6">
                            <img src="{{ asset('storage/imagens/chaves.png') }}" />
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password" placeholder="Senha" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="col-6">
                            <img src="{{ asset('storage/imagens/chaves.png') }}" />
                            <label for="confirm-password" class="form-label">Confirmar
                                Senha</label>
                            <input type="password" class="form-control" id="confirm-password"
                                name="password_confirmation" placeholder="Confirmar Senha">
                        </div>
                        <br>
                        <br>
                        <div class="col-6">
                            <td><button class="btn btn-primary my-2 my-sm-0"; id="botaocad" type="submit"
                                    style="margin-right: 15px">{{ __('Cadastrar') }}</button></td>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('javascript')
    <script type="module">
        $().ready(function() {
            let telmask = new Inputmask('+99(99)99999-9999')
            telmask.mask(".telmask");
        });
    </script>
@endsection
