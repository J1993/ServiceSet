<?php

   /*Requerimos del controlador UserController para obtener
   las cabeceras de la pagina login, en este caso.
    */
    require_once 'controllers/UserController.php';
    $userController = new UserController();
    $userController->login();

    /**Cuando se llame al meteodo POST
     * la pagina guardara el EMAIL y PASSWORD del usuario
     * para validarlo en el modelo User por medio del controlador
     * UserController.
     */
    if (isset($_POST['access'])) {
        $data = array(
            'email'    => $_POST['email'],
            'password' => md5($_POST['password'])
        );
        $userController->accessUser($data);
        //echo var_dump($userController);
    }
?>

         <div class="container">
            <div class="row">
                  <div class="col s6 valign-wrapper">
                     <div class="logo">
                        
                        <h2 class="center-align" id="serviceset">ServiceSet</h2>
                        <h3>Here is where everything starts</h3>
                        
                     </div>
                  </div>
                  <div class="col s6 center-align container">

                     <h1>Login</h1>

                     <p>Log in into your account or create a new account</p>

                     <form class="col s12" action="login.php" method="POST" name="loginForm" id="loginForm">

                        <div class="row">

                           <!--Input email-->
                           <div class="input-field col s12">
                              <input id="email" type="email" class="validate" name="email" required>
                              <label for="email">E-mail</label>
                           </div>

                           <!--Input password-->
                           <div class="input-field col s12">
                              <input id="password" type="password" class="validate" name="password" required>
                              <label for="password">Password</label>
                           </div>
                           
                           <!--Link forgot password-->
                           <div class="col s6 valign-wrapper" id="forgot-password">
                              <a href="#">Forgot password?</a>
                           </div>
                           
                           <!--Checkbox remember-->
                           <div class="col s6">

                              <p class="right-align">
                                 <label>
                                    <input type="checkbox" />
                                    <span>Remember me</span>
                                 </label>
                              </p>
                              
                           </div>
                           
                           <!--Link create account-->
                           <div class="col s6 left-align valign-wrapper" id="create-account">

                              <a href="register.php" class="black-text ">Create account</a>

                           </div>

                           <!--Button log in-->
                           <div class="col s6 right-align">
                              <button class="btn waves-effect waves-light black" type="submit" name="access">Log in
                              </button>
                           </div>

                        </div>

                     </form>
                  </div>
            </div>
        </div>
        
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>