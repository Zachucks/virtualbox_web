<?php include_once 'header.php'; ?>

<div class="main_content login_div">
  <div class="tab-pane fade show active" id="login">
    <form id="login_form">
    	<h4 class="text-primary">Login</h4>
    	<span id="login_output"></span>
    	Username:<input type="text" class="form-control login_control" value="" name="login_username" placeholder="Username" autofocus="" required="">
    	Password:<input type="password" class="form-control login_control" value="" name="login_password" placeholder="Password" required="">
    	<input type="submit" class="btn btn-success" name="submit" value="Login">
    </form>
  </div>
</div>

<?php include_once 'footer.php'; ?>
