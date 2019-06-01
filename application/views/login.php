<div class="uk-container">
    <div class="uk-position-center">
        <?php echo "<div class='uk-alert-warning uk-close' >". validation_errors() ."</div>"; ?>
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
                    <input class="uk-input" type="text" id="password" name="password">
                </div>
            </div>
            <button class="uk-button uk-align-center uk-button-primary uk-button-small">Login</button>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.uk-button').click(function() {
            // e.preventDefault();
            // var username = $('#username').val();
            // var password = $('#password').val();
            $( "#formLogin" ).validate({
              rules: {
                username: {
                  required: true,
                  remote: {
                    url: "loginAction",
                    type: "post",
                    data: {
                      username: function() {
                        return $( "#username" ).val();
                      }
                    }
                  }
                }
              }
            });
            // $.ajax({
            //     url: 'loginAction',
            //     type: 'POST',
            //     dataType: 'text',
            //     data: {
            //         username: username,
            //         password: password
            //     },
            // })
            // .done(function() {
            //     console.log("success");
            //     console.log(username);

            // })
            // .fail(function(xhr, status, error) {
            //     console.log(error);
            // })
            // .always(function() {
            //     console.log("complete");
            // });    
        });
    });
</script>