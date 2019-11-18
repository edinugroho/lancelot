<div class="uk-section-small uk-section-default header">
    <div class="uk-container uk-container-large">
        <h1><span class="ion-speedometer"></span>Tambah Data Barang</h1>
        <!-- <p>
            Welcome back, <?php echo $_SESSION['username']; ?>
        </p> -->
        
        <span class="uk-margin-small-right uk-icon" uk-icon="home"></span><a class="uk-link-heading" href="<?php echo base_url('PenyediaBarang'); ?>"> Kembali Ke dashboard</a>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container uk-container-large">
        <form action="<?php echo base_url('PenyediaBarang/tambahBarangAction'); ?>" method="post">
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Nama Barang</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="text">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-select">Jenis Barang</label>
                <div class="uk-form-controls">
                    <select class="uk-select" id="form-stacked-select">
                        <option>Hp</option>
                        <option>Laptop</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>