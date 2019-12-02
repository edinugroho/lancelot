<div class="uk-section-small uk-section-default header">
    <div class="uk-container uk-container-large">
        <h1><span class="ion-speedometer"></span> Lihat Data Barang</h1>
        <!-- <p>
            Welcome back, <?php echo $_SESSION['username']; ?>
        </p> -->
        
        <span class="uk-margin-small-right uk-icon" uk-icon="home"></span><a class="uk-link-heading" href="<?php echo base_url('PenyediaBarang'); ?>"> Kembali Ke dashboard</a>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container uk-container-large">
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
                    foreach ($barang as $b) {
                        echo "<tr>";
                        echo "<td>".$b->id_barang."</td>";
                        echo "<td>".$b->namaBarang."</td>";
                        echo "<td>".$b->jenisBarang."</td>";
                        echo "<td>".word_limiter($b->deskripsi,10)."</td>";
                        echo "<td>".$b->statusBarang."</td>";
                        echo "<td>".$b->bukaHarga."</td>";
                        echo "<td>".$b->kelipatanHarga."</td>";
                        echo "<td>".$b->hargaSekarang."</td>";
                        echo "<td>".$b->waktuPelelangan."</td>";
                        // echo "<td><button href='".base_url('Admin/detailBarangbyId/').$b->id_barang." class='uk-button uk-button-text'>Detail</button></td>";
                        if ($b->hargaSekarang==0) {
                            echo "<td></td>";
                        }else{
                            echo "<td><a href='".base_url('PenyediaBarang/bidTerahir/').$b->id_barang."' class='uk-button uk-link-reset uk-button-default'>Detail</a></td>";
                        }
                        echo "</tr>";
                    }
                ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>