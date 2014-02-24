<div class="container">

<div id="content">

<div class="reg_form">

 <?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("login/registration"); ?>
 <h4 class="text-center">Sign Up</h4>
  <h4 class="text-center">It's free and anyone can join</h4>
   <p class="text-center">
  <label for="email_address">First Name:</label>
  <input type="text" id="firstname" name="firstname" value="<?php echo set_value('firstname'); ?>" />
  </p>
   <p class="text-center">
  <label for="email_address">Last Name:</label>
  <input type="text" id="lastnamen" name="lastname" value="<?php echo set_value('lastname'); ?>" />
  </p>
  <p class="text-center">
  <label for="user_name">User Name:</label>
  <input type="text" id="username" name="username" value="<?php echo set_value('username'); ?>" />
  </p>
    <p class="text-center">
  <label for="email_address">Email Address:</label>
  <input type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" />
  </p>
   <p class="text-center">
  <label for="email_address">Institution:</label>
  <input type="text" id="institute" name="institute" value="<?php echo set_value('institute'); ?>" />
  </p>
    <p class="text-center">
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
  </p>
    <p class="text-center">
  <label for="con_password">Confirm Password:</label>
  <input type="password" id="con_password" name="con_password" value="<?php echo set_value('con_password'); ?>" />
  </p>
    <p class="text-center">
  <input type="submit" class="greenButton" value="Submit" />
  </p>
 <?php echo form_close(); ?>
</div><!--<div class="reg_form">-->
</div><!--<div id="content">-->
</div>