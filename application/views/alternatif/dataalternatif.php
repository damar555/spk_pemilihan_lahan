<title><?= $header ?></title>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-4">
            <h4 class="font-weight-bold text-primary">Manajemen Data Alternatif
                <a href="<?= base_url('dataalternatif/formtambahalternatif') ?>" class="btn btn-primary float-right">Tambah Data Alternatif<i class="fas fa-chevron-right"></i></a>
            </h4>
        </div>
        <div class="card-body">
            <?php echo $this->session->flashdata('message'); ?>
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Alternatif</th>
                            <th>Alamat</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
                    $n = 1;
                    foreach ($alternatif as $alternatif) : ?>
                        <tbody>
                            <tr>
                                <td><?php echo $n++; ?></td>
                                <td><?php echo $alternatif['nama_alternatif']; ?></td>
                                <td><?php echo $alternatif['alamat']; ?></td>
                                <td>
                                    <div class="btn-group">

                                        <a href="<?php base_url() ?>Dataalternatif/formeditalternatif/<?php echo $alternatif['id_alternatif']; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="<?php base_url() ?>Dataalternatif/aksi_hapus/<?php echo $alternatif['id_alternatif']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->