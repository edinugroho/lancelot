		<!--/HEADER-->
		<div class="spacer"></div>
		<!--Konten-->
		<div class="uk-container">
			<?php 
                echo "<p>". $this->session->flashdata('bidSuccess') ."</p>";    
            ?>
			<?php foreach ($pemenang as $b) { ?>
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
						    		<a href="<?php echo base_url('PenyediaBarang'); ?>">
		                                <span uk-icon="icon: home"></span> Kembali Ke Dashboard
		                            </a>
						    	</div>
				            </div>
				        </div>
				    </div>
				    <div class="uk-card-body">
				    	<h3 class="uk-card-title">Detail Pemenang</h3>
				        <dl class="uk-description-list uk-description-list-divider">
						    <dt>Nama Pelelang</dt>
						    <dd><?php echo  $b->username; ?></dd>
						    <dt>Email Pelelang</dt>
						    <dd><?php echo  $b->email; ?></dd>
						</dl>
				    </div>
				    <div class="uk-card-footer">
				    	<div class="uk-align-left" >
				    		<a class="uk-button uk-button-primary" href='https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=<?php echo  $b->email; ?>' target="_blank">kirim email</a>
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
				<a>Lancelot 2019</a>
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