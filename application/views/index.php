<!DOCTYPE html>
<html>
    <body>
        <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
            <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
                <div class="uk-navbar-left">

                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="#">Data Barang</a></li>
                        <li>
                            <a href="#">Login</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="<?php echo base_url('/LoginPenyediaBarang'); ?>">Penyedia Barang</a></li>
                                    <li><a href="<?php echo base_url('/LoginPenawar'); ?>">Penawar</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- <li><a href="#">Item</a></li> -->
                    </ul>

                </div>
            </nav>
        </div>
        <div class="uk-container">
            <div class="uk-grid-medium uk-child-width-1-3@s" uk-grid="">
                <?php
                    foreach ($barang as $b) {
                ?>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <div class="uk-card-media-top">
                            <img src="https://previews.123rf.com/images/kubixdesign/kubixdesign1612/kubixdesign161200010/69145245-initial-dd-logo-design.jpg" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title"><?php echo $b->namaBarang; ?></h3>
                            <p><?php echo $b->deskripsi; ?></p>
                        </div>
                        <div class="uk-card-footer">
                            <a href="<?php echo base_url('/Barang/detailBarang/').$b->id_barang; ?>" class="uk-button uk-button-text">Read more</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>