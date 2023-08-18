<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 border p-4">
            <h2 class="text-center mb-4 text-primary">Inicio de sesión</h2>
            <form>
                <div class="mb-3">
                    <label for="usu_catalogo" class="form-label">Catálogo</label>
                    <input type="number" class="form-control" id="usu_catalogo" name="usu_catalogo">
                </div>
                <div class="mb-3">
                    <label for="usu_password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="usu_password" name="usu_password">
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary" type="submit">Iniciar sesión</button>
                </div>
            </form>
            <div class="text-center mt-4">
                <p class="mb-0">¿No tiene una cuenta? <a href="/login/registro" class="text-primary fw-bold">Regístrese
                        aquí</a></p>
            </div>
        </div>
        <script src="<?= asset('./build/js/login/index.js') ?>"></script>
    </div>
</div>