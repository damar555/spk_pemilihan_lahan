<title><?= $header ?></title>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-4">
            <h4 class="font-weight-bold text-primary">Data Perhitungan
            </h4>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-secondary"><i class="fa fa-table"></i> Matrix Pencocokan Kriteria</h6>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th>No</th>
                                <th>Alternatif</th>
                                <?php foreach ($kriteria as $key) : ?>
                                    <th><?= $key['kode_kriteria'] ?></th>
                                <?php endforeach ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $n = 1;
                            foreach ($alternatif as $keys) : ?>
                                <tr>
                                    <td><?php echo $n++; ?></td>
                                    <td><?php echo $keys['nama_alternatif']; ?></td>
                                    <?php foreach ($kriteria as $key) : ?>
                                        <td>
                                            <?php
                                            $data_pencocokan = $this->Dataperhitunganmodel->data_nilai($keys['id_alternatif'], $key['id_kriteria']);
                                            echo $data_pencocokan['nilai'];
                                            ?>
                                        </td>
                                    <?php endforeach ?>
                                </tr>
                            <?php endforeach; ?>
                            <tr align="center" class="bg-light">
                                <th colspan="2">Nilai Max Parameter</th>
                                <?php foreach ($kriteria as $key): ?>
                                    <th>
                                        <?php
                                        $min_max = $this->Dataperhitunganmodel->get_max_min($key['id_kriteria']);
                                        echo $min_max['max'];
                                        ?>
                                    </th>
                                    <?php endforeach ?>
                            </tr>
                            <tr align="center" class="bg-light">
                                <th colspan="2">Nilai Min Parameter</th>
                                <?php foreach ($kriteria as $key): ?>
                                    <th>
                                        <?php
                                        $min_max = $this->Dataperhitunganmodel->get_max_min($key['id_kriteria']);
                                        echo $min_max['min'];
                                        ?>
                                    </th>
                                    <?php endforeach ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-secondary"><i class="fa fa-table"></i> Bobot Kriteria</h6>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <?php foreach ($kriteria as $key) : ?>
                                    <th><?= $key['kode_kriteria'] ?></th>
                                <?php endforeach ?>
                            </tr>
                        </thead>
                        <tbody>
                            <tr align="center">
                                <?php foreach ($kriteria as $key): ?>
                                    <td>
                                        <?php
                                        echo $key['bobot'];
                                        ?>
                                    </td>
                                    <?php endforeach ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-secondary"><i class="fa fa-table"></i>Normalisasi Bobot Kriteria</h6>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <?php foreach ($kriteria as $key) : ?>
                                    <th><?= $key['kode_kriteria'] ?></th>
                                <?php endforeach ?>
                            </tr>
                        </thead>
                        <tbody>
                            <tr align="center">
                                <?php foreach ($kriteria as $key):
                                $total_bobot = $this->Dataperhitunganmodel->get_total_kriteria(); 
                                ?>
                                    <td>
                                        <?php
                                        echo round($key['bobot']/$total_bobot['total_bobot'],2);
                                        ?>
                                    </td>
                                    <?php endforeach ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-secondary"><i class="fa fa-table"></i> Nilai Utility</h6>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-secondary text-white">
                            <tr align="center">
                                <th>No</th>
                                <th>Alternatif</th>
                                <?php foreach ($kriteria as $key) : ?>
                                    <th><?= $key['kode_kriteria'] ?></th>
                                <?php endforeach ?>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $n = 1;
                            foreach ($alternatif as $keys) : ?>
                            <tr align="center">
                                <td><?php echo $n++; ?></td>
                                <td align="left"><?php echo $keys['nama_alternatif']?></td>
                                <?php foreach ($kriteria as $key): ?>
                                    <td>
                                        <?php
                                        $data_pencocokan = $this->Dataperhitunganmodel->data_nilai($keys['id_alternatif'], $key['id_kriteria']);
                                        $min_max = $this->Dataperhitunganmodel->get_max_min($key['id_kriteria']);
                                        if ($key['jenis'] == "Cost") {
                                            echo round(($min_max['max']-$data_pencocokan['nilai'])/($min_max['max']-$min_max['min']),2);
                                        } else {
                                            echo round(($data_pencocokan['nilai']-$min_max['min'])/($min_max['max']-$min_max['min']),2);
                                        }
                                        ?>
                                    </td>
                                    <?php endforeach ?>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-secondary"><i class="fa fa-table"></i>Perhitungan Nilai</h6>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-secondary text-white">
                            <tr align="center">
                                <th>No</th>
                                <th>Alternatif</th>
                                <th>Perhitungan</th>
                                <th>Total Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $this->Dataperhitunganmodel->hapus_hasil();
                            $n = 1;
                            foreach ($alternatif as $keys) : ?>
                            <tr align="center">
                                <td><?php echo $n++; ?></td>
                                <td align="left"><?php echo $keys['nama_alternatif']?></td>
                                <td>SUM
                                    <?php
                                    $nilai_total = 0;
                                    foreach ($kriteria as $key) { ?>
                                    <?php
                                    $total_bobot=$this->Dataperhitunganmodel->get_total_kriteria();
                                    $data_pencocokan = $this->Dataperhitunganmodel->data_nilai($keys['id_alternatif'], $key['id_kriteria']);
                                    $min_max = $this->Dataperhitunganmodel->get_max_min($key['id_kriteria']);

                                    $bobot_normalisasi = round($key['bobot']/$total_bobot['total_bobot'],2);
                                    if ($key['jenis'] == "Cost") {
                                        $nilai_utility = round(($min_max['max']-$data_pencocokan['nilai'])/($min_max['max']-$min_max['min']),2);
                                    } else {
                                        $nilai_utility = round(($data_pencocokan['nilai']-$min_max['min'])/($min_max['max']-$min_max['min']),2);
                                    }
                                    
                                    $nilai_total += $bobot_normalisasi*$nilai_utility;
                                    echo "(".$bobot_normalisasi."x".$nilai_utility.")";
                                    }
                                $hasil_akhir = [
                                    'id_alternatif' => $keys['id_alternatif'],
                                    'nilai' => round($nilai_total,4)
                                ];
                                $result = $this->Dataperhitunganmodel->insert_nilai_hasil($hasil_akhir);
                                ?>
                                </td>
                                <td>
                                    <?= round($nilai_total,4); ?>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->