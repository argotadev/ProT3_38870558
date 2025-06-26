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

                        <!-- mensaje de éxito -->
                        <?php if (session()->getFlashdata('success')) : ?>
                            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                        <?php endif; ?>

                        <!-- mensaje de error -->
                        <?php if (session()->getFlashdata('error')) : ?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                        <?php endif; ?>

                        <!-- errores de validación -->
                        <?php if (isset($validation)) : ?>
                            <div class="alert alert-danger">
                                <?= $validation->listErrors() ?>
                            </div>
                        <?php endif; ?>

                        <!-- formulario con acción -->
                        <form action="<?= base_url('usuario_controller/FormValidation') ?>" method="post" class="row g-3">
                            <?= csrf_field() ?>

                            <div class="col-md-6">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" name="nombre" class="form-control" id="nombre" 
                                       value="<?= old('nombre') ?>" required>
                                <?php if (isset($validation) && $validation->hasError('nombre')): ?>
                                    <div class="text-danger"><?= $validation->getError('nombre') ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" name="apellido" class="form-control" id="apellido" 
                                       value="<?= old('apellido') ?>" required>
                                <?php if (isset($validation) && $validation->hasError('apellido')): ?>
                                    <div class="text-danger"><?= $validation->getError('apellido') ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" 
                                       value="<?= old('email') ?>" required>
                                <?php if (isset($validation) && $validation->hasError('email')): ?>
                                    <div class="text-danger"><?= $validation->getError('email') ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="tel" name="telefono" class="form-control" id="telefono" 
                                       value="<?= old('telefono') ?>">
                                <?php if (isset($validation) && $validation->hasError('telefono')): ?>
                                    <div class="text-danger"><?= $validation->getError('telefono') ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <label for="empresa" class="form-label">Empresa</label>
                                <input type="text" name="empresa" class="form-control" id="empresa" 
                                       value="<?= old('empresa') ?>">
                                <?php if (isset($validation) && $validation->hasError('empresa')): ?>
                                    <div class="text-danger"><?= $validation->getError('empresa') ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <label for="sector" class="form-label">Sector</label>
                                <select name="sector" class="form-select" id="sector">
                                    <option value="">Seleccionar sector...</option>
                                    <option value="tecnologia" <?= old('sector') == 'tecnologia' ? 'selected' : '' ?>>Tecnología</option>
                                    <option value="salud" <?= old('sector') == 'salud' ? 'selected' : '' ?>>Salud</option>
                                    <option value="educacion" <?= old('sector') == 'educacion' ? 'selected' : '' ?>>Educación</option>
                                    <option value="finanzas" <?= old('sector') == 'finanzas' ? 'selected' : '' ?>>Finanzas</option>
                                    <option value="retail" <?= old('sector') == 'retail' ? 'selected' : '' ?>>Retail</option>
                                    <option value="otro" <?= old('sector') == 'otro' ? 'selected' : '' ?>>Otro</option>
                                </select>
                                <?php if (isset($validation) && $validation->hasError('sector')): ?>
                                    <div class="text-danger"><?= $validation->getError('sector') ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="col-12">
                                <label for="pass" class="form-label">Contraseña</label>
                                <input type="password" name="pass" class="form-control" id="pass" required>
                                <?php if (isset($validation) && $validation->hasError('pass')): ?>
                                    <div class="text-danger"><?= $validation->getError('pass') ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="col-12">
                                <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
                                <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" required>
                                <?php if (isset($validation) && $validation->hasError('confirmPassword')): ?>
                                    <div class="text-danger"><?= $validation->getError('confirmPassword') ?></div>
                                <?php endif; ?>
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


<!-- registro 
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
-->