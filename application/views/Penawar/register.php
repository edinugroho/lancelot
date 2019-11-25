<body>
    <div uk-sticky="media: 960" class="uk-navbar-container tm-navbar-container uk-sticky uk-active" style="position: fixed; top: 0px; width: 1903px;">
    </div>
    <div class="content-background">
        <div class="uk-section-large">
            <div class="uk-container uk-container-large">
                <div uk-grid class="uk-child-width-1-1@s uk-child-width-2-3@l">
                    <div class="uk-width-1-1@s uk-width-1-5@l uk-width-1-3@xl"></div>
                    <div class="uk-width-1-1@s uk-width-3-5@l uk-width-1-3@xl">
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header">
                                Daftar Penawar
                            </div>
                            <?php 
                                echo "<p>". $this->session->flashdata('akunBerhasilDibuat') ."</p>";    
                            ?>
                            <div class="uk-card-body">
                                <?php echo "<div class='uk-alert-danger'>". $this->session->flashdata('usernameInvalid') ."</div>"; ?>
                                <form method="POST" action="<?php echo base_url("Daftar/daftarPenawar"); ?>">
                                    <fieldset class="uk-fieldset">
                                        <div class="uk-margin">
                                            <div class="uk-position-relative">
                                                <span class="uk-form-icon ion-edit"></span>
                                                <input class="uk-input" name="username" type="text" placeholder="Username">
                                                <div class="uk-text-danger uk-text-small"><?php echo form_error('username'); ?></div>
                                            </div>
                                        </div>

                                        <div class="uk-margin">
                                            <div class="uk-position-relative">
                                                <span class="uk-form-icon ion-android-person"></span>
                                                <input name="email" class="uk-input" name="email" type="email" placeholder="Email">
                                                <div class="uk-text-danger uk-text-small"><?php echo form_error('email'); ?></div>
                                            </div>
                                        </div>

                                        <div class="uk-margin">
                                            <div class="uk-position-relative">
                                                <span class="uk-form-icon ion-locked"></span>
                                                <input class="uk-input" name="password" type="password" placeholder="Password">
                                                <div class="uk-text-danger uk-text-small"><?php echo form_error('password'); ?></div>
                                            </div>
                                        </div>
                                        <div class="uk-margin">
                                            <button type="submit" name="submit" class="uk-button uk-button-primary">
                                                <span class="ion-forward"></span>&nbsp; Daftar
                                            </button>
                                        </div>
                                        <hr />
                                        <center>
                                            <p>
                                                Sudah Mempunyai Akun?
                                            </p>
                                            <a href="<?php echo base_url('LoginPenawar'); ?>" class="uk-button uk-button-default">
                                                <span class="ion-android-person"></span>&nbsp; Login
                                            </a>
                                        </center>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1@s uk-width-1-5@l uk-width-1-3@xl"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>