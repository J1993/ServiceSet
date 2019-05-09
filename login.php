<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login - ServiceSet</title>

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/css?family=Exo+2|Roboto" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/login-style.css">
        
    </head>
    <body>

        <div class="row">
            <div class="col s6 valign-wrapper">
                <div class="logo">
                    
                    <h2 class="center-align">ServiceSet</h2>
                    <h3>Here is where everything starts</h3>
                    
                </div>
            </div>
            <div class="col s6 center-align container">

                <h1>Login</h1>

                <p>Log in into your account or create a new account</p>

                <form class="col s12">

                        <div class="row">

                           <div class="input-field col s12">
                              <input id="email" type="email" class="validate">
                              <label for="email">E-mail</label>
                           </div>

                           <div class="input-field col s12">
                              <input id="password" type="password" class="validate">
                              <label for="password">Password</label>
                           </div>


                           <div class="col s8">
                              <p class="left-align">
                                 <label>
                                    <input type="checkbox" />
                                    <span>Remember me</span>
                                 </label>
                              </p>
                           </div>
                           
                           <div class="col s4 valign-wrapper" id="forgot-password">
                              <a href="#">Forgot password?</a>
                           </div>

                           <div class="col s6 left-align">

                              <a href="register.php" class="black-text">Create account</a>

                           </div>

                           <div class="col s6 right-align">
                              <button class="btn waves-effect waves-light black" type="submit" name="action">Log in
                              </button>
                           </div>

                        </div>

                </form>
            </div>
        </div>

        
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>