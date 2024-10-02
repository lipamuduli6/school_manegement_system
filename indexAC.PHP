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
            <a href="index1.jsp"> <i class="fas fa-tachometer-alt"></i><span style="font-size: 20px;">DashBoard</span></a>

            <a href="#" onclick="toggleSubMenu();"> <i class="fas fa-chart-pie"></i><span style="font-size: 20px;" >MIS</span></a>
            <div class="submenu">
            <a href="indexAC.php"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Accountes</span></a>
            <a href="indexB.php"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Classes</span></a>
            <a href="indexCor.php"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Classes Routines</span></a>
            <a href=""><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Examination</span></a>
            <a href=""><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Attendance</span></a>
            <a href=""><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Accounting</span></a>
            <a href=""><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Event</span></a>
            <a href=""><i class="fa fa-circle" aria-hidden="true"></i><span>Manage salary</span></a>
            <a href=""><i class="fa fa-circle" aria-hidden="true"></i><span>Manag school panel</span></a>
            </div>
        </div>
    </div>

    <!-- Centered box for the welcome message -->
     <!-- Content Header (Page header) -->
     <section class="content">
  <div class="container">

    
   
      <div class="card pt-4">
        <div class="card-body" id="form-container">
          
            <form action="" id="student-registration" method="post">
              <fieldset class="border border-secondary p-3 form-group">
                <legend class="d-inline w-auto h6">Student Information</legend>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="">Full Name</label>
                      <input type="text" class="form-control" placeholder="Full Name" name="name">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">DOB</label>
                      <input type="date" required class="form-control" placeholder="DOB" name="dob">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">Mobile</label>
                      <input type="text" class="form-control" placeholder="Mobile" name="mobile">
                    </div>
                    </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" required class="form-control" placeholder="Email Address" name="email">
                    </div>
                  </div>
                   <!-- Address Fields -->
                   <div class="col-lg-12">
                    <div class="form-group">
                      <label for="">Address</label>
                      <input type="text" class="form-control" placeholder="Address" name="address">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">Country</label>
                      <input type="text" class="form-control" placeholder="Country" name="country">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">State</label>
                      <input type="text" class="form-control" placeholder="State" name="state">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">Pin/Zip Code</label>
                      <input type="text" class="form-control" placeholder="Pin/Zip Code" name="zip">
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset class="border border-secondary p-3 form-group">
                <legend class="d-inline w-auto h6">Parents Information</legend>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="">Father's Name</label>
                      <input type="text" class="form-control" placeholder="Father's Name" name="father_name">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="">Father's Mobile</label>
                      <input type="text" class="form-control" placeholder="Father's Mobile" name="father_mobile">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="">Mother's Name</label>
                      <input type="text" class="form-control" placeholder="Mother's Name" name="mother_name">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="">Mothers's Mobile</label>
                      <input type="text" class="form-control" placeholder="Mothers's Mobile" name="mother_mobile">
                    </div>
                  </div>
                  <!-- Address Fields -->
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="">Address</label>
                      <input type="text" class="form-control" placeholder="Address" name="parents_address">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">Country</label>
                      <input type="text" class="form-control" placeholder="Country" name="parents_country">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">State</label>
                      <input type="text" class="form-control" placeholder="State" name="parents_state">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">Pin/Zip Code</label>
                      <input type="text" class="form-control" placeholder="Pin/Zip Code" name="parents_zip">
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset class="border border-secondary p-3 form-group">
                <legend class="d-inline w-auto h6">Last Qualification</legend>
                <div class="row">

                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="">School Name</label>
                      <input type="text" class="form-control" placeholder="School Name" name="school_name">
                    </div>
                  </div>
                  <div class="col-lg">
                    <div class="form-group">
                      <label for="">Class</label>
                      <input type="text" class="form-control" placeholder="Class" name="previous_class">
                    </div>
                  </div>
                  <div class="col-lg">
                    <div class="form-group">
                      <label for="">Status</label>
                      <input type="text" class="form-control" placeholder="Status" name="status">
                    </div>
                  </div>
                  <div class="col-lg">
                    <div class="form-group">
                      <label for="">Total Marks</label>
                      <input type="text" class="form-control" placeholder="Total Marks" name="total_marks">
                    </div>
                  </div>
                  <div class="col-lg">
                    <div class="form-group">
                      <label for="">Obtain Marks</label>
                      <input type="text" class="form-control" placeholder="Obtain Marks" name="obtain_mark">
                    </div>
                  </div>
                  <div class="col-lg">
                    <div class="form-group">
                      <label for="">Percentage</label>
                      <input type="text" class="form-control" placeholder="Percentage" name="previous_percentage">
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset class="border border-secondary p-3 form-group">
                <legend class="d-inline w-auto h6">Admission Details</legend>
                <div class="row">
                  <div class="col-lg">
                    <div class="form-group">
                      <label for="">Class</label>
                      <select name="class" id="class" class="form-control">
                        <option value="">Select Class</option>
                        <div class="col-lg">
                    <div class="form-group" id="section-container">
                      <label for="section">Select Section</label>
                      <select require name="section" id="section" class="form-control">
                        <option value="">-Select Section-</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg">
                    <div class="form-group">
                      <label for="">Subject Streem</label>
                      <input type="text" class="form-control" placeholder="Subject Streem" name="subject_streem">
                    </div>
                  </div>
                  <div class="col-lg">
                    <div class="form-group">
                      <label for="">Date of Admission</label>
                      <input type="date" class="form-control" placeholder="Date of Admission" name="doa">
                    </div>
                  </div>
                </div>
              </fieldset>
              <div class="form-group">
                <label for="online-payment"><input type="radio" name="payment_method" value="online" id="online-payment"> Online Payment</label>
                <label for="offline-payment"><input type="radio" name="payment_method" value="offline" id="offline-payment"> Offline Payment</label>
              </div>
              <input type="text" name="user">
              <!-- <input type="hidden" name="type" value="<?php echo $_REQUEST['user'] ?>"> -->
              <button type="submit" name="submit" class="btn btn-primary"><span id="loader" style='display:none'><i class="fas fa-circle-notch fa-spin"></i></span> Register</button>
            </form>
            <form action="" id="registration-fee" method="post">
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="">Reciept Number</label>
                    <input type="text" name="reciept_number" placeholder="Reciept Number" class="form-control">
                  </div>

                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="">Registration Fee</label>
                    <input type="text" name="registration_fee" placeholder="Registration Fee" class="form-control">
                  </div>
                </div>

              </div>
              <input type="hidden" name="std_id" value="<?php echo isset($_GET['std_id']) ? $_GET['std_id'] : '' ?>">
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>

         
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