<?php
include_once ('connection.php');

$row = array();

foreach( $data['user_detail']  as $rows){
  $row = $rows;

?>
<div class="container" style=" width : 500px; ">
<a href="http://localhost/MVC_lesson/MVC_project/index.php?action=login" class="pull-right">Log out</a>
    <form method="POST" action='index.php?action=update_user&id=<?php echo $row['id'] ?>' >
  <div class="form-group">
    <label >Name</label>
    <input type="text" value="<?php echo $row['name'] ?>"  name="name" class="form-control">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label>Username</label>
    <input type="text" value="<?php echo $row['username'] ?>" name="username" class="form-control">

  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" value="<?php echo $row['password'] ?>" name="password" class="form-control">
  </div>
      <button type="submit" name="update_user" class="btn btn-primary">Update User</button>
</form>
</div>
   <?php 
}
   ?>