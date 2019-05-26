<?php

   require_once 'controllers/UserController.php';

   $userController = new UserController();
   $userController -> register();

   #session_start();
   #$_SESSION['variable'] = 'data';
   #session_destroy();

   if (isset($_POST['register'])) {

      $data = array (
         'user_name' => $_POST['firstName'],
         'user_lastName' => $_POST['lastName'],
         'user_email' => $_POST['email'],
         'user_password' => md5($_POST['password']),
      );
      
      $userController-> registerUser($data);
      #var_dump($data);
   }

?>

<body>

   <div class="container">
      <div class="row">
         <div class="col s6 valign-wrapper">
               <div class="logo">
                  
                  <h2 class="center-align">ServiceSet</h2>
                  <h3>Here is where everything starts</h3>
                  
               </div>
         </div>
         <div class="col s6 center-align container">

               <h1>Register</h1>

               <p>Fill all the gaps to create a new account</p>

               <form action="#" method="POST" name="registerForm" id="registerForm" class="col s12">

                     <div class="row">


                        <div class="input-field col s6">
                           <input id="first_name" name="firstName" type="text" class="validate" required>
                           <label for="first_name">First Name</label>
                        </div>

                        <div class="input-field col s6">
                           <input id="last_name" name="lastName" type="text" class="validate" required>
                           <label for="last_name">Last Name</label>
                        </div>

                        <div class="input-field col s12">
                           <input id="email" name="email" type="email" class="validate" required>
                           <label for="email">E-mail</label>
                        </div>

                        <div class="input-field col s6">
                           <input id="password" name="password" type="password" class="validate" required>
                           <label for="password">Password</label>
                        </div>

                        <div class="input-field col s6">
                           <input id="confirm-password" name="confirmPassword" type="password" class="validate" required>
                           <label for="confirm-password">Confirm password</label>
                        </div>

                        <div class="col s6 left-align">
                           <a href="login.php" class="black-text">or Log in</a>
                        </div>

                        <div class="col s6 right-align">
                           <button id="register" class="btn waves-effect waves-light black" type="submit" name="register">Register
                           </button>
                        </div>

                     </div>

               </form>
         </div>
      </div>

      <?php
         if (isset($_SESSION['message'])) {
            echo '<div class="col s12 center-align container"><h5>'.$_SESSION["message"].'</h5></div>';

         }
      ?>
   
   </div>
   
   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>