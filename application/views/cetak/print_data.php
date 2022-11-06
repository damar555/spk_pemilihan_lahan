<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-4">
            <h4 class="font-weight-bold text-primary">Data Hasil Akhir
            </h4>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-secondary"><i class="fa fa-table"></i> Hasil Akhir Perankingan</h6>
            </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Alternatif</th>
                            <th>Nilai</th>
                            <th>Rangking</th>
                        </tr>
                    </thead>
                    <?php
                    $n = 1;
                    foreach ($hasil as $keys) : ?>
                        <tbody>
                            <tr align="center">
                                <td><?php 
                                $nama_alternatif = $this->Dataperhitunganmodel->get_hasil_alternatif($keys['id_alternatif']);
                                echo $nama_alternatif['nama_alternatif'];
                                ?>
                                </td>
                                <td><?= $keys['nilai'] ?></td>
                                <td><?php echo $n++; ?></td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>

                <script type="text/javascript">
                    window.print();
                </script>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->