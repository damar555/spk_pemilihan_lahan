<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-4">
        <div class="card-header py-4">
            <h1 class="font-weight-bold text-primary">Profil</h1>
        </div>
        <?php echo $this->session->flashdata('message'); ?>
             <div class="card mb-4" >
                <div class="row py-4">
                <div class="col-md-4">
                <img class="img-profile rounded-circle " alt="image" height="400" width="400" src="<?= base_url('assets/'); ?>img/admin.png" >
                </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h1 class="card-title">Nama      : <?= $user['nama'] ?></h1>
                        <h1 class="card-text">Status    : <?php if($user['level'] == 'A') {
                            echo 'Admin';
                        } else {
                            echo 'User';
                        }
                        ?>
                        </h1>
                        <a href="<?= base_url('profilcontrol/edit') ?>" class="btn btn-primary float-center">Edit Profil</a>
                        </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
</div>
