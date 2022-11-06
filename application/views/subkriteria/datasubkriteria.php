<title><?= $header ?></title>

<?php if ($kriteria == NULL) : ?>
    <div class="card shadow mb-4">
        <!-- /.card-header -->
        <div class="card-header py-4">
            <h6 class="m-0 font-weight-bold text-secondary"><i class="fa fa-table"></i> Daftar Data Sub Kriteria</h6>
        </div>

        <div class="card-body">
            <div class="alert alert-info">
                Data masih kosong.
            </div>
        </div>
    </div>
<?php endif ?>
<?php echo $this->session->flashdata('message'); ?>
<?php foreach ($kriteria as $key) : ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-4">
                <h4 class="font-weight-bold text-primary"><?= $key['nama_kriteria'] ?>(<?= $key['kode_kriteria'] ?>)
                    <a href="<?= base_url()?>Datasubkriteria/formtambahsubkriteria/<?php echo $key['id_kriteria']; ?>" class="btn btn-primary float-right">Tambah Sub Kriteria<i class="fas fa-chevron-right"></i></a>
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Keterangan</th>
                                <th>Nilai</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sub_kriteria = $this->Datasubkriteriam->data_sub_kriteria($key['id_kriteria']);
                            $n = 1;
                            foreach ($sub_kriteria as $sub_kriteria) : ?>
                            <?php if($sub_kriteria['id_kriteria'] == $key['id_kriteria']) : ?>
                                <tr>
                                    <td><?php echo $n++; ?></td>
                                    <td><?php echo $sub_kriteria['keterangan']; ?></td>
                                    <td><?php echo $sub_kriteria['nilai']; ?></td>
                                    <td>
                                        <div class="btn-group">

                                            <a href="<?php base_url() ?>Datasubkriteria/formeditsubkriteria/<?php echo $sub_kriteria['id_sub_kriteria']; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="<?php base_url() ?>Datasubkriteria/aksi_hapus/<?php echo $sub_kriteria['id_sub_kriteria']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
<?php endforeach; ?>

</div>
<!-- End of Main Content -->