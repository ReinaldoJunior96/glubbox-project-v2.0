<div class="sidebar" data-color="danger" data-background-color="white">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="" class="simple-text logo-normal">
            <img src="{{ asset('images/asteroid.png') }}" width="40" class="rounded mx-auto d-block" alt="..."> Glubbox
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Resumo</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('view.estoque.farmacia') }}">
                    <i class="material-icons">local_pharmacy</i>
                    <p>Estoque Farmacêutico</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="">
                    <i class="material-icons">all_inbox</i>
                    <p>Estoque Diversos</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="examples/typography.blade.php">
                    <i class="material-icons">library_books</i>
                    <p>Typography</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="examples/icons.blade.php">
                    <i class="material-icons">bubble_chart</i>
                    <p>Icons</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="examples/map.blade.php">
                    <i class="material-icons">location_ons</i>
                    <p>Maps</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="examples/notifications.blade.php">
                    <i class="material-icons">notifications</i>
                    <p>Notifications</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="examples/rtl.blade.php">
                    <i class="material-icons">language</i>
                    <p>RTL Support</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('realizar.logout') }}">
                    <i class="material-icons">settings_power</i>
                    <p>Sair</p>
                </a>
            </li>
        </ul>
    </div>
</div>
