<?php if (session()->get('perfil_id') == 1): ?>
    <div class="welcome-section">
        <h2 class="welcome-title">¡Bienvenido Administrador!</h2>
        <p class="welcome-subtitle">Has iniciado sesión como administrador</p>
        <div class="status-badge">
            <i class="fas fa-user-shield"></i>
            Sesión Administrador Activa
        </div>
    </div>
    <div class="admin-panel">
        <div class="dashboard-card">
            <div class="card-header">
                <div class="card-icon">
                    <i class="fas fa-users-cog"></i>
                </div>
                <h3 class="card-title">Panel de Administración</h3>
            </div>
            <p class="card-description">
                Gestiona usuarios, configura el sistema y revisa estadísticas globales.
            </p>
            <a href="/panel_admin" class="card-action">
                Ir al Panel de Administración <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        <!-- Puedes agregar más tarjetas o acciones de administrador aquí -->
    </div>
    <div class="action-buttons">
        <!-- <form action="<?= base_url('login_controller/logout') ?>" method="post" style="display:inline;">
            <button type="submit" class="btn btn-logout">
                <i class="fas fa-sign-out-alt"></i>
                Cerrar Sesión
            </button>
        </form> -->
    </div>
<?php elseif (session()->get('perfil_id') == 2): ?>
    <div class="welcome-section">
        <h2 class="welcome-title">¡Bienvenido!</h2>
        <p class="welcome-subtitle">Has iniciado sesión</p>
        <div class="status-badge">
            <i class="fas fa-check-circle"></i>
            Sesión Activa
        </div>
    </div>

    <div class="quick-stats">
        <div class="stat-card">
            <div class="stat-number">24</div>
            <div class="stat-label">Días Activo</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">12</div>
            <div class="stat-label">Acciones Realizadas</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">98%</div>
            <div class="stat-label">Rendimiento</div>
        </div>
    </div>

    <div class="dashboard-grid">
        <div class="dashboard-card">
            <div class="card-header">
                <div class="card-icon">
                    <i class="fas fa-user-circle"></i>
                </div>
                <h3 class="card-title">Mi Perfil</h3>
            </div>
            <p class="card-description">
                Gestiona tu información personal, actualiza tus datos y configura tus preferencias de cuenta.
            </p>
            <a href="#" class="card-action">
                Ver perfil <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <div class="dashboard-card">
            <div class="card-header">
                <div class="card-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="card-title">Estadísticas</h3>
            </div>
            <p class="card-description">
                Consulta tus métricas, analiza tu progreso y obtén insights detallados sobre tu actividad.
            </p>
            <a href="#" class="card-action">
                Ver estadísticas <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <div class="dashboard-card">
            <div class="card-header">
                <div class="card-icon">
                    <i class="fas fa-cog"></i>
                </div>
                <h3 class="card-title">Configuración</h3>
            </div>
            <p class="card-description">
                Personaliza tu experiencia, ajusta las notificaciones y configura los ajustes de seguridad.
            </p>
            <a href="#" class="card-action">
                Ir a configuración <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>

    <div class="action-buttons">
        <a href="#" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Nuevo Proyecto
        </a>
        <a href="#" class="btn btn-outline">
            <i class="fas fa-folder-open"></i>
            Mis Archivos
        </a>
        <!-- <form action="<?= base_url('login_controle/logout') ?>" method="post" style="display:inline;">
            <button type="submit" class="btn btn-logout">
                <i class="fas fa-sign-out-alt"></i>
                Cerrar Sesión
            </button>
        </form> -->
    </div>
<?php endif; ?>