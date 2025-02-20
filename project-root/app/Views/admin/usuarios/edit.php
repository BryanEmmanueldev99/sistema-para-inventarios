<!doctype html>
<html lang="en">
    <head>
        <title>Actuliar a <?= $usuario['nombre'] ?></title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main class="container">

        <h2 class="mb-2">Editar a <?= $usuario['nombre'] ?></h2>


            <form action="<?= site_url('/usuarios/edit/'.$usuario['usuario_id']) ?>" method="POST">
                <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input
                        type="text"
                        name="nombre"
                        id="nombre"
                        class="form-control"
                        placeholder=""
                        value="<?= $usuario['nombre'] ?>"
                    />
                </div>
                
                <div class="mb-3">
                    <label for="" class="form-label">Correo</label>
                    <input
                        type="text"
                        name="email"
                        id="email"
                        class="form-control"
                        placeholder=""
                       value="<?= $usuario['email'] ?>"
                    />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Contraseña</label>
                    <input
                        type="password"
                        name="usuario_pass"
                        id="usuario_pass"
                        class="form-control"
                        placeholder="*****"
                    />
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary">Confirmar</button>
                    <a href="<?= site_url('/usuarios') ?>" class="btn btn-primary">Regresar</a>
                </div>
            </form>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
