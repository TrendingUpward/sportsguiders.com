<?php
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="google" value="notranslate">


    <title>CodePen - Animated Login Form</title>


    <!--<link rel="stylesheet" href="/assets/reset/normalize.css"> -->

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto+Slab'>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            background-color: #F15A5C;
            font-family: "Roboto Slab", serif;
            color: white;
        }

        .preload * {
            transition: none !important;
        }

        label {
            display: block;
            font-weight: bold;
            font-size: small;
            text-transform: uppercase;
            font-size: 0.7em;
            margin-bottom: 0.35em;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            border: none;
            padding: 0.5em;
            border-radius: 2px;
            margin-bottom: 0.5em;
            color: #333;
        }
        input[type="text"]:focus, input[type="password"]:focus {
            outline: none;
            box-shadow: inset -1px -1px 3px rgba(0, 0, 0, 0.3);
        }

        button {
            padding-left: 1.5em;
            padding-right: 1.5em;
            padding-bottom: 0.5em;
            padding-top: 0.5em;
            border: none;
            border-radius: 2px;
            background-color: #7E5AF1;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
            color: white;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.45);
        }

        small {
            font-size: 1em;
        }

        .login--login-submit {
            float: right;
        }

        .login--container {
            width: 600px;
            background-color: #F15A5C;
            margin: 0 auto;
            position: relative;
            top: 25%;
        }

        .login--toggle-container {
            position: absolute;
            background-color: #F15A5C;
            right: 0;
            line-height: 2.5em;
            width: 50%;
            height: 120px;
            text-align: right;
            cursor: pointer;
            transform: perspective(1000px) translateZ(1px);
            transform-origin: 0% 0%;
            transition: all 1s cubic-bezier(0.06, 0.63, 0, 1);
            backface-visibility: hidden;
        }
        .login--toggle-container .js-toggle-login {
            font-size: 4em;
            text-decoration: underline;
        }
        .login--active .login--toggle-container {
            transform: perspective(1000px) rotateY(180deg);
            background-color: #bc1012;
        }

        .login--username-container, .login--password-container {
            float: left;
            background-color: #F15A5C;
            width: 50%;
            height: 120px;
            padding: 0.5em;
        }

        .login--username-container {
            transform-origin: 100% 0%;
            transform: perspective(1000px) rotateY(180deg);
            transition: all 1s cubic-bezier(0.06, 0.63, 0, 1);
            background-color: #bc1012;
            backface-visibility: hidden;
        }
        .login--active .login--username-container {
            transform: perspective(1000px) rotateY(0deg);
            background-color: #F15A5C;
        }

        footer {
            position: absolute;
            bottom: 12px;
            left: 20px;
        }

    </style>

    <script>
        window.console = window.console || function(t) {};
        window.open = function(){ console.log("window.open is disabled."); };
        window.print   = function(){ console.log("window.print is disabled."); };
    </script>

    <script src="//assets.codepen.io/assets/libs/prefixfree.min-de773054e90c52a3c2631c944681b64e.js"></script>


</head>

<body>

<div class='preload login--container'>
    <div class='login--form'>
        <div class='login--username-container'>
            <label>Username</label>
            <input autofocus placeholder='Username' type='text'>
        </div>
        <div class='login--password-container'>
            <label>Password</label>
            <input placeholder='Password' type='password'>
            <button class='js-toggle-login login--login-submit'>Login</button>
        </div>
    </div>
    <div class='login--toggle-container'>
        <small>Hey you,</small>
        <div class='js-toggle-login'>Login</div>
        <small>already</small>
    </div>
</div>
<footer>

</footer>


<!--<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
<script type="text/javascript" src="../scripts/jquery.min.js"></script>

<script>
    (function () {
        $(function () {
            $('.login--container').removeClass('preload');
            this.timer = window.setTimeout(function (_this) {
                return function () {
                    return $('.login--container').toggleClass('login--active');
                };
            }(this), 2000);
            return $('.js-toggle-login').click(function (_this) {
                return function () {
                    window.clearTimeout(_this.timer);
                    $('.login--container').toggleClass('login--active');
                    return $('.login--username-container input').focus();
                };
            }(this));
        });
    }.call(this));
    //@ sourceURL=pen.js
</script>


<script>
    if (document.location.search.match(/type=embed/gi)) {
        window.parent.postMessage("resize", "*");
    }
</script>


</body>
</html>
 
