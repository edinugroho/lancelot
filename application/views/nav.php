<body>	
		<!--HEADER-->
		<header id="site-head">
			<div class="uk-container uk-container-expand" style="background-color: #222">
				<div class="uk-grid uk-grid-medium uk-flex uk-flex-middle" data-uk-grid>
					<div class="uk-width-auto">
						<a href="#" class="uk-logo" title=""><img src="https://pngimage.net/wp-content/uploads/2018/06/logo-l-png-2.png" width="40" height="40" alt="">ANCELOT</a>
					</div>
					<div class="uk-width-expand">
					</div>
					<div class="uk-width-auto">
						<ul class="uk-subnav" data-uk-margin>
							<li class="uk-visible@s"><a href="<?php echo base_url(); ?>">Home</a></li>
							<li class="uk-visible@s">
								<a>Daftar</a>
								<div class="drop-nav uk-dropdown" data-uk-dropdown="mode: click; offset: 20;animation: uk-animation-slide-bottom-small; duration: 150">
									<ul class="uk-nav-default uk-nav-parent-icon" data-uk-nav>
										<li><a href="<?php echo base_url('Daftar/penyediaBarang'); ?>"><span class="uk-margin-small-right" ></span>Penyedia Barang</a></li>
										<li><a href="<?php echo base_url('Daftar/penawar'); ?>"><span class="uk-margin-small-right" ></span>Penawar</a></li>
										<!-- <li class="uk-nav-divider"></li>
										<li><a href="#"><span class="uk-margin-small-right" ></span> Item</a></li>-->
									</ul>
								</div>
							</li>
							<li class="uk-visible@s">
								<a>Login</a>
								<div class="drop-nav uk-dropdown" data-uk-dropdown="mode: click; offset: 20;animation: uk-animation-slide-bottom-small; duration: 150">
									<ul class="uk-nav-default uk-nav-parent-icon" data-uk-nav>
										<li><a href="<?php echo base_url('/LoginPenyediaBarang'); ?>"><span class="uk-margin-small-right" ></span>Penyedia Barang</a></li>
										<li><a href="<?php echo base_url('/LoginPenawar'); ?>"><span class="uk-margin-small-right" ></span>Penawar</a></li>
										<!-- <li class="uk-nav-divider"></li>
										<li><a href="#"><span class="uk-margin-small-right" ></span> Item</a></li>-->
									</ul>
								</div>
							</li>
							<li class="uk-hidden@s"><a data-uk-navbar-toggle-icon data-uk-toggle href="#offcanvas-nav"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>