<?php include "includes/db.php" ?>
<?php include "includes/functions.php" ?>
<?php include "includes/header.php" ?>

<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="container-fluid" style="margin-bottom: 15px;">
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">

                        <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target=".bd-example-modal-lg">Edicion Rapida</button>

                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-body">

                        <h1>Proyectista</h1>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="myTable" class="table  table-hover table-responsive table-bordered ">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Apertura Exp.
                                                </th>
                                                <th>
                                                    No. Expediente
                                                </th>
                                                <th>
                                                    Acto Juridico
                                                </th>
                                                <th>
                                                    Asignado
                                                </th>
                                                <th>
                                                    Referencia
                                                </th>
                                                <th>
                                                    No. Instrumento
                                                </th>
                                                <th>
                                                    Fecha Ultima Firma
                                                </th>
                                                <th>
                                                    Observaciones
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = "SELECT * FROM expedientes E LEFT JOIN otorgantes D ON E.Expediente = D.Expediente GROUP BY E.Expediente ORDER BY E.Escritura DESC";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                                <tr>
                                                    <form method="POST">
                                                        <td class="bg-info dark">
                                                            <?php echo ajustarFechaEs($row['Fecha']) ?>
                                                        </td>
                                                        <td class="bg-info">
                                                            <?php echo $row['Expediente'] ?>
                                                        </td>
                                                        <td class="bg-info">
                                                            <?php echo utf8_encode($row['Des_Operacion']) ?>
                                                        </td>
                                                        <td>
                                                            <?php 
                                                            $porciones = explode(" ", $row['Des_Responsable']);
                                                            echo utf8_encode($porciones[0]) ;
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php echo utf8_encode($row['Nombre']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['Escritura'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo ajustarFechaEs($row['FechaFirma']); ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['Observacion'] ?>
                                                        </td>
                                                    </form>
                                                </tr>

                                            <?php } ?>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>
                                                    Apertura Exp.
                                                </th>
                                                <th>
                                                    No. Expediente
                                                </th>
                                                <th>
                                                    Acto Juridico
                                                </th>
                                                <th>
                                                    Asignado
                                                </th>
                                                <th>
                                                    Referencia
                                                </th>
                                                <th>
                                                    No. Instrumento
                                                </th>
                                                <th>
                                                    Fecha Ultima Firma
                                                </th>
                                                <th>
                                                    Observaciones
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- ============================================================== -->                                            
    <!-- Modal 1-->
    <!-- ============================================================== -->                                            
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <iframe src="http://localhost/JQueryAjax/" title="Edicion Rapida"></iframe>
            </div>
        </div>
    </div>


    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="javascript: void(0);">About</a>
                        <a href="javascript: void(0);">Support</a>
                        <a href="javascript: void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
</div>
</div>
<!-- ============================================================== -->
<!-- end main wrapper -->
<!-- ============================================================== -->
<?php include "includes/footer.php" ?>