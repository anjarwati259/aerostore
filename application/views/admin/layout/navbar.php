        <nav class="navbar navbar-default top-navbar" style="background-color: #225081;" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">AeroStrore</a>
            </div>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/game') ?>"><i class="fa fa-desktop"></i> Daftar Game</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/paket') ?>"><i class="fa fa-bar-chart-o"></i> Paket Game</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/rekening') ?>"><i class="fa fa-qrcode"></i> Rekening</a>
                    </li>
                    
                    <li>
                        <a href="<?php echo base_url('admin/transaksi') ?>"><i class="fa fa-table"></i> Transaksi</a>
                    </li>
                    <li>
                        <a href="form.html"><i class="fa fa-edit"></i> Logout </a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  --> 
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <?php echo $title; ?>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->