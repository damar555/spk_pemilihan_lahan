<title><?= $header ?></title>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-4">
            <h4 class="font-weight-bold text-primary">Manajemen kriteria
                <a href="<?= base_url('datakriteria/formtambahkriteria') ?>" class="btn btn-primary float-right">Tambah Kriteria<i class="fas fa-chevron-right"></i></a>
            </h4>
        </div>
        <div class="card-body">
            <?php echo $this->session->flashdata('message'); ?>
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kriteria</th>
                            <th>Kode Kriteria</th>
                            <th>Jenis</th>
                            <th>Bobot</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
                    $n = 1;
                    foreach ($kriteria as $kriteria) : ?>
                        <tbody>
                            <tr>
                                <td><?php echo $n++; ?></td>
                                <td><?php echo $kriteria['nama_kriteria']; ?></td>
                                <td><?php echo $kriteria['kode_kriteria']; ?></td>
                                <td><?php echo $kriteria['jenis']; ?></td>
                                <td><?php echo $kriteria['bobot']; ?></td>
                                <td>
                                    <div class="btn-group">

                                        <a href="<?php base_url() ?>Datakriteria/formeditkriteria/<?php echo $kriteria['id_kriteria']; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="<?php base_url() ?>Datakriteria/aksi_hapus/<?php echo $kriteria['id_kriteria']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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