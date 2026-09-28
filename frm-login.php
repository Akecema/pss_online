<?php
/**
 * frm-login.php
 * Part of: Core / entry-point script
 * Filename suggests: frm login
 *
 * Behavior: processes submitted form data ($_POST).
 *
 * NOTE: this summary was generated automatically by static analysis during
 * the PHP8 migration (looking at queries/includes/superglobals actually used
 * in this file). It describes *what the code touches*, not necessarily *why* -
 * treat it as a starting point and refine as you work in this file.
 */
?>
 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8') ?>" method="post" id="loginform" class="form-vertical" >
				 <h2 class="pss-title">Welcome to the <strong>PSS Portal</strong></h2>
                <!--<div class="control-group">-->
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input name="username" type="text" placeholder="Username" autocomplete="username" />
                        </div>
                    </div>
               <!-- </div>-->
                <!--<div class="control-group">-->
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input name="pass" type="password" placeholder="Password" autocomplete="current-password" />
                        </div>
                    </div>
                <!--</div>-->
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Forgot password?</a></span>
                    <span class="pull-right"><input name="submit" type="submit" value="Sign in" class="btn btn-success"/></span>
                </div>
            </form>
  <form id="recoverform" action="forgot_password.php" class="form-vertical" data-remote="true" method="post">
				<p class="pss-note">Enter your username and e-mail address below.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-user"></i></span> <input type="text" name="user_name" size="20"  id="user_name" value="<?php if(isset($_POST['user_name'])) echo htmlspecialchars($_POST['user_name'], ENT_QUOTES, 'UTF-8'); ?>">
                        </div>
                    </div>
                   
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span> 
                       <input type="text" name="email"  size="50" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8'); ?>">
                </div>
                    </div>
               <div class="form-actions">
                   <span class="pull-left"><a href="index.php" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
               <span class="pull-right"><input name="submit2" type="submit" class="btn btn-info"  value="ENTER" ></span>
               </div>
            </form>