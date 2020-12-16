<div class="sidebar" data-color="purple" data-background-color="danger">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="" class="simple-text logo-normal">
            <img src="{{ asset('images/logo-box.png') }}" width="150" class="rounded mx-auto d-block" alt="...">
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="material-icons text-primary">dashboard</i>
                    <p>Painel</p>
                </a>
            </li>
            <hr>
            <h6 class="text-center roboto-condensed">Estoque</h6>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('cad.estoque') }}">
                    <i class="material-icons text-primary">add_circle</i>
                    <p>Cadastro</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('estoque.farmacia') }}">
                    <i class="material-icons text-primary">local_pharmacy</i>
                    <p>Farmacia</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('estoque.almoxarifado') }}">
                    <i class="material-icons text-primary">all_inbox</i>
                    <p>Almoxarifado</p>
                </a>
            </li>
            <hr>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('compras.ordens') }}">
                    <i class="material-icons text-primary">local_mall</i>
                    <p>Compras</p>
                </a>
            </li>
            <hr>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('cad.estoque') }}">
                    <i class="material-icons text-primary">report</i>
                    <p>Relatório</p>
                </a>
            </li>
            <hr>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('cad.estoque') }}">
                    <i class="material-icons text-primary">present_to_all</i>
                    <p>Distribuição</p>
                </a>
            </li>
            <hr>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('cad.estoque') }}">
                    <i class="material-icons text-primary">share</i>
                    <p>Setores</p>
                </a>
            </li>
            <hr>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('cad.estoque') }}">
                    <i class="material-icons text-primary">people</i>
                    <p>Fornecedores</p>
                </a>
            </li>
            <hr>
            <li class="nav-item ">
                <a class="nav-link" href="">
                    <i class="material-icons"></i>
                    <p></p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('realizar.logout') }}">
                    <i class="material-icons"></i>
                    <p></p>
                </a>
            </li>
        </ul>
    </div>
</div>
