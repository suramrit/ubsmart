<h2><?php echo $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('signup/index'); ?>

<label for= "username">Username</label>
<input type="input" name="username" /><br />

<label for="password">Password</label>
<input type="input" name="password" /><br />

<label for="email">Email</label>
<input type="input" name="email" /><br />

<input type="submit" name="submit" value="Login" />

</form>
