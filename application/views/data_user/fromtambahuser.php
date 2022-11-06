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
                                    <h4 class="font-weight-bold text-primary">Manajemen Data Admin
                                        <a href="<?= base_url('datauser') ?>" class="btn btn-danger float-right">Kembali ke data Admin<i class="fas fa-chevron-right"></i></a>
                                    </h4>
                                </div>
                            </div>
                            <div class="card-body">

                                <form action="<?php echo base_url('Datauser/aksi_tambah'); ?>" method="POST">
                                    <div class="form-group">
                                        <label>Nama admin</label>
                                        <input type="text" class="form-control" name="nama">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="username">
                                        <label>Password</label>
                                        <input type="text" class="form-control" name="Password">
                                        <label>Level</label>
                                        <input type="text" class="form-control" name="level">
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