<title><?= $header ?></title>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-4">
            <h4 class="font-weight-bold text-primary">Manajemen Penilaian</h4>
        </div>
        <?php echo $this->session->flashdata('message'); ?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Alternatif</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $n = 1;
                        foreach ($alternatif as $key) : ?>
                            <tr>
                                <td><?php echo $n++; ?></td>
                                <td><?php echo $key['nama_alternatif']; ?></td>
                                <?php $cek_tombol = $this->Datapenilaianm->tombol($key['id_alternatif']); ?>
                                <td>
                                    <?php if ($cek_tombol == 0) { ?>
                                        <div class="btn-group">
                                            <a data-toggle="modal" href="#set<?= $key['id_alternatif'] ?>" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                        </div>
                                    <?php } else { ?>
                                        <div class="btn-group">
                                            <a data-toggle="modal" href="#edit<?= $key['id_alternatif'] ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                        </div>
                                    <?php } ?>
                                </td>
                            </tr>

                            <!-- modal -->
                            <div class="modal fade" id="set<?= $key['id_alternatif'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="myModalLabel"><i class="fa fa-plus"></i>Tambah Penilaian</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <?= form_open('Datapenilaian/aksi_tambah') ?>
                                        <div class="modal-body">
                                            <?php foreach ($kriteria as $ktr) : ?>
                                                <?php
                                                $sub_kriteria = $this->Datapenilaianm->data_sub_kriteria($ktr['id_kriteria']);
                                                ?>
                                                <?php if ($sub_kriteria != null) : ?>
                                                    <input type="text" name="id_alternatif" value="<?= $key['id_alternatif'] ?>" hidden>
                                                    <input type="text" name="id_kriteria[]" value="<?= $ktr['id_kriteria'] ?>" hidden>
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-times"></i>Batal</button>
                                            <button type="submit" class="btn btn-success"><i class="fa fa-save">Simpan</i></button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- modal -->
                            <div class="modal fade" id="edit<?= $key['id_alternatif'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="myModalLabel"><i class="fa fa-plus"></i>Edit Penilaian</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <?= form_open('Datapenilaian/aksi_edit') ?>
                                        <div class="modal-body">
                                            <?php foreach ($kriteria as $ktr) : ?>
                                                <?php
                                                $sub_kriteria = $this->Datapenilaianm->data_sub_kriteria($ktr['id_kriteria']);
                                                ?>
                                                <?php if ($sub_kriteria != null) : ?>
                                                    <input type="text" name="id_alternatif" value="<?= $key['id_alternatif'] ?>" hidden>
                                                    <input type="text" name="id_kriteria[]" value="<?= $ktr['id_kriteria'] ?>" hidden>
                                                    <div class="form-group">
                                                        <label class="font-weight-blod" for="<?php echo $ktr['id_kriteria'] ?>"><?php echo $ktr['nama_kriteria'] ?></label>
                                                        <select name="nilai[]" class="form-control" id="<?php echo $ktr['id_kriteria'] ?>" required>
                                                            <option value="">--Pilih--</option>
                                                            <?php foreach ($sub_kriteria as $sk) : ?>
                                                                <?php $option = $this->Datapenilaianm->data_penilaian($key['id_alternatif'], $sk['id_kriteria']); ?>
                                                                <option value="<?= $sk['id_sub_kriteria'] ?>" <?php if ($sk['id_sub_kriteria'] == $option['nilai']) {
                                                                                                                    echo "selected";
                                                                                                                } ?>><?= $sk['keterangan'] ?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-times"></i>Batal</button>
                                            <button type="submit" class="btn btn-success"><i class="fa fa-save">Simpan</i></button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->