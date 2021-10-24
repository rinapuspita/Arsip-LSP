<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Arsip Surat >> Ubah Arsip Surat</h2>
                <p>Ubah surat lama yang telah terbit pada form ini untuk diarsipkan <br>
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
                        Form Edit Data Arsip
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?> 
                    <form action="" enctype="multipart/form-data" method="post">
                    <?php foreach ($arsip as $data) : ?>
                        <div class="form-group">
                            <label for="nomor">Nomor Surat</label>
                            <input type="text" class="form-control" id="nomor" name="nomor" value="<?= $data->nomor ?>">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori">
                                <?php foreach ($kategori as $key) :?>
                                    <?php if ($key==$arsip['kategori']) :?>
                                    <option value="<?= $key ?>"selected><?= $key ?></option>
                                    <?php else : ?>
                                        <option value="<?= $key ?>"><?= $key ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul Dokumen</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="<?= $data->judul ?>">
                        </div>
                        <div class="form-group">
                            <label for="file">File surat PDF</label>
                            <input type="file" class="custom-file-input" name="file_surat">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                        <a href="<?= base_url("menu/index") ?>" class="btn btn-primary float-right">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        <span>Kembali</span>
                      </a>
                        <?php endforeach ?>    
                    </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    
