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
                    <input class="uk-input" name="namaBarang" id="form-stacked-text" type="text">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-select">Jenis Barang</label>
                <div class="uk-form-controls">
                    <select name="jenisBarang" class="uk-select" id="form-stacked-select">
                        <option>Pilih Jenis Barang</option>
                        <option value="hp">Hp</option>
                        <option value="laptop">Laptop</option>
                    </select>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Deskripsi</label>
                <div class="uk-form-controls">
                    <textarea type="textarea" name="deskripsi" class="uk-textarea"></textarea>
                </div>
            </div>
            <div class="uk-grid-small" uk-grid>
                <div class="uk-width-1-2@s">
                    <label class="uk-form-label" for="form-stacked-text">Buka Harga</label>
                    <input class="uk-input" id="form-stacked-text" name="bukaHarga" type="number">
                </div>
                <div class="uk-width-1-2@s">
                    <label class="uk-form-label" for="form-stacked-text">Kelipatan Harga</label>
                    <input class="uk-input" id="form-stacked-text" name="kelipatanHarga" type="number">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Waktu pelelangan</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" name="waktuPelelangan" type="date">
                </div>
            </div>
            <p uk-margin>
                <button type="submit" name="sunmit" class="uk-button uk-button-primary uk-button-small">Tambah Barang</button>
                <button type="reset" class="uk-button uk-button-danger uk-button-small">Reset</button>
            </p>
        </form>
    </div>
</div>