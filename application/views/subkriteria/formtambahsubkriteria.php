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
                                    <h4 class="font-weight-bold text-primary">Manajemen Data Sub Kriteria
                                        <a href="<?= base_url('datasubkriteria') ?>" class="btn btn-danger float-right">Kembali ke data sub kriteria<i class="fas fa-chevron-right"></i></a>
                                    </h4>
                                </div>
                            </div>
                            <div class="card-body">

                                <form action="<?php echo base_url('Datasubkriteria/aksi_tambah'); ?>" method="POST">
                                    <div class="form-group">
                                        <input type="hidden" name="id_kriteria" value="<?php echo $id_kriteria['id_kriteria']; ?>">
                                        <label>Kode Kriteria</label>
                                        <input type="text" name="kode_kriteria" class="form-control" value="<?php echo $id_kriteria['kode_kriteria']; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>keterangan</label>
                                        <input type="text" class="form-control" name="keterangan">
                                    </div>
                                    <div class="form-group">
                                        <label>nilai</label>
                                        <input type="text" class="form-control" name="nilai">
                                    </div>

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