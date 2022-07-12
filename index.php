<?php include("bd.php") ?>
<?php include("includes/header.php") ?>

        <h1 class="text-center m-3 p-3">CRUD Realizado con PHP puro</h1>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <form>
                        <div class="mb-3">
                            <label for="inputname" class="form-label">Nombre</label>
                            <input type="email" class="form-control" id="inputname" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="inputEmail1" class="form-label">Direccion de Correo Electrico</label>
                            <input type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">su correo no sera conpartido con nadie jamas.</div>
                        </div>
                        <button type="submit" class="btn btn-success">enviar</button>
                    </form>
                </div>
                <div class="col-8">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>rufina</td>
                                <td>rufina@mail</td>
                                <td>
                                    <div class="btn btn-warning">Modificar</div>
                                    <div class="btn btn-danger">Eliminar</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<?php include("includes/footer.php")?>