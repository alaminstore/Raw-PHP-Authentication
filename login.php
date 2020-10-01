    <?php
          include 'inc/header.php ';
          include 'lib/User.php ';
          Session::checkLogin();
    ?>
    <?php
          $user = new User();
          if ($_SERVER['REQUEST_METHOD'] == 'POST'  && isset($_POST['login'])){
             $usrLogin = $user->userLogin($_POST);
          }
    ?>

     <div class=" panel panel-default">
     	<div class="panel-heading">
     		<h2> User Login</h2>
     	</div>
     	<div class="panal-body">
         <div style="max-width:500px;margin:30px auto;">
        <?php
            
            if (isset($usrLogin)) {
                echo $usrLogin;
            }
        ?>
           <form action="" method="POST">
              <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="text" name="email" id="email" placeholder="Email" class="form-control" autocomplete="off">
              </div>
              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" placeholder="Password" id="password" class="form-control" autocomplete="new-password">
              </div>
              <button type="submit"  name="login" class="btn btn-success">Login</button>
           </form>
         </div>
     	</div>
     </div>

     <?php
         include 'inc/footer.php ';
     ?>

