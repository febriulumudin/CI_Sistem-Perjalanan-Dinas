        <body class="nav-md" style="color: black;">
            <div class="container body">
                <div class="main_container">
                    <div class="col-md-3 left_col menu_fixed">
                        <div class="left_col scroll-view">
                            <div class="navbar nav_title" style="border: 0;">
                                <a href="/beranda" class="site_title"><img src="/logo/dinas.png" width="22%" alt="logo"> <span style="font-size: 85%;">Dinas Pendidikan</span></a>
                            </div>

                            <div class="clearfix"></div>
                            <!-- /menu profile quick info -->
                            <br />
                            <!-- sidebar menu -->
                            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                                <div class="menu_section">
                                    <h3 style="font-size: 13px;">Menu</h3>
                                    <ul class="nav side-menu">
                                        <li>
                                            <a href="/beranda">
                                                <i class="fa fa-home"></i>
                                                Beranda
                                            </a>
                                        </li>
                                        <li><a><i class="fa fa-cog"></i> Master <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="/master/data_anggota">Data Pegawai</a> </li>
                                                <li><a href="/master/jenis_anggota">Data Jabatan</a> </li>
                                                <li><a href="/master/setting_ttd">Setting Tanda Tangan</a> </li>
                                                <li><a href="/master/data_user">Data User</a> </li>
                                                <li><a href="/master/data_rekening">Data Rekening</a> </li>
                                            </ul>
                                        </li>
                                        <li><a><i class="fa fa-desktop"></i> Perintah Tugas <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="/spt/surat_perintah">Surat Perintah Tugas</a> </li>
                                                <li><a href="/spt/approval">Approval</a> </li>
                                            </ul>
                                        </li>
                                        <li><a><i class="fa fa-file-text"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="/laporan/laporan_pegawai">Laporan Pegawai</a></li>
                                                <li><a href="/laporan/laporan_tugas">Laporan Tugas</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /sidebar menu -->
                        </div>
                    </div>

                    <!-- top navigation -->
                    <div class="top_nav">
                        <div class="nav_menu">
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>
                            <nav class="nav navbar-nav">
                                <ul class=" navbar-right">
                                    <li class="nav-item dropdown open" style="padding-left: 15px;">
                                        <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                            <img src="/template/images/avatar1.png" alt=""><span style="text-transform: capitalize;"><?= session()->get('username') ?></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                            <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Selamat Datang, <span style="text-transform: capitalize;"><?= session()->get('username') ?></span></span></h6>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="/index/keluar"><i class="fa fa-sign-out pull-right"></i> Keluar</a>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown open" style="padding-top: 7px;">
                                        <?php if ($notice < 1) { ?>
                                            <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-bell"></i>
                                            </a>
                                        <?php } else { ?>
                                            <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-bell"></i>
                                                <span class="badge bg-green" style="margin-top: 4px; margin-right: 5px;"><?= $notice ?></span>
                                            </a>
                                        <?php } ?>

                                        <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">

                                            <?php if ($notice < 1) { ?>
                                                <li class="nav-item">
                                                    <a class="dropdown-item">
                                                        <span class="message">
                                                            Tidak Ada Pemberitahuan
                                                        </span>
                                                    </a>
                                                </li>
                                            <?php } else { ?>
                                                <?php
                                                foreach ($spt as $key => $valuespt) { ?>
                                                    <li class="nav-item">
                                                        <a href="/spt/detail_surat_perintah_dua/<?= $valuespt['id_surat_perintah']; ?>/<?= $valuespt['no_program'] ?>" class="dropdown-item">
                                                            <span>
                                                                <span class="text-danger" style="font-size: 12px;">*Terdapat Peserta Yang Menolak Tugas</span>
                                                            </span>
                                                            <span class="message">
                                                                <?= $valuespt['dalam_rangka'] ?>
                                                            </span>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                            <?php } ?>
                                            <li class="nav-item" style="padding-bottom: 3px; padding-top: 3px;">
                                                <div class="text-center">
                                                    <a href="/spt/surat_perintah" class="dropdown-item">
                                                        <strong>Lihat Semua Perintah Tugas</strong>
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- /top navigation -->

                    <!-- page content -->
                    <div class="right_col" role="main">