
<header>
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Rep'Bike</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Vente de pièces </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"> Demande de réparation </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"> Conseil </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                            <?php echo $_SESSION['USR_name'] ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Page 1 Profil</a>
                            <a href="#" class="dropdown-item">Page 2 Profil</a>
                            <div class="dropdown-divider"></div>
                            <a href="index.php?page=deconnect" class="dropdown-item">Déconnexion</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>    
</header>