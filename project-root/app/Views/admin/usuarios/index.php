
<!doctype html>
<html lang="en">
    <head>
        <title>Todos los usuarios</title>
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
        <main>
            <h2 class="mb-3">Todos los usuarios</h2>


            <a href="<?= site_url('/usuarios/create') ?>" class="btn btn-success mb-2">Agregar usuario</a>

            <div class="message mt-3 mb-3">
            <?php  if(session('success')) :  ?>
                     <div
                        class="alert alert-success alert-dismissible fade show"
                        role="alert"
                     >
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"
                            aria-label="Close"
                        ></button>
                        <strong>¡Bien! </strong> <?= session('success') ?>
                     </div>
                     
                     <script>
                        var alertList = document.querySelectorAll(".alert");
                        alertList.forEach(function (alert) {
                            new bootstrap.Alert(alert);
                        });
                     </script>
                     
            <?php  endif; ?>
            </div>
            <div
                class="table-responsive"
            >
                <table
                    class="table table-primary"
                >
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($listarUsuarios)): ?>
                            <?php  foreach($listarUsuarios as $key): ?>
                           <tr class="">
                             <td scope="row"><?= $key['nombre'] ?></td>
                             <td><?= $key['email'] ?></td>
                             <td>
                              <a href="<?= base_url('usuarios/edit/'.$key['usuario_id']) ?>" class="btn btn-primary btn-sm">Editar  </a>
                               <form 
                                action="<?= base_url('usuarios/destroy/'.$key['usuario_id']) ?>" method="POST">
                                <button type="submit" class="btn btn-primary">Borrar</button>
                              </form>
                             </td>
                           </tr>
                         <?php  endforeach; ?>
                        <?php else: ?>
                            <td scope="row" colspan="4"><p>Sin usuarios existentes.</p></td>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            
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
