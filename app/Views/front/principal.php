<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechNova - Soluciones Tecnológicas</title>
    <link rel="icon" href="img/logo.png" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="miestilo.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <div class="container">
            <a class="navbar-brand" href="principal.html">
                <img src="img/logo.png" alt="Logo" width="40" height="40" class="me-2">
                TechNova
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="principal.html">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#quienes">Quiénes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#acerca">Acerca de</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Servicios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Desarrollo Web</a></li>
                            <li><a class="dropdown-item" href="#">Inteligencia Artificial</a></li>
                            <li><a class="dropdown-item" href="#">Consultoría</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Todos los Servicios</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#registro">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#login">Login</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar servicios..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- sección hero -->
    <section class="seccion-hero">
        <div class="container">
            <h1 class="display-4 mb-4">Bienvenido a TechNova</h1>
            <p class="lead mb-4">Soluciones tecnológicas innovadoras para el futuro digital</p>
            <button class="btn btn-light btn-lg me-3">Conocer Más</button>
            <button class="btn btn-outline-light btn-lg">Contactanos</button>
        </div>
    </section>

    <!-- servicios -->
    <section class="seccion-espaciada bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Nuestros Servicios</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card tarjeta-servicio h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-robot fa-3x text-success mb-3"></i>
                            <h5 class="card-title">Inteligencia Artificial</h5>
                            <p class="card-text">Desarrollo de sistemas de IA personalizados para optimizar procesos empresariales y mejorar la toma de decisiones.</p>
                            <button class="btn boton-personalizado">Más Info</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card tarjeta-servicio h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-code fa-3x text-success mb-3"></i>
                            <h5 class="card-title">Desarrollo Web</h5>
                            <p class="card-text">Creación de aplicaciones web modernas, responsivas y escalables utilizando las últimas tecnologías.</p>
                            <button class="btn boton-personalizado">Más Info</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card tarjeta-servicio h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-chart-line fa-3x text-success mb-3"></i>
                            <h5 class="card-title">Consultoría</h5>
                            <p class="card-text">Asesoramiento estratégico en transformación digital y adopción de nuevas tecnologías.</p>
                            <button class="btn boton-personalizado">Más Info</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- quiénes somos -->
    <section id="quienes" class="seccion-espaciada">
        <div class="container">
            <h2 class="text-center mb-5">Quiénes Somos</h2>
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <h3>Nuestra Historia</h3>
                    <p>TechNova nació en 2025 durante el cursado del programa de Talentos Digitales buscando convertirnos en referentes en soluciones de IA y desarrollo web.</p>
                    <p>TechNova tiene un enfoque orientado a soluciones innovadoras para los clientes, buscando elevar el potencial de cada negocio con modelos de IA y Machine Learning.</p>
                </div>
                <div class="col-lg-6">
                    <img src="img/ia_img.jpg" class="img-fluid rounded" alt="Equipo TechNova">
                </div>
            </div>
        </div>
    </section>

    <!-- acerca de -->
    <section id="acerca" class="seccion-espaciada bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Acerca de TechNova</h2>
            <div class="row">
                <div class="col-lg-8">
                    <h3>¿Qué Hacemos?</h3>
                    <p>En TechNova nos especializamos en tres áreas principales:</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-success me-2"></i><strong>Desarrollo de Software:</strong> Aplicaciones web y móviles personalizadas</li>
                        <li><i class="fas fa-check text-success me-2"></i><strong>Inteligencia Artificial:</strong> Sistemas de ML y análisis predictivo</li>
                        <li><i class="fas fa-check text-success me-2"></i><strong>Consultoría Tecnológica:</strong> Estrategias de transformación digital</li>
                    </ul>
                    
                    <h3 class="mt-4">Nuestra Ubicación</h3>
                    <p><i class="fas fa-map-marker-alt text-success me-2"></i>Av. Laprida, Ciudad de Corrientes, Argentina</p>
                    <p><i class="fas fa-phone text-success me-2"></i>+54 379 5052909</p>
                    <p><i class="fas fa-envelope text-success me-2"></i>info@technova.com.ar</p>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Contacto Rápido</h5>
                            <form>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Tu nombre" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Tu email" required>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="3" placeholder="Tu mensaje"></textarea>
                                </div>
                                <button type="submit" class="btn btn-success w-100">Enviar Mensaje</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- registro -->
    <section id="registro" class="seccion-espaciada">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h3 class="card-title mb-0 text-center">Registrarse</h3>
                        </div>
                        <div class="card-body">
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="apellido" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" id="apellido" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="telefono" class="form-label">Teléfono</label>
                                    <input type="tel" class="form-control" id="telefono">
                                </div>
                                <div class="col-md-6">
                                    <label for="empresa" class="form-label">Empresa</label>
                                    <input type="text" class="form-control" id="empresa">
                                </div>
                                <div class="col-md-6">
                                    <label for="sector" class="form-label">Sector</label>
                                    <select class="form-select" id="sector">
                                        <option selected>Seleccionar sector...</option>
                                        <option value="tecnologia">Tecnología</option>
                                        <option value="salud">Salud</option>
                                        <option value="educacion">Educación</option>
                                        <option value="finanzas">Finanzas</option>
                                        <option value="retail">Retail</option>
                                        <option value="otro">Otro</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="password" required>
                                </div>
                                <div class="col-12">
                                    <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
                                    <input type="password" class="form-control" id="confirmPassword" required>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="terminos" required>
                                        <label class="form-check-label" for="terminos">
                                            Acepto los términos y condiciones
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success me-2">Registrarse</button>
                                    <button type="reset" class="btn btn-outline-secondary">Limpiar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- formulario login -->
    <section id="login" class="seccion-espaciada bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h3 class="card-title mb-0 text-center">Iniciar Sesión</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="loginEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="loginEmail" required>
                                </div>
                                <div class="mb-3">
                                    <label for="loginPassword" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="loginPassword" required>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="recordar">
                                    <label class="form-check-label" for="recordar">
                                        Recordar sesión
                                    </label>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-success">Iniciar Sesión</button>
                                    <button type="button" class="btn btn-outline-secondary">¿Olvidaste tu contraseña?</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="pie-pagina">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5>TechNova</h5>
                    <p>Soluciones tecnológicas innovadoras para el futuro digital. Transformamos ideas en realidad digital.</p>
                    <div class="social-links">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6>Servicios</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white-50">Desarrollo Web</a></li>
                        <li><a href="#" class="text-white-50">Inteligencia Artificial</a></li>
                        <li><a href="#" class="text-white-50">Consultoría</a></li>
                        <li><a href="#" class="text-white-50">Soporte</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6>Empresa</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white-50">Acerca de</a></li>
                        <li><a href="#" class="text-white-50">Equipo</a></li>
                        <li><a href="#" class="text-white-50">Carreras</a></li>
                        <li><a href="#" class="text-white-50">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h6>Suscríbete a nuestro newsletter</h6>
                    <p class="text-white-50">Recibe las últimas noticias sobre tecnología e innovación.</p>
                    <form class="d-flex">
                        <input type="email" class="form-control me-2" placeholder="Tu email">
                        <button class="btn btn-outline-light" type="submit">Suscribir</button>
                    </form>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2025 TechNova. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    

</body>
</html>