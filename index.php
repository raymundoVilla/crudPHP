<?php include('./template/header.php')?>

        <h1>Crud Realizado con PHP crudo</h1>

        <!-- formulario -->
       <div class="container d-flex">
        <div class="container">
            <form action="" method="post">
                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text"
                    class="form-control" name="nombre" id="nombre" placeholder="ingrsa tu nombre">
                </div>
                <div class="form-group">
                  <label for="apellido">Apellido</label>
                  <input type="text"
                    class="form-control" name="apellido" id="apellido" placeholder="ingresa tu apellido">
                </div>
                <div class="form-group">
                  <label for="correo">Correo</label>
                  <input type="text"
                    class="form-control" name="correo" id="correo" placeholder="Ingresa tu correo">
                </div>
                <button type="submit" class="btn btn-success">Crear</button>
            </form>
        </div>
        <!-- end formulario -->

        <!-- tabla de datos -->
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>nombre</th>
                        <th>apellido</th>
                        <th>correo</th>
                        <th>acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">raymundo</td>
                        <td>villanueva</td>
                        <td>algo@mail.com</td>
                        <td><button type="button" class="btn btn-warning">modificar</button></td>
                        <td><button type="button" class="btn btn-danger">eliminar</button></td>

                    </tr>
                    <tr>
                        <td scope="row">rufina</td>
                        <td>villanueva</td>
                        <td>rufina@mail.com</td>
                        <td><button type="button" class="btn btn-warning">modificar</button></td>
                        <td><button type="button" class="btn btn-danger">eliminar</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- end table de datos -->
        </div>

        <?php include('./template/footer.php');?>