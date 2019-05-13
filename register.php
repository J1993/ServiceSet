<?php

   require_once 'controllers/UserController.php';

   $user = new UserController();
   $user -> register();

   #session_start();
   #$_SESSION['variable'] = 'data';
   #session_destroy();

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

               <form class="col s12">

                     <div class="row">


                        <div class="input-field col s6">
                           <input id="first_name" type="text" class="validate">
                           <label for="first_name">First Name</label>
                        </div>

                        <div class="input-field col s6">
                           <input id="last_name" type="text" class="validate">
                           <label for="last_name">Last Name</label>
                        </div>

                        <div class="input-field col s12">
                           <input id="email" type="email" class="validate">
                           <label for="email">E-mail</label>
                        </div>

                        <div class="input-field col s6">
                           <input id="password" type="password" class="validate">
                           <label for="password">Password</label>
                        </div>

                        <div class="input-field col s6">
                           <input id="confirm-password" type="password" class="validate">
                           <label for="confirm-password">Confirm password</label>
                        </div>

                        <div class="col s6 left-align">

                           <a href="login.php" class="black-text">or Log in</a>

                        </div>

                        <div class="col s6 right-align">
                           <button class="btn waves-effect waves-light black" type="submit" name="action">Log in
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
