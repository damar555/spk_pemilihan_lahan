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
                                    <h4 class="font-weight-bold text-primary"> Edit Profil
                                        <a href="<?= base_url('profilcontrol') ?>" class="btn btn-danger float-right">Kembali<i class="fas fa-chevron-right"></i></a>
                                    </h4>
                                </div>
                            </div>
                            <div class="card-body">
                            <form action="<?php echo base_url('Profilcontrol/proses_edit'); ?>" method="POST">
                                <label>Full Name</label>
                                <input type="hidden" name="id_admin" value="<?php echo $user['id_admin']; ?>">
                                <input type="text" class="form-control" name="nama" value="<?php echo $user['nama']; ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" value="<?php echo $user['username']; ?>">
                                <label>Password</label>
                                <input type="text" class="form-control" name="password" value="<?php echo $user['password']; ?>">
                                <input type="hidden" name="level" value="<?php echo $user['level']; ?>">
                                
                            </div>
                                <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">Simpan</button>
                                </div>
                                </form>
                    </div>

                </div>
            </section>
        </div>
    </div>
</div>