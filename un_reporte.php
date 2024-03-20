<?php


require_once("middlewares/get_one_report.php");


$_url = $url;

$split_image = explode('\\', $un_reporte[0]['ruta_imagen']);

$route_image = ($split_image[2] . '/' . $split_image[3]);

$rpt = $un_reporte[0];

$actividad_agricola = explode(',', str_replace(' ', '', $rpt['actividad_agricola']));
$tipo_habitat = explode(',',  $rpt['tipo_de_habitat']);
$zona_de_uso = explode(',',  $rpt['zona_de_uso']);




?>


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Reporte Unico</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Creado por:</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $rpt['nombre'] . ' ' . $rpt['apellido'] ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-address-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Fecha:</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $rpt['ano'] . '/' . $rpt['mes'] . '/' . $rpt['dia']  ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-address-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Latitud:</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $rpt['latitud'] ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-ruler fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Longitud</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $rpt['longitud'] ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-ruler-vertical fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Información General</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>

                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">

                        <div class="list-group">
                            <a class="list-group-item list-group-item-action"><strong>Hora: </strong> <?= $rpt['hora']  ?> </a>
                            <a class="list-group-item list-group-item-action"><strong>Minuto: </strong> <?= $rpt['minuto']  ?> </a>
                            <a class="list-group-item list-group-item-action"><strong>Distrito: </strong> <?= $rpt['distrito']  ?> </a>
                            <a class="list-group-item list-group-item-action"><strong>Corregimiento: </strong> <?= $rpt['corregimiento']  ?> </a>
                            <a class="list-group-item list-group-item-action"><strong>Nombre del Río: </strong> <?= $rpt['nombre_del_rio']  ?> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Imagen del Terreno</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>

                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">

                        <img class="w-100 h-100" src="<?= $route_image ?>" alt="">
                    </div>
                    <!-- <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Direct
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Social
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> Referral
                        </span>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Más Información</h6>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a class="list-group-item list-group-item-action"><strong>Sub sistema del rio: </strong> <?= $rpt['subsistema_rio']  ?> </a>
                        <a class="list-group-item list-group-item-action"><strong>Vegetación dominante: </strong> <?= $rpt['vegetacion_dominante']  ?> </a>
                        <a class="list-group-item list-group-item-action"><strong>Vegetación Riparia: </strong> <?= $rpt['vegetacion_riparia']  ?> </a>
                        <a class="list-group-item list-group-item-action"><strong>Condición: </strong> <?= $rpt['condicion']  ?> </a>
                        <a class="list-group-item list-group-item-action"><strong>Olor: </strong> <?= $rpt['olor']  ?> </a>
                    </div>
                </div>
            </div>

            <!-- Color System -->
            <div class="row">

                <div class="col-lg-6 mb-4">
                    <div class="card bg-info text-white shadow">
                        <div class="card-body">
                            <strong>Presencia de Represa</strong>
                            <div class="text-white-50 small"><?= $rpt['presencia_presa']  ?></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="card bg-light text-black shadow">
                        <div class="card-body">
                            <strong>Presencia de Vado</strong>
                            <div class="text-black-50 small"><?= $rpt['presencia_vado']  ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-dark text-white shadow">
                        <div class="card-body">
                            <strong>Presencia de Puente</strong>
                            <div class="text-white-50 small"><?= $rpt['presencia_puente']  ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-info text-white shadow">
                        <div class="card-body">
                            <strong>Lluvías Recientes</strong>
                            <div class="text-white-50 small"><?= $rpt['lluvias_recientes']  ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-light text-black shadow">
                        <div class="card-body">
                            <strong>Presencia de Basura</strong>
                            <div class="text-black-50 small"><?= $rpt['presencia_basura']  ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-dark text-white shadow">
                        <div class="card-body">
                            <strong>Canalización</strong>
                            <div class="text-white-50 small"><?= $rpt['canalizacion']  ?></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="card bg-info text-white shadow">
                        <div class="card-body">
                            <strong>Descarga Directa</strong>
                            <div class="text-white-50 small"><?= $rpt['descarga_directa']  ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Características </h6>
                </div>
                <div class="card-body">
                    <div>
                        <h6 class="">Actividad agrícola</h6>
                        <div class="btn-group" role="group" aria-label="Default button group">
                            <?php foreach ($actividad_agricola as $atividad) {    ?>
                                <button type="button" class="btn btn-outline-primary"> <?= $atividad ?> </button>
                            <?php }  ?>
                        </div>

                    </div>
                    <br>
                    <div>
                        <h6 class="">Tipo de Habitat</h6>
                        <div class="btn-group" role="group" aria-label="Default button group">
                            <?php foreach ($tipo_habitat as $habitat) {    ?>
                                <button type="button" class="btn btn-outline-primary"> <?= $habitat ?> </button>
                            <?php }  ?>
                        </div>
                    </div>
                    <br>
                    <div>
                        <h6 class="">Actividad agrícola</h6>
                        <div class="btn-group" role="group" aria-label="Default button group">
                            <?php foreach ($zona_de_uso as $zona) {    ?>
                                <button type="button" class="btn btn-outline-primary"> <?= $zona ?> </button>
                            <?php }  ?>
                        </div>
                    </div>
                    <br>
                </div>
            </div>

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a class="list-group-item list-group-item-action"><strong>Temperatura: </strong> <?= $rpt['temperatura']  ?> </a>
                        <a class="list-group-item list-group-item-action"><strong>Color: </strong> <?= $rpt['color']  ?> </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>