<?php require_once("partials2/header.php"); ?>


<section>

    <div class="signin"> 

        <div class="content"> 

          <h2>Sign In</h2> 

          <div class="form">
            <form action="logins.php" method="post" class="form">

              <div class="inputBox"> 

                <input type="email" name="email" required> <i>email</i> 

              </div> 

              <div class="inputBox"> 

                <input type="password" name="password" required> <i>Password</i> 

              </div> 

              <div class="links"> <a href="#">Forgot Password</a> <a href="#">Signup</a> 

              </div> 

              <div class="inputBox"> 

                <input type="submit" value="Login" name="login"> 

              </div>
            
            </form> 

          </div> 

        </div> 

    </div> 

</section>

<?php include_once("partials/footer.php"); ?>