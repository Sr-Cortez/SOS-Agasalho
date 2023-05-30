<header style="width:100%;">
    <nav class="navbar navbar-expand-lg bg-dark pt-1 pe-4 pb-1 ps-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="./"><img width="60" height="60" src="assets/images/img-header.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item me-lg-4">
                        <a class="nav-link text-light active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item me-lg-4">
                        <a class="nav-link text-light active" aria-current="page" href="/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item me-lg-4">
                        <a class="nav-link text-light" href="cadastrar-doacao">Cadastrar doação</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="cadastrar-instituicao">Cadastrar instituicao</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropup-center position-relative" style="margin-top: 10px;margin-left: 24px;">
                            <span class="dropdown-toggle text-light position-relative" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <a class="text-light rounded-circle bg-secondary" style="padding: 10px 5px 10px 9px">
                                    <?php
                                        $nome_completo = Auth::user()->name;
                                        $n = explode(" ",$nome_completo);
                                        $q = array_reverse($n);
                                        echo trim($n[0][0] . $q[key($q)][0]);
                                    ?>
                                    
                                </a>
                            </span>
                            <ul class="dropdown-menu" style="right:0 !important">
                                <li><a class="dropdown-item" href="#">{{ __('Manage Account') }}</a></li>
                                <li><a class="dropdown-item" href="#">{{ __('Profile') }}</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}" x-data>
                                            @csrf

                                            <x-dropdown-link href="{{ route('logout') }}"
                                                    @click.prevent="$root.submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>