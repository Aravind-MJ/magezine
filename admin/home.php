<?php 
if($_POST){
session_start();
include "db.php";
$email=$_POST['email'];
$password=$_POST['password'];
$sql = sprintf("SELECT * FROM login WHERE email='%s' AND password='%s'",$email,$password);
$rs = mysqli_query($con,$sql);
$count = mysqli_num_rows($rs);
if($count==1){
  $_SESSION['login_user']="admin";
}
else{
  echo '<script> alert("Email or Password is incorrect"); window.location.href="index.php";</script>';
}

}
include "header.php"; ?>

<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
        </section>    

        <!-- Body content -->

      </div><!-- /.content-wrapper -->
<?php include "footer.php"; ?>