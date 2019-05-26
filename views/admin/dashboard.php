<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard - ServiceSet</title>

            <!-- Compiled and minified CSS -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
            <link href="https://fonts.googleapis.com/css?family=Exo+2|Roboto" rel="stylesheet">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link rel="stylesheet" href="./assets/css/dashboard-style.css" type="txt/css">

            <style>
                nav {
                    background-color: black;
                    color: white;
                }

                .searchNavBar {
                    display: inline-block;
                    box-sizing: border-box;
                    margin-left: 20%;
                }
            </style>
    </head>
    <body>
        
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo"><i class="material-icons sidenav-trigger" data-target="slide-out">menu</i>ServiceSet</a>
                
                <form class="searchNavBar">
                    <div class="input-field">
                        <input id="search" type="search" required>
                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                </form>
                
                <ul class="right hide-on-med-and-down">
                    <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
                    <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </nav>

        <ul id="slide-out" class="sidenav">
            <li><div class="user-view">
                    <div class="background">
                        <img src="images/office.jpg">
                    </div>
                    <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
                    <a href="#name"><span class="white-text name">John Doe</span></a>
                    <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
                </div>
            </li>
            <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
            <li><a href="#!">Second Link</a></li>
            <li><div class="divider"></div></li>
            <li><a class="subheader">Subheader</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
        </ul>
        
                
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {

            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);

            });
        
        </script>
    </body>
</html>