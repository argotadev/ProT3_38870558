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

                        <form action="<?= base_url('login') ?>" method="post"> <!-- ojo acá -->
                            <?= csrf_field() ?>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" 
                                       value="<?= old('email') ?>" required>
                                <?php if (isset($validation) && $validation->hasError('email')): ?>
                                    <div class="text-danger"><?= $validation->getError('email') ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="mb-3">
                                <label for="pass" class="form-label">Contraseña</label>
                                <input type="password" name="pass" class="form-control" id="pass" required>
                                <?php if (isset($validation) && $validation->hasError('pass')): ?>
                                    <div class="text-danger"><?= $validation->getError('pass') ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="recordar" name="recordar" value="1">
                                <label class="form-check-label" for="recordar">
                                    Recordar sesión
                                </label>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success">Iniciar Sesión</button>
                                <a href="<?= base_url('') ?>" class="btn btn-outline-secondary">¿Olvidaste tu contraseña?</a>
                            </div>

                            <div class="text-center mt-3">
                                <p>¿No tienes cuenta? <a href="<?= base_url('') ?>">Regístrate aquí</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>    
    
    <!-- formulario login 
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
-->