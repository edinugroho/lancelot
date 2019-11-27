<div class="content-padder content-background">
    <div class="uk-section-small uk-section-default header">
        <div class="uk-container uk-container-large">
            <h1><span class="ion-speedometer"></span> Dashboard</h1>
            <p>
                Welcome back, <?php echo $_SESSION['username']; ?>
            </p>
        </div>
    </div>
    <div class="uk-section-small">
        <div class="uk-container uk-container-large">
            <div class="uk-grid-medium uk-child-width-1-4@s" uk-grid="">
                <div>
                    <div class="uk-card-small uk-card-default uk-box-shadow-hover-small">
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Total Barang</h3>
                            <span class="statistics-number">
                                <?php echo $jumlahBarang; ?>
                                <span class="uk-label uk-label-success">
                                </span>
                            </span>
                        </div>
                        <div class="uk-card-footer">
                            <a href="<?php echo base_url('Admin/viewDataBarang'); ?>" class="uk-button uk-button-text">Lihat Data</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card-small uk-card-default uk-box-shadow-hover-small">
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Total Penyedia Barang</h3>
                            <span class="statistics-number">
                                <?php echo $jumlahPenyediaBarang; ?>
                                <span class="uk-label uk-label-success">
                                </span>
                            </span>
                        </div>
                        <div class="uk-card-footer">
                            <a href="<?php echo base_url('Admin/viewDataPenyedia'); ?>" class="uk-button uk-button-text">Lihat Data</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card-small uk-card-default uk-box-shadow-hover-small">
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Total Penawar</h3>
                            <span class="statistics-number">
                                <?php echo $jumlahPenawar; ?>
                                <span class="uk-label uk-label-success">
                                </span>
                            </span>
                        </div>
                        <div class="uk-card-footer">
                            <a href="<?php echo base_url('Admin/viewDataPenawar'); ?>" class="uk-button uk-button-text">Lihat Data</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card-small uk-card-default uk-box-shadow-hover-small">
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Pelelangan</h3>
                            <span class="statistics-number">
                                <?php echo $jumlahPelelangan; ?>
                                <span class="uk-label uk-label-success">
                                </span>
                            </span>
                        </div>
                        <div class="uk-card-footer">
                            <a href="<?php echo base_url('Admin/viewDataPenlelangan'); ?>" class="uk-button uk-button-text">Lihat Data</a>
                        </div>
                    </div>
                </div>
            </div>
            <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@s">
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-header">
                            Pelelangan Berlangsung
                        </div>
                        <div class="uk-card-body">
                            <table class="uk-table uk-table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Barang</th>
                                        <th>Jenis Barang</th>
                                        <th>Deskripsi</th>
                                        <th>Status Barang</th>
                                        <th>Buka Harga</th>
                                        <th>Kelipatan Harga</th>
                                        <th>Harga Sekarang</th>
                                        <th>Waktu Pelelangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($lelang as $b) {
                                            echo "<tr>";
                                            echo "<td>".$b->id_tawar."</td>";
                                            echo "<td>".$b->id_barang."</td>";
                                            echo "<td>".$b->id_penawar."</td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>