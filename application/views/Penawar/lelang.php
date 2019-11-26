		<!--/HEADER-->
		<div class="spacer"></div>
		<!--Konten-->
		<div class="uk-container">
			<?php foreach ($barang as $b) { ?>
				<!-- <div class="uk-grid-small uk-child-width-auto" uk-grid uk-countdown="date: <?php echo  $b->waktuPelelangan; ?>T14:47:22+00:00">
				    <div>
				        <div class="uk-countdown-number uk-countdown-days"></div>
				        <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Days</div>
				    </div>
				    <div class="uk-countdown-separator">:</div>
				    <div>
				        <div class="uk-countdown-number uk-countdown-hours"></div>
				        <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Hours</div>
				    </div>
				    <div class="uk-countdown-separator">:</div>
				    <div>
				        <div class="uk-countdown-number uk-countdown-minutes"></div>
				        <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Minutes</div>
				    </div>
				    <div class="uk-countdown-separator">:</div>
				    <div>
				        <div class="uk-countdown-number uk-countdown-seconds"></div>
				        <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Seconds</div>
				    </div>
				</div> -->
				<div class="uk-card uk-card-default">
				    <div class="uk-card-header">
				        <div class="uk-grid-small uk-flex-middle" uk-grid>
				            <div class="uk-width-expand">
				                <div class="uk-align-left" >
						    		<a href="<?php echo base_url('Pelelang'); ?>">
		                                <span uk-icon="icon: home"></span> Kembali Ke Dashboard
		                            </a>
						    	</div>
				            </div>
				        </div>
				    </div>
				    <div class="uk-card-media-left uk-cover-container uk-align-center">
				        <center><img src="/uploads/<?php echo $b->gambar; ?>" alt="<?php echo $b->gambar; ?>" alt=""></center>
				    </div>
				    <div class="uk-card-body">
				    	<h3 class="uk-card-title">Detail Barang</h3>
				        <dl class="uk-description-list uk-description-list-divider">
						    <dt>Nama Barang</dt>
						    <dd><?php echo  $b->namaBarang; ?></dd>
						    <dt>Jenis Barang</dt>
						    <dd><?php echo  $b->jenisBarang; ?></dd>
						    <dt>Deskripsi</dt>
						    <dd><?php echo  $b->deskripsi; ?></dd>
						    <dt>Buka Harga</dt>
						    <dd><?php echo  $b->bukaHarga; ?></dd>
						    <dt>Kelipatan Harga</dt>
						    <dd><?php echo  $b->kelipatanHarga; ?></dd>
						    <dt>Harga Sekarang</dt>
						    <dd><?php echo  $b->hargaSekarang; ?></dd>
						    <dt>Batas Pelelangan</dt>
						    <dd><?php echo  $b->waktuPelelangan; ?></dd>
						</dl>
				    </div>
				    <div class="uk-card-footer">
				    	<div class="uk-align-left" >
				    		<a class="uk-button uk-button-danger" href="<?php echo base_url('Penawar'); ?>">kembali</a>
				    	</div>

				    	<div class="uk-align-right" >
				    		<a class="uk-button uk-button-primary" href="<?php echo base_url('Penawar/tambahBid/').$b->id_barang; ?>">Tambah bid</a>
				    	</div>
				    </div>
				</div>
			<?php } ?>
		</div>
		<!--/Konten-->
		<br><br>
		<!--FOOTER-->
		<footer id="site-foot" class="uk-section uk-section-secondary uk-section-xsmall">
			<div class="uk-container uk-text-small uk-text-center">
				<a href="https://github.com/zzseba78/Kick-Off"> Built with <a href="http://getuikit.com" title="Visit UIkit 3 site" target="_blank" data-uk-tooltip><span data-uk-icon="uikit"></span></a>
			</div>
		</footer>
		<!--/FOOTER-->
		
		<!-- JS FILES -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit-icons.min.js"></script>
		<script src="js/cards.js"></script>	
		<script>
			// setTimeout(function(){
			// 	UIkit.notification('Now you can filter cards with search field!<br>Type "amazing", "music" or "nature"');
			// }, 1000);
		</script>	
	</body>
</html>