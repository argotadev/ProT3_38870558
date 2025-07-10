<!-- navbar -->
<?php
    $session = session();
    $nombre = $session->get('nombre');
    $perfil = $session->get('perfil_id');
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('index') ?>">
            <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo" width="40" height="40" class="me-2">
            TechNova
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('index') ?>">Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('quienes_somos') ?>">Quiénes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('acercade') ?>">Acerca de</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Servicios
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url('servicios/web') ?>">Desarrollo Web</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('servicios/ia') ?>">Inteligencia Artificial</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('servicios/consultoria') ?>">Consultoría</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?= base_url('servicios') ?>">Todos los Servicios</a></li>
                    </ul>
                </li>

                <?php if (!$perfil): ?>
                    <!-- No autenticado -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('registro') ?>">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
                    </li>
                <?php endif; ?>

                <?php if ($perfil == 1): ?>
                    <!-- Administrador -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/panel') ?>">Panel Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/usuarios') ?>">Gestión Usuarios</a>
                    </li>
                <?php elseif ($perfil == 2): ?>
                    <!-- Cliente -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('cliente/perfil') ?>">Mi Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('cliente/servicios') ?>">Mis Servicios</a>
                    </li>
                <?php endif; ?>
            </ul>

            <div class="d-flex align-items-center">
                <?php if ($perfil): ?>
                    <span class="navbar-text text-white me-3">
                        <i class="fas fa-user-circle"></i>
                        <?= esc($nombre) ?> (<?= $perfil == 1 ? 'Administrador' : 'Cliente' ?>)
                    </span>
                    <a href="<?= base_url('logout') ?>" class="btn btn-outline-light">Salir</a>
                <?php endif; ?>

                <form class="d-flex ms-3" role="search" action="<?= base_url('buscar') ?>" method="get">
                    <input class="form-control me-2" type="search" name="q" placeholder="Buscar servicios..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
