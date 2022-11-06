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
                                    <h4 class="font-weight-bold text-primary">Manajemen Edit Data Kriteria
                                        <a href="<?= base_url('datakriteria') ?>" class="btn btn-danger float-right">Kembali ke data Kriteria<i class="fas fa-chevron-right"></i></a>
                                    </h4>
                                </div>
                            </div>
                            <div class="card-body">

                                <form action="<?php echo base_url('Datakriteria/proses_edit'); ?>" method="POST">
                                    <div class="form-group">
                                        <input type="hidden" name="id_kriteria" value="<?php echo $kriteria['id_kriteria']; ?>">
                                        <label>Nama Kriteria</label>
                                        <input type="text" class="form-control" name="nama_kriteria" value="<?php echo $kriteria['nama_kriteria']; ?>">
                                        <label>Kode Kriteria</label>
                                        <input type="text" class="form-control" name="kode_kriteria" value="<?php echo $kriteria['kode_kriteria']; ?>">
                                        <label>Jenis</label>
                                        <select class="custom-select form-control" name="jenis">
                                            <option value="Benefit" <?php if ($kriteria['jenis'] == "Benefit") {
                                                                        echo "selected";
                                                                    } else {
                                                                    } ?>>Benefit</option>
                                            <option value="Cost" <?php if ($kriteria['jenis'] == "Cost") {
                                                                        echo "selected";
                                                                    } else {
                                                                    } ?>>Cost</option>
                                        </select>
                                        <!-- <input type="text" class="form-control" name="jenis" value="<?php echo $kriteria['jenis']; ?>"> -->
                                        <label>Bobot</label>
                                        <input type="text" class="form-control" name="bobot" value="<?php echo $kriteria['bobot']; ?>">
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