<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Arsip Surat >> Unggah</h2>
                <p>Unggah surat yang telah terbit pada form ini untuk diarsipkan <br>
                Catatan : <br>
                - Gunakan file berformat PDF
            </p>
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                <div class ="card">
                    <div class="card-header">
                        Form Tambah Data Arsip
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?> 
                    <?= form_open_multipart('menu/tambah') ?>
                    <form action="" enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <label for="nomor">Nomor Surat</label>
                            <input type="text" class="form-control" id="nomor" name="nomor">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori">
                                <option value="Undangan">Undangan</option>
                                <option value="Pengumuman">Pengumuman</option>
                                <option value="Nota Dinas">Nota Dinas</option>
                                <option value="Pemberitahuan">Pemberitahuan</option>    
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul Dokumen</label>
                            <input type="text" class="form-control" id="judul" name="judul">
                        </div>
                        <div class="form-group">
                            <label for="file">File surat PDF</label>
                            <input type="file" class="custom-file-input" name="file_surat">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                        </form>
                        <?= form_close() ?>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    
