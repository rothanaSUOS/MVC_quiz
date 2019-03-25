<?php
include_once ('connection.php');

$row = array();

foreach( $data['employee_detail']  as $rows){
  $row = $rows;

?>
<div class="container" style=" width : 500px; ">
<a href="http://localhost/MVC_lesson/MVC_project/index.php?action=login" class="pull-right">Log out</a>
    <form method="POST" action='index.php?action=update&id=<?php echo $row['id'] ?>' >
  <div class="form-group">
    <label >Firstname</label>
    <input type="text" value="<?php echo $row['firstname'] ?>"  name="firstname" class="form-control" placeholder="Enter firstname">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label>Lastname</label>
    <input type="text" value="<?php echo $row['lastname'] ?>" name="lastname" class="form-control" placeholder="Enter Lastname">

  </div>
  <div class="form-group">
    <label>Age</label>
    <input type="text" value="<?php echo $row['age'] ?>" name="age" class="form-control"  placeholder="Age">
  </div>
  <div class="form-group">
    <label>Salary</label>
    <input type="text"value="<?php echo $row['salary'] ?>"  name="salary" class="form-control" placeholder="Salary">
  </div>
      <button type="submit" name="update" class="btn btn-primary">Update Row</button>
</form>
</div>

   <?php 
}
   ?>