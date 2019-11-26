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
            <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-2@s">
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-header">
                            Website Traffic
                        </div>
                        <div class="uk-card-body">
                            <canvas id="chart1"></canvas>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-header">
                            Website Traffic
                        </div>
                        <div class="uk-card-body">
                            <canvas id="chart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>