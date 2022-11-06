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
                                    <h4 class="font-weight-bold text-primary">Manajemen Edit Data Sub Kriteria
                                        <a href="<?= base_url('datasubkriteria') ?>" class="btn btn-danger float-right">Kembali ke data Sub Kriteria<i class="fas fa-chevron-right"></i></a>
                                    </h4>
                                </div>
                            </div>
                            <div class="card-body">

                                <form action="<?php echo base_url('Datasubkriteria/proses_edit'); ?>" method="POST">
                                    <div class="form-group">
                                        <input type="hidden" name="id_kriteria" value="<?php echo $sub_kriteria['id_kriteria']; ?>">
                                        <label>Kode Kriteria</label>
                                        <input type="text" class="form-control" name="keterangan" value="<?php echo $sub_kriteria['kode_kriteria']; ?>" disabled>
                                        <label>Keterangan</label>
                                        <input type="text" class="form-control" name="keterangan" value="<?php echo $sub_kriteria['keterangan']; ?>">
                                        <label>Nilai</label>
                                        <input type="text" class="form-control" name="nilai" value="<?php echo $sub_kriteria['nilai']; ?>">
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