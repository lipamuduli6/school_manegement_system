<?php include('connect.php') ?>
<?php
  if(isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $duration = $_POST['duration'];
    $image = $_FILES["thumbnail"]["name"];
    $today = date('Y-m-d');

    $sql = "INSERT INTO `course` (name, category, duration, date)
            VALUES ('$name', '$category', '$duration', '$today')";
    $result = mysqli_query($conn, $sql);

    if($result){
        header('location:indexCor.php');
    } else {
        die("Data not inserted: " . mysqli_error($conn));
    }
  }
?>

<!-- Rest of your HTML code -->


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style9.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Add your CSS styles here */
        body {
            margin: 0;
            padding: 0;
        }

        .sidebar {
            height: 100vh; /* Full height */
            position: fixed;
            top: 0;
            left: 0;
            background-color: #2E86C1 ; /* Set your desired background color */
            padding-top: 60px; /* Adjust based on your header's height */
            overflow-y: hidden;
        }

        .sidebar a.active {
            background-color: #4CAF50;
            color: white;
        }

        .submenu {
            display: none;
        }

        .xyz {
            max-height: 700px;
            overflow-y: auto;
            position: relative;
        }

        .xyz::-webkit-scrollbar {
            width: 2px;
        }

        .xyz::-webkit-scrollbar-thumb {
            background-color: #a0a0a0;
        }

        .submenu a i {
            margin-right: 10px;
        }
        

        .collapsed .submenu a span {
            display: none;
        }
        .collapsed .submenu a {
    display: none;
}
        

        /* Additional styles for the centered box */
        .center-box {
            position: fixed;
    top: 50%;
    left: 60%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    width: 1000px; 
    padding: 70px ;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 225, 0.5);
    transition: left 0.5s;
    
            
        }
        #check:checked ~ .center-box{
        left: 830px;
        
        }
        

        .logout-btn {
            position: fixed;
            top: 10px;
            right: 10px;
             transition: right 0.5s;
        }
        check:checked ~ .logout-btn {
        right: 30px;
        
        }
    </style>
</head>

<body>
    <div class="btn logout-btn">
        <button id="logout" value="Logout" style="padding: 10px 30px; border-radius: 5px; background: #527CE6; color: #fff; font-weight: 550; border: none;">
            <i class="fa fa-sign-out" aria-hidden="true"></i><span style="margin-left: 10px; font-size: 18px;">Logout</span>
        </button>
    </div>

    <input type="checkbox" id="check" style="padding: 5px 20px;"></input>

    <label for="check">
        <i class="fa fa-bars" aria-hidden="true" id="sidebar-btn"></i>
    </label>

    <div class="sidebar">
        <center>
            <h4>GVIT</h4>
        </center>
        <div class="xyz">
            <a href="index1.php"> <i class="fas fa-tachometer-alt"></i><span style="font-size: 20px;">DashBoard</span></a>

            <a href="indexCD.php" onclick="toggleSubMenu();"> <i class="fas fa-chart-pie"></i><span style="font-size: 20px;" >MIS</span></a>
            <div class="submenu">
            <a href="manage-product.jsp"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Accountes</span></a>
                <a href="manage-department.jsp"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Classes</span></a>
            <a href="manage-staff.jsp"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Classes Routines</span></a>
            <a href="manage-salary.jsp"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Examination</span></a>
            <a href="download-invoice.jsp"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Attendance</span></a>
            <a href="manage-leave.jsp"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Accounting</span></a>
            <a href="manage-leave.jsp"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Event</span></a>
            <a href="manage-leave.jsp"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage salary</span></a>
            <a href="manage-leave.jsp"><i class="fa fa-circle" aria-hidden="true"></i><span>Manag school panel</span></a>
            </div>
        </div>
    </div>

    <!-- Centered box for the welcome message -->
     <!-- Content Header (Page header) -->
     <div class="content-header pt-4">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><h2 style="margin-left:177px;">Manage Courses </h2></h1>
            
          </div><!-- /.col -->
          
          <?php
           
            if(isset($_SESSION['success_msg']))
            {?>
              <div class="col-12">
                <small class="text-success" style="font-size:16px"><?=$_SESSION['success_msg']?></small>
              </div>
            <?php 
              unset($_SESSION['success_msg']);
            }
          ?>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
      <div class="container">
        <?php
        if (isset($_REQUEST['action'])) { ?>
        <!-- Info boxes -->
        <a href="indexCor.php">Back</a>
        <div class="card">
          <div class="card-header py-2">
            <h3 class="card-title">
              Add New Course
            </h3>
          </div>
          
          <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="name">Course Name</label>
                <input type="text" name="name" placeholder="Course Name" required class="form-control">
              </div>
              <div class="form-group">
                <label for="category">Course Category</label>
                <select name="category" id="category" class="form-control">
                  <option value="">Select Category</option>
                  <option value="web-design-and-development">Web Design & Development</option>
                  <option value="app-developement">App Development</option>
                </select>
              </div>
              <div class="form-group">
                <label for="duration">Course Duration</label>
                <input type="text" name="duration" id="duration" class="form-control" placeholder="Course Duration" required>
              </div>
              <div class="form-group">
                <input type="file" name="thumbnail" id="thumbnail" required>
              </div>
              <button name="submit" class="btn btn-success">
                Submit
              </button>
            </form>
          </div>
        </div>
        <!-- /.row -->
        <?php }else{?>
        <!-- Info boxes -->
        <div class="card">
          <div class="card-header py-2">
            <h3 class="card-title">
              Courses
            </h3>
            <div class="card-tools">
              <a href="?action=add-new" class="btn btn-success btn-xs"><i class="fa fa-plus mr-2"></i>Add New</a>
            </div>
          </div>
          <div class="card">
            <div class="table-responsive bg-white">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Duration</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                      <?php
                      $count = 1;
                      $curse_query = mysqli_query($db_conn, 'SELECT * FROM sms_project');
                      while ($course = mysqli_fetch_object($curse_query)) {?>
                      <tr>
                        <td><?=$count++?></td>
                        <td><img src="../dist/uploads/<?=$course->image?>" height="100" alt="<?=$course->name?>" class="border"></td>
                        <td><?=$course->name?></td>
                        <td><?=$course->category?></td>
                        <td><?=$course->duration?></td>
                        <td><?=$course->date?></td>
                      </tr>

                      <?php } ?>

                    </tbody>
              
               
              </table>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <?php } ?>
      </div><!--/. container-fluid -->
    </section>
         
    <script>
        function toggleSubMenu() {
            var submenu = document.querySelector('.submenu');
            var sidebar = document.querySelector('.sidebar');
            var isCollapsed = sidebar.classList.toggle('collapsed');

            // Show/hide submenu based on the collapsed state
            submenu.style.display = isCollapsed ? 'none' : 'block';
        }

        document.getElementById('logout').addEventListener('click', function () {
            // Add your logout logic here

            // Show an alert message
            alert('Logout successful!');

            // Redirect to login.jsp
            window.location.href = 'login.php';
        });
    </script>
</body>

</html>