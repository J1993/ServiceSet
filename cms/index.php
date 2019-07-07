<?php
	require('core/request.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ServiceSet</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
    <body>
        <div class="parallax-container">
            <div class="parallax">
                <img src="assets/images/parallax1.jpg">
            </div>
            
            <div class="section white">
                <div class="row container">
                    <h2 class="header">Parallax</h2>
                    <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
                </div>
            </div>

            <div class="parallax-container">
                <div class="parallax">
                    <img src="https://materializecss.com/images/parallax2.jpg">
                </div>
            </div>
        </div>
        <a href="login.php">log in</a>
        <a href="register.php">register</a>

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.parallax');
                var instances = M.Parallax.init(elems, options);
            });
        </script>
    </body>
</html>





