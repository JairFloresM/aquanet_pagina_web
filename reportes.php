<?php

require_once("middlewares/get_all_reports.php");

?>


<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Reportes</h1>

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
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Distrito</th>
                            <th>Corregimiento</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Distrito</th>
                            <th>Corregimiento</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($reports as $report) {    ?>
                            <tr>
                                <td><?= $report['Nombre'] ?> </td>
                                <td><?= $report['Apellido']  ?> </td>
                                <td><?= $report['correo']  ?> </td>
                                <td><?= $report['distrito']  ?> </td>
                                <td><?= $report['corregimiento']  ?> </td>
                                <td><?= $report['ano'] . '/' . $report['mes'] . '/' . $report['dia']   ?> </td>
                                <td>
                                    <a class="btn btn-success btn-sm  reports_btn" href="middlewares/page_manager.php?page=unico_reporte&id_consultar=<?= $report['id'] ?> ">Revisar</a>

                                    <!-- <a href="#" class="btn btn-danger btn-sm">Borrar</a> -->
                                </td>
                            </tr>

                        <?php }  ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>