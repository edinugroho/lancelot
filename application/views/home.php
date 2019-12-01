		<div class="spacer"></div>
		<!--CARDS WRAPPER-->
		<section  data-uk-filter="target: .js-filter" class="uk-section uk-section-small uk-section-default uk-padding-remove-bottom">
			<div class="uk-container uk-container-expand uk-margin-large-bottom">
				<ul class="uk-subnav uk-subnav-pill">
					<li class="uk-active" data-uk-filter-control><a href="#">Semua</a></li>
					<li data-uk-filter-control=".hp-card"><a href="#">Hp</a></li>
					<li data-uk-filter-control=".laptop-card"><a href="#">Laptop</a></li>
				</ul>
				<div class="uk-grid uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l  uk-child-width-1-5@xl uk-grid-match js-filter" data-uk-grid="masonry: true" data-uk-sortable="handle: .drag-icon">

					<!-- card -->
					<?php foreach ($barang as $b) { ?>
					<div class="<?php echo $b->jenisBarang; ?>-card" data-tags="<?php echo $b->jenisBarang; ?>">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt"><?php echo $b->jenisBarang; ?></span>
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" src="/uploads/<?php echo $b->gambar; ?>" alt="<?php echo $b->gambar; ?>" height="380" width="380" >
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold"><?php echo $b->namaBarang; ?></h6>
								<p class="uk-text-small uk-text-muted"><?php echo word_limiter($b->deskripsi,10); ?></p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										<a href="<?php echo base_url('/Barang/detailBarang/').$b->id_barang; ?>" class="uk-button uk-button-text" >Ikut Lelang</a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</section>
		<!--/CARDS WRAPPER-->
		<!--FOOTER-->
		<footer id="site-foot" class="uk-section uk-section-secondary uk-section-xsmall">
			<div class="uk-container uk-text-small uk-text-center">
				<a href="#">Lancelot 2019</a>
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