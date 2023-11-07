<nav class="navbar flex-column flex-sm-row navbar-expand-lg" id="linhaca">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <hr>
    <a class="navbar-brand" href="/">
    <img src="{{asset('storage/imagens/logo.png')}}" style=" justfycontent: center; width: 70px" />
    <p class="h4 text-start" style="color: #2B1998; font-size: 20px; margin-left: 12px; font-weight: bolder;">Cepetz</p>
    </a>
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto flex-column flex-sm-row">
        </ul>
        <a href="{{route('index')}}">
                <button class="btn my-2 my-sm-0"; id = "botaoo" type="submit" style="margin-right: 15px; margin-left: 15px">Página inicial</button>
               </a>
        <a href="{{route('login')}}">
            <button class="btn my-2 my-sm-0"; id = "botaoo" type="submit" style="margin-right: 15px; margin-left: 15px">Login</button>
        </a>
        <a href="{{route('register')}}">
            <button class="btn my-2 my-sm-0"; id = "botaoo" type="submit" style="margin-right: 15px; margin-left: 15px">Cadastrar</button>
        </a>
        <a href="/favoritos">
          <button class="btn my-2 my-sm-0"; id= "botaoo" type="submit" style="margin-right: 15px">Favoritos</button>
        </a>
        <a href="/cadastros/cadastrar">
                <button class="btn my-2 my-sm-0"; id= "botaoo" type="submit" style="margin-right: 15px; margin-left: 15px">Cadastrar Animal</button>
               </a>
        <a href="/sobre">
                <button class="btn my-2 my-sm-0"; id= "botaoo" type="submit" style="margin-right: 15px; margin-left: 15px">Sobre nós</button>
               </a>
        <a href="/cadastros/lista">
          <button class="btn my-2 my-sm-0"; id= "botaoo" type="submit" style="margin-right: 15px">Lista Adoções</button>
        </a>
      </div>

</nav>   

