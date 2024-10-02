<?php include('confg.php'); ?>
<?php session_start(''); ?>
<?php
     $student_user_id = $_SESSION['student_user_id'];
     if(!isset($student_user_id)) {
        header('location:login.php');

     }
?>
<?php include('header.php'); ?>
<dic class="container">
    <div class="col-md-3">
        <?php include('Admin\sidebar.php');?>
    </div>
    <div class="col-md-9">
     <h3>DASHBOARD</h3>
    </div>
    </div>
    <?php include('footer.php');?>










    