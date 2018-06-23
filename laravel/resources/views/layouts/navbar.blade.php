<nav class="navbar navbar-expand navbar-dark bg-danger">
    <div class="navbar-brand">
        <a href="#" class="text-light">Daily Sales Report</a>
    </div>
    <ul class="nav navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('makeReport') }}">Buat Laporan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('report') }}">Lihat Laporan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('recipe') }}">Data Produk</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('showRecipeForm') }}">Tambah Data Produk</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        <li class="nav-item dropdown mr-3">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a href="{{ route('permissions.index') }}" class="dropdown-item">Setup Permission</a>
                <a href="{{ route('roles.index') }}" class="dropdown-item">Setup Role</a>
                <a href="{{ route('users.index') }}" class="dropdown-item">Setup User</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
