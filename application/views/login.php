<div class="uk-container">
    <div class="uk-position-center">
        <?php echo "<div class='uk-alert-danger'>". validation_errors() ."</div>"; ?>
        <div class="uk-card uk-card-small uk-card-default">
            <div class="uk-margin uk-card uk-card-default uk-card-body">
                <form method="post" id="formLogin" action="<?php echo base_url('Login/loginAction'); ?>">
                    <div class="uk-margin">
                        <div class="uk-inline">
                            <span class="uk-form-icon" uk-icon="icon: user"></span>
                            <input class="uk-input" type="text" id="username" name="username">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-inline">
                            <span class="uk-form-icon" uk-icon="icon: lock"></span>
                            <input class="uk-input" type="password" id="password" name="password">
                        </div>
                    </div>
                    <button class="uk-button uk-align-center uk-button-primary uk-button-small">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.uk-button').click(function() {
            //e.preventDefault();
            var username = $('#username').val();
            var password = $('#password').val();
            $.ajax({
                url: 'loginAction',
                beforeSend : function() {
                    // console.log('loading');
                    NProgress.start();
                },
                complete : function() {
                    // console.log('complete');
                    NProgress.done();
                },
                type: 'POST',
                dataType: 'text',
                data: {
                    username: username,
                    password: password
                },
            })
            .done(function() {
                console.log("success");
            })
            .fail(function(xhr, status, error) {
                console.log(error);
            });   
        });
    });
</script>