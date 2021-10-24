

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Arsip Surat</h2>
                <p>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan <br>
                Klik "Lihat" pada kolom aksi untuk menampilkan surat.
            </p>
            </div>
            <?php if(empty($arsip)):?>
			<div class="alert alert-danger" role="alert">
				Data Arsip Tidak Ditemukan
			</div>
			<?php endif; ?>
            <!-- /.col-lg-12 -->
        </div>

        <!-- /.row -->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nomor Surat</th>
                                        <th>Kategori</th>
                                        <th>Judul</th>
                                        <th>Waktu Pengarsipan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($arsip as $a){ ?>
                                    <tr>
                                        <td> <?= $a->nomor; ?> </td>
                                        <td> <?= $a->kategori; ?> </td>
                                        <td> <?= $a->judul; ?> </td>
                                        <td> <?= $a->created_at; ?> </td>
                                        <td>
                                        <a href="<?= base_url("menu/delete/" . $a->id_arsip)?>" onclick="return confirm('Hapus data ini?')" class="btn btn-danger btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fa fa-trash"></i>
                                        </span>
                                        <span class="text">Hapus</span>
                                        </a>
                                        <a href="<?= base_url("menu/download/" . $a->id_arsip) ?>" class="btn btn-warning download">
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                            <span>Unduh</span>
                                        </a>
                                        <a href="<?= base_url("menu/show/$a->id_arsip"); ?>" class="btn btn-primary">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            <span>Lihat</span>
                                        </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
        
                                                                    </tbody>
                            </table>
                            
                        </div>
                        <!-- /.panel-body -->
                        
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
            <div class="row">
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p>
                                <a href="<?= base_url();?>menu/tambah" class="btn btn-outline btn-primary">Arsipkan Surat..</a>
                            </p>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


