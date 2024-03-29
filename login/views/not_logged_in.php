<?php include('../../inc/config.php');?>
<?php include('_header.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>SportsGuiders Login</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="<?php echo $webPath;?>css/demo.css">
    <link rel="stylesheet" href="<?php echo $webPath;?>css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo $webPath;?>css/sky-forms.css">
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="<?php echo $webPath;?>css/sky-forms-ie8.css">
    <![endif]-->

    <script src="<?php echo $webPath;?>js/jquery.min.js"></script>
    <script src="<?php echo $webPath;?>js/jquery.form.min.js"></script>
    <script src="<?php echo $webPath;?>js/jquery.validate.min.js"></script>
    <script src="<?php echo $webPath;?>js/jquery.modal.js"></script>
    <!--[if lt IE 10]>
    <script src="<?php echo $webPath;?>js/jquery.placeholder.min.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="<?php echo $webPath;?>js/sky-forms-ie8.js"></script>
    <![endif]-->
</head>

<body class="bg-red">
<div class="body body-s">
    <form action="<?php echo $webPath.'login/'; ?>" method="post" id="sky-form" class="sky-form">
        <header>SportsGuiders Login</header>

        <fieldset>
            <section>
                <div class="row">
                    <label class="label col col-4">E-mail</label>
                    <div class="col col-8">
                        <label class="input">
                            <i class="icon-append fa fa-user"></i>
                            <input type="email" name="user_name">
                        </label>
                    </div>
                </div>
            </section>

            <section>
                <div class="row">
                    <label class="label col col-4">Password</label>
                    <div class="col col-8">
                        <label class="input">
                            <i class="icon-append fa fa-lock"></i>
                            <input type="password" name="user_password">
                        </label>
                        <div class="note"><a href="#sky-form2" class="modal-opener">Forgot password?</a></div>
                    </div>
                </div>
            </section>

            <section>
                <div class="row">
                    <div class="col col-4"></div>
                    <div class="col col-8">
                        <label class="checkbox"><input type="checkbox" name="remember" checked><i></i>Keep me logged in</label>
                    </div>
                </div>
            </section>
        </fieldset>
        <footer>
            <button type="submit" name="login" class="button">Log in</button>
            <a href="#" class="button button-secondary">Register</a>
        </footer>
    </form>
</div>



<form action="<?php echo $webPath;?>login/" id="sky-form2" class="sky-form sky-form-modal">
    <header>Password recovery</header>

    <fieldset>
        <section>
            <label class="label">E-mail</label>
            <label class="input">
                <i class="icon-append fa fa-envelope-o"></i>
                <input type="email" name="email" id="email">
            </label>
        </section>
    </fieldset>

    <footer>
        <button type="submit" name="submit" class="button">Submit</button>
        <a href="#" class="button button-secondary modal-closer">Close</a>
    </footer>

    <div class="message">
        <i class="fa fa-check"></i>
        <p>Your request successfully sent!<br><a href="#" class="modal-closer">Close window</a></p>
    </div>
</form>

<script type="text/javascript">
    $(function()
    {
        // Validation for login form
        $("#sky-form").validate(
            {
                // Rules for form validation
                rules:
                {
                    user_name:
                    {
                        required: true,
                        email: true
                    },
                    user_password:
                    {
                        required: true,
                        minlength: 3,
                        maxlength: 20
                    }
                },

                // Messages for form validation
                messages:
                {
                    user_name:
                    {
                        required: 'Please enter your email address',
                        email: 'Please enter a VALID email address'
                    },
                    user_password:
                    {
                        required: 'Please enter your password'
                    }
                },

                // Do not change code below
                errorPlacement: function(error, element)
                {
                    error.insertAfter(element.parent());
                }
            });


        // Validation for recovery form
        $("#sky-form2").validate(
            {
                // Rules for form validation
                rules:
                {
                    email:
                    {
                        required: true,
                        email: true
                    }
                },

                // Messages for form validation
                messages:
                {
                    email:
                    {
                        required: 'Please enter your email address',
                        email: 'Please enter a VALID email address'
                    }
                },

                // Ajax form submition
                submitHandler: function(form)
                {
                    $(form).ajaxSubmit(
                        {
                            beforeSend: function()
                            {
                                $('#sky-form button[type="submit"]').attr('disabled', true);
                            },
                            success: function()
                            {
                                $("#sky-form2").addClass('submited');
                            }
                        });
                },

                // Do not change code below
                errorPlacement: function(error, element)
                {
                    error.insertAfter(element.parent());
                }
            });
    });
</script>
</body>
</html>