<title><?= $header ?></title>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-4">
            <h4 class="font-weight-bold text-primary">Manajemen Admin
                <a href="<?= base_url('datauser/formtambahuser') ?>" class="btn btn-primary float-right">Tambah admin<i class="fas fa-chevron-right"></i></a>
            </h4>
        </div>
        <?php echo $this->session->flashdata('message'); ?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
                    $n = 1;
                    foreach ($admin as $admin) : ?>
                        <tbody>
                            <tr>
                                <td><?php echo $n++; ?></td>
                                <td><?php echo $admin['nama']; ?></td>
                                <td><?php echo $admin['username']; ?></td>
                                <td><?php echo $admin['password']; ?></td>
                                <td><?php
                                    if ($admin['level'] == 'A') {
                                        echo "Admin";
                                    } else {
                                        echo "User";
                                    } ?></td>
                                <td>
                                    <div class="btn-group">

                                        <a href="<?php base_url() ?>Datauser/formedituser/<?php echo $admin['id_admin']; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="<?php base_url() ?>Datauser/aksi_hapus/<?php echo $admin['id_admin']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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