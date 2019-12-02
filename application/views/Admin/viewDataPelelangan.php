<div class="uk-section-small uk-section-default header">
    <div class="uk-container uk-container-large">
        <h1><span class="ion-speedometer"></span> Lihat Data Pelelangan</h1>
        <!-- <p>
            Welcome back, <?php echo $_SESSION['username']; ?>
        </p> -->
        
        <span class="uk-margin-small-right uk-icon" uk-icon="home"></span><a class="uk-link-heading" href="<?php echo base_url('Admin'); ?>"> Kembali Ke dashboard</a>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container uk-container-large">
        <table class="uk-table uk-table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>nama barang</th>
                    <th>nama penawar</th>
                    <th>harga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($pelelangan as $b) {
                        echo "<tr>";
                        echo "<td>".$b->id_tawar."</td>";
                        echo "<td>".$b->namaBarang."</td>";
                        echo "<td>".$b->username."</td>";
                        echo "<td>".$b->hargaSekarang."</td>";
                        echo "<td><a href='".base_url('Admin/detailPenawar/').$b->id_penawar."' class='uk-button uk-link-reset uk-button-default'>Detail</a></td>";
                        echo "</tr>";
                    }
                ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>