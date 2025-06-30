
<section class="seccion-hero">
    <div class="container">
        <h1 class="display-4 mb-4">Bienvenido <?= esc($nombre) ?> a TechNova</h1>
        <p class="lead mb-4">Soluciones tecnológicas innovadoras para el futuro digital</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <h2 class="text-center mb-5">Nuestros Proyectos Destacados</h2>
        <div id="projectCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#projectCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#projectCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#projectCarousel" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://www.bitrix24.es/upload/iblock/5db/1m6ibf7xyqj6h0vg4m918zq3ctpipzml.jpg" class="d-block w-100" alt="Proyecto IA">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Inteligencia Artificial Avanzada</h5>
                        <p>Desarrollo de sistemas de IA para automatización empresarial</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://tekla.io/wp-content/uploads/2022/03/Recurso1.png" class="d-block w-100 h-30" alt="Desarrollo Web">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Aplicaciones Web Modernas</h5>
                        <p>Plataformas web responsivas y escalables</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://londoncg.com/hubfs/Imagenes%20MS%20%28blog%29/Noviembre-2024/En-qu%C3%A9-consisten-los-servicios-de-consultor%C3%ADa-empresarial/en-que-consisten-los-servicios-de-consultoria-empresarial.png" class="d-block w-70 h-70" alt="Consultoría">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Consultoría Tecnológica</h5>
                        <p>Asesoramiento especializado en transformación digital</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</section>
