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

                        <h1>Recepción</h1>

                        <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="http://localhost/editar/" title="Edicion Rapida"></iframe>
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