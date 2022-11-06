<!-- Main Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="main-content">
            <section class="section">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-header-action">
                                    <h4 class="font-weight-bold text-primary">Manajemen Edit Data Alternatif
                                        <a href="<?= base_url('dataalternatif') ?>" class="btn btn-danger float-right">Kembali ke data Alternatif<i class="fas fa-chevron-right"></i></a>
                                    </h4>
                                </div>
                            </div>
                            <div class="card-body">

                                <form action="<?php echo base_url('Dataalternatif/proses_edit'); ?>" method="POST">
                                    <div class="form-group">
                                        <input type="hidden" name="id_alternatif" value="<?php echo $alternatif['id_alternatif']; ?>">
                                        <label>Nama alternatif</label>
                                        <input type="text" class="form-control" name="nama_alternatif" value="<?php echo $alternatif['nama_alternatif']; ?>">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" name="alamat" value="<?php echo $alternatif['alamat']; ?>">
                                    </div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary mr-1" type="submit">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
            </section>
        </div>
    </div>
</div>