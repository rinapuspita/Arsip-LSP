<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Arsip Surat >> Lihat</h2>
                <?php foreach ($arsip as $data) : ?>
                  <div class="card-body">
                    <table class="table">
                      <tr>
                        <td>Nomor Surat</td>
                        <td>:</td>
                        <td><?= $data->nomor ?></td>
                      </tr>
                      <tr>
                        <td>Kategori</td>
                        <td>:</td>
                        <td><?= $data->kategori ?></td>
                      </tr>
                      <tr>
                        <td>Judul</td>
                        <td>:</td>
                        <td><?= $data->judul ?></td>
                      </tr>
                      <tr>
                        <td>Waktu Unggah</td>
                        <td>:</td>
                        <td><?= $data->created_at ?></td>
                      </tr>
                    </table>

                    <embed src="<?= base_url() . "assets/uploads/pdf/" . $data->file ?>" width="100%" height="400"></embed>
                  </div>
                  <div class="card-footer">
                    <a href="<?= base_url("menu/index") ?>" class="btn btn-primary">
                      <i class="fa fa-arrow-left" aria-hidden="true"></i>
                      <span>Kembali</span>
                    </a>
                    <a href="<?= base_url("menu/download/" . $data->id_arsip) ?>" class="btn btn-warning download">
                      <i class="fa fa-download" aria-hidden="true"></i>
                      <span>Unduh</span>
                    </a>
                    <a href="<?= base_url("menu/update/" . $data->id_arsip) ?>" class="btn btn-info">
                      <i class="fa fa-paperclip" aria-hidden="true"></i>
                      <span>Edit / Ganti File</span>
                    </a>
                  </div>

                <?php endforeach; ?>
            </p>
            </div>
            
        </div>
</div>