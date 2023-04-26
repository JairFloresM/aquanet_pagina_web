<?php

require_once("middlewares/get_all_users.php");

?>


<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Usuarios</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <div class="mb-3 fs-5">
        <a class="btn btn-success btn-lg" id="new_user" href="middlewares/close_session.php" data-toggle="modal" data-target="#insertModal">
            <i class="fas fa-plus text-gray-400"></i>
            Nuevo Usuario
        </a>
    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Role</th>
                            <th>Acciones</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Role</th>
                            <th>Acciones</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($reports as $report) {    ?>
                            <tr>
                                <td><?= $report['username'] ?> </td>
                                <td><?= $report['password']  ?> </td>
                                <td><?= $report['userrole']  ?> </td>
                                <td>
                                    <form>
                                        <input type="hidden" name="id" value="<?= $report['id'] ?>">
                                    </form>

                                    <a class="btn btn-success btn-sm btn-edit-user" data-toggle="modal" data-target="#editUser">
                                        Editar
                                    </a>

                                    <a href="#" class="btn btn-danger btn-sm btn-delete-user" data-toggle="modal" data-target="#deleteUser">Borrar</a>
                                </td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <!-- Logout Modal-->
    <div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-3" id="exampleModalLabel">Editar Usuario</h1>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="middlewares/user/edit_user.php" method="post" id="user_edit">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Usuario:</label>
                            <input type="text" name="username" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Contraseña:</label>
                            <input type="text" name="password" class="form-control" id="recipient-name">
                        </div>

                        <input type="hidden" name="id" value="">

                        <div class="mb-3">
                            <label for="type_user" class="col-form-label">Tipo de Usuario:</label>

                            <select class="form-select" id="type_user" name="role" aria-label="Default select example">
                                <option selected>tipo usuario</option>
                                <option value="a">Admin</option>
                                <option value="v">Solo vista</option>
                            </select>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <!-- Logout Modal-->
    <div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-1" id="exampleModalLabel">¿Está seguro que desea eliminar este usuario?</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="middlewares/user/delete_user.php" method="post" id="user_delete">

                        <h4>Usuario: <span id="nombre_delete"></span></h4>

                        <input type="hidden" name="id" value="">

                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <!-- Logout Modal-->
    <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-3" id="exampleModalLabel">Nuevo Usuario</h1>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="middlewares/user/new_user.php" method="post" id="user_create">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Usuario:</label>
                            <input type="text" name="username" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Contraseña:</label>
                            <input type="text" name="password" class="form-control" id="recipient-name">
                        </div>

                        <div class="mb-3">
                            <label for="type_user" class="col-form-label">Tipo de Usuario:</label>

                            <select class="form-select" id="type_user" name="role" aria-label="Default select example">
                                <option selected>tipo usuario</option>
                                <option value="a">Admin</option>
                                <option value="v">Solo vista</option>
                            </select>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


</div>