<?php include "includes/db.php"?>
<?php include "includes/header.php" ?>

<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">


               <div class="card">
                    <div class="card-body">

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="myTable" class="table display compact">
                                        <thead>
                                            <tr>
                                                <th>
                                                    #
                                                </th>
                                                <th>
                                                    Product
                                                </th>
                                                <th>
                                                    Payment Taken
                                                </th>
                                                <th>
                                                    Status
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="table-body">
                                                <?php
                                                $query = "SELECT * FROM expedientes";
                                                $result = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row['Escritura']?>
                                                </td>
                                                <td>
                                                    <?php echo $row['Operacion']?>
                                                </td>
                                                <td>
                                                    <?php echo $row['Fecha']?>
                                                </td>
                                                <td>
                                                    <?php echo $row['Volumen']?>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                      
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>
                                                    #
                                                </th>
                                                <th>
                                                    Product
                                                </th>
                                                <th>
                                                    Payment Taken
                                                </th>
                                                <th>
                                                    Status
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
    <!-- footer -->
    <!-- ============================================================== -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    Copyright © 2018 Concept. All rights reserved. Dashboard by <a
                        href="https://colorlib.com/wp/">Colorlib</a>.
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