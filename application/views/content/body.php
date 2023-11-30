<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?php echo base_url('assets/images/Karisma.png') ?>" alt="AdminLTELogo" height="150" width="300">
        </div>

        <?php $this->load->view('partial/main/navbar') ?>
        <?php $this->load->view('partial/main/sidebar') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php if (
                $this->session->userdata('departemen') == 'KEUANGAN' && $this->session->userdata('username') == 'KIUTC3' ||
                $this->session->userdata('departemen') == 'KEUANGAN' && $this->session->userdata('username') == 'KIUTC2' ||
                $this->session->userdata('departemen') == 'KEUANGAN' && $this->session->userdata('username') == 'KIUTC1' ||
                $this->session->userdata('departemen') == 'KEUANGAN' && $this->session->userdata('username') == 'KIUTC4' ||
                $this->session->userdata('departemen') == 'KEUANGAN' && $this->session->userdata('username') == 'KIUTC5' ||
                $this->session->userdata('departemen') == 'KEUANGAN' && $this->session->userdata('username') == 'KIUTC6' ||
                $this->session->userdata('departemen') == 'KEUANGAN' && $this->session->userdata('username') == 'KIUTC7'
            ) : ?>
                <div class="card-body">
                    <table id="tb_list_order" class="table table-bordered table-striped" style="text-align: center;">
                        <thead>
                            <tr>
                                <th>Kode Order</th>
                                <th>Tanggal Order</th>
                                <th>Ready</th>
                                <th>Pending</th>
                                <th>On The Road</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($logistik as $d) : ?>
                                <tr>
                                    <th><?= $d->kd_order ?></th>
                                    <th><?= format_indo($d->tgl_jalan) ?></th>
                                    <th>
                                        <a href="#" class="btn btn-success btn-block btn-sm">
                                            <?= $d->d_ready ?>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="btn btn-danger btn-block btn-sm">
                                            <?= $d->d_pending ?>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="btn btn-secondary btn-block btn-sm">
                                            <?= $d->d_otr ?>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="<?= base_url('detail_deliveri/') . $d->kd_order ?>" class="btn btn-primary btn-block btn-sm">
                                            <i class="fa fa-solid fa-search"></i> Lihat Detail
                                        </a>
                                    </th>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php elseif ($this->session->userdata('departemen') == 'LOGISTIK' || $this->session->userdata('departemen') == 'IT') : ?>
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <h3 class="card-title font-weight-bold">Jadwal Pengiriman Minggu Ini</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="tb_list_order" class="table table-bordered table-striped" style="text-align: center;">
                                    <thead>
                                        <tr>
                                            <th>Kode Order</th>
                                            <th>Tanggal Order</th>
                                            <th>Ready</th>
                                            <th>Pending</th>
                                            <th>On The Road</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($logistik as $d) : ?>
                                            <tr>
                                                <th><?= $d->kd_order ?></th>
                                                <th><?= format_indo($d->tgl_jalan) ?></th>
                                                <th>
                                                    <a href="#" class="btn btn-success btn-block btn-sm">
                                                        <?= $d->d_ready ?>
                                                    </a>
                                                </th>
                                                <th>
                                                    <a href="#" class="btn btn-danger btn-block btn-sm">
                                                        <?= $d->d_pending ?>
                                                    </a>
                                                </th>
                                                <th>
                                                    <a href="#" class="btn btn-secondary btn-block btn-sm">
                                                        <?= $d->d_otr ?>
                                                    </a>
                                                </th>
                                                <th>
                                                    <a href="<?= base_url('detail_deliveri/') . $d->kd_order ?>" class="btn btn-primary btn-block btn-sm">
                                                        <i class="fa fa-solid fa-search"></i> Lihat Detail
                                                    </a>
                                                </th>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </section>
            <?php endif; ?>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2022 <a href="https://kiu.co.id">PT.KARISMA INDOARGO UNIVERSAL</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->