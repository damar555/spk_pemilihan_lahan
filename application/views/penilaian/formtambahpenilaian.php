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
                                    <h4 class="font-weight-bold text-primary">Manajemen Data Penilaian
                                        <a href="<?= base_url('datapenilaian') ?>" class="btn btn-danger float-right">Kembali ke data Penilaian<i class="fas fa-chevron-right"></i></a>
                                    </h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <?php foreach ($alternatif as $alternatif) : ?>
                                    <form action="<?php echo base_url('Datapenilaian/aksi_tambah'); ?>" method="POST">

                                        <div class="form-group">
                                            <?php foreach ($kriteria as $ktr) : ?>
                                                <?php
                                                $sub_kriteria = $this->Datapenilaianm->data_sub_kriteria($ktr['id_kriteria']);
                                                ?>
                                                <?php if ($sub_kriteria != null) : ?>
                                                    <input type="text" name="id_alternatif" value="<?php echo $alternatif['id_alternatif'] ?>" hidden>
                                                    <input type="text" name="id_kriteria[]" value="<?php echo $ktr['id_kriteria'] ?>" hidden>
                                                    <div class="form-group">
                                                        <label class="font-weight-blod" for="<?php echo $ktr['id_kriteria'] ?>"><?php echo $ktr['nama_kriteria'] ?></label>
                                                        <select name="nilai[]" class="form-control" id="<?php echo $ktr['id_kriteria'] ?>" required>
                                                            <option value="">--Pilih--</option>
                                                            <?php foreach ($sub_kriteria as $sk) : ?>
                                                                <option value="<?php echo $sk['id_sub_kriteria'] ?>"><?php echo $sk['keterangan'] ?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </div>

                            </div>
                        <?php endforeach ?>
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