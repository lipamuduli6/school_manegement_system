 <?php include('header.php') 

?> 

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">SMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href=".php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <?php if (isset($_SESSION['login'])) {?>
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-user mr-2"></i>Account
        </a>
        
        <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#"> another Action</a>
          <a class="dropdown-item" href="logout.php">logout</a>
        </div>
        <?php } else { ?>
        <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i>login</a>
        <?php } ?>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="d-flex shadow" style="height:500px;background:linear-gradient(-45deg,navy 50%,transparent 50%)">
<div class="container-fluid my-auto">
    <div class="row">
        <div class="col-lg-6 my-auto">
            <h1 class="display-3 font-weight-bold">School Management System</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam commodi accusamus corrupti sunt omnis nisi, illum fuga labore id. Tempore libero.</p>
        <a href="" class="btn btn-lg btn-primary">call to Action</a>
            </div>
            <div class="col-lg-6 mt-5">
                <div class="col-8 mx-auto card">
                    <div class="card-body">
                        <h3>Addmission Form</h3>
                    <form action="" method="post">
                    
                    <div class="md-form">
                        <input type="text" id="form1" class="form-control">
                        <label for="form1">Your Name</label>
                    </div>
                    
                    <div class="md-form">
                        <input type="email" id="email" class="form-control">
                        <label for="email">Your Email</label>
                    </div>
                    
                    <div class="md-form">
                        <input type="text" id="mobile" class="form-control">
                        <label for="mobile">Your Mobile</label>
                    </div>
                   
                    <div class="md-form">
                        <input type="text" id="class" class="form-control">
                        <label for="class">Your Class</label>
                    </div>
                <button class="btn btn-lg btn-primary">Submit Form</button>


                    
                </form>
                    </div>

        </div>
    </div>
</div>

<!-- section start -->
<section class="py-5">
<div>
    <h2 class="text-center py-5">Our Course</h2>
</div>
<div class="container">
    <div class="row">
      <?php for ($i=0; $i < 12; $i++) { ?>
        <div class="col-lg-3 my-4">
            <div class="card">
                <div>
                    <img src="./img/sch1.jpg" alt="" class="img-fluid rounded-top">
                </div>
                <div class="card-body">
                <div class="card-text">
                    <b>Web Deisng & Development</b>
                    <b>Duration: </b>45 hours<br>
                    <b>price:</b> 4000/- Rs
                    <p>
                        <button class="btn btn-block btn-primary">Enroll Now</button>
                    </p>
            </div>
        </div>
        
            </div>
        </div>

    <?php } ?>

    
</div>
</div>

</section>

<section class="py-5 bg-light">
  <div class="text-center mb-5">
    <h2 class="font-weight-bold">Our Teacher</h2>
    <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas vitae animi odio ducimus nesciunt magni minus maxime accusantium voluptates id.</p>
</div>

<div class="container">
  <div class="row">
    <?php for ($i = 0; $i < 8;$i++){ ?>
    <div class="col-lg-3 my-4">
      <div class="card">
        <div class="col-7 position-absolute" style="top:-50px">
        <img src="./img/smschool2.jpg" alt="" class="mw-100 border rounded-circle">
    </div>
        <div class="card-body py-5 mt-4">
          <h4 class="card-title mb-0">Teacher's Name</h4>
          <p class="card-text">
            <b>course:</b>5<br>
            <b>Rating</b><i class="fa fa-star text-warning"></i>
            <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i>
            <i class="fa fa-star text-warning"></i>
        </p>
  </div>
</div>
</div>
<?php } ?>
</div>
</div>



</section>
        <!-- about us -->
  <section class="py-5">
    <div class="container">
    <div class="row">
      <div class="col-lg-6 py-5">
      <h2 class="font-weight-bold">About <br> School Manegement System</h2>
      <div class="pr-5">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, magni. Nemo sint inventore repellendus possimus facere enim tenetur veritatis totam, quidem error doloremque, nam repellat.
        </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia debitis, perspiciatis praesentium id dignissimos a quis corporis nulla architecto odio cumque molestiae impedit obcaecati rerum.</p>
    </div>
    <a href="about.us.php" class="btn btn-secondary">About</a>
    </div>
    <div class="col-lg-6" style="background:url(./img/bookl.jpg)">
     

    </div>
    </div>
    </div>
    </section>


      <!-- Achievment section -->
      <section class="py-5 text-white" style="background:#3923a7;">
        <div>
          <div class="container">
            <div class="row">
              <div class="col-lg-6 pr-5">
                <h2>Acheivement</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis commodi odit excepturi porro optio, quis explicabo praesentium eligendi, ab, molestiae modi iusto laudantium! Quisquam, tenetur?</p>
                <img src="./img/sch1.jpg" alt="" class="img-fluid rounded">
              </div>
              <div class="col-lg-6 my-auto">
                <div class="row">
                  <div class="col-lg-6 mb-4">
                    <div class="border rounded">
                      <div class="card-body text-center">
                        <span><i class=" text-warning fa-solid fa-graduation-cap"></i></span>
                        <h2 class="my-3 font-weight-bold h1 text">334</h2>
                        <hr class="border-warning">
                        <h4>Graduates</h4>
                      </div>
                  </div>
                </div>
                  <div class="col-lg-6 mb-4">
                  <div class="border rounded">
                      <div class="card-body text-center">
                        <span><i class=" text-warning fa-solid fa-graduation-cap"></i></span>
                        <h2 class="my-3 font-weight-bold h1 text">335</h2>
                        <hr class="border-warning">
                        <h4>Graduates</h4>
                      </div>
                  </div>
                  </div>
                  <div class="col-lg-6 mb-4">
                  <div class="border rounded">
                      <div class="card-body text-center">
                        <span><i class=" text-warning fa-solid fa-graduation-cap"></i></span>
                        <h2 class="my-3 font-weight-bold h1 text">336</h2>
                        <hr class="border-warning">
                        <h4>Graduates</h4>
                      </div>
                  </div>
                  </div>
                  <div class="col-lg-6 mb-4">
                  <div class="border rounded">
                      <div class="card-body text-center">
                        <span><i class=" text-warning fa-solid fa-graduation-cap"></i></span>
                        <h2 class="my-3 font-weight-bold h1 text">337</h2>
                        <hr class="border-warning">
                        <h4>Graduates</h4>
                      </div>
                  </div>
                  </div>
              </div>

               </div>
              </div>
          </div>   
    </div>
    </section>

         <!-- testimoniaals -->
        <section class="py-5">
          <div class="text-center mb-5">
            <h2 class="fonr-weight-bold">What People say's</h2>
              <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo unde consectetur suscipit eligendi, eos libero quasi eaque amet eius ullam beatae nobis natus vero dicta!</p>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-6">
      <div class="border rounded position:relative">
        <div class="p-4 text-center">
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam soluta illum dolores exercitationem. Doloribus rerum obcaecati accusamus est quia possimus, atque labore.
    </div>
    <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left:.9rem; opacity:.2"></i>
    </div>
    <div class="text-center mt-n2">
    <img src="./img/sch1.jpg" alt="" class="rounded-circle border" width="100px" height="100px">
    <h6 class="mb-0 font-weight-bold">Name Of Candidates</h6>
    <p><i>Designation</i></p>
    </div>
    </div>
    <div class="col-6">
      <div class="border rounded position:relative">
        <div class="p-4 text-center">
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam soluta illum dolores exercitationem. Doloribus rerum obcaecati accusamus est quia possimus, atque labore.
    </div>
    <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left:.9rem; opacity:.2"></i>
    </div>
    <div class="text-center mt-n2">
    <img src="./img/sch1.jpg" alt="" class="rounded-circle border" width="100px" height="100px">
    <h6 class="mb-0 font-weight-bold">Name Of Candidates</h6>
    <p><i>Designation</i></p>
    </div>
    </div>
    <div class="col-6">
      <div class="border rounded position:relative">
        <div class="p-4 text-center">
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam soluta illum dolores exercitationem. Doloribus rerum obcaecati accusamus est quia possimus, atque labore.
    </div>
    <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left:.9rem; opacity:.2"></i>
    </div>
    <div class="text-center mt-n2">
    <img src="./img/sch1.jpg" alt="" class="rounded-circle border" width="100px" height="100px">
    <h6 class="mb-0 font-weight-bold">Name Of Candidates</h6>
    <p><i>Designation</i></p>
    </div>
    </div>
    <div class="col-6">
      <div class="border rounded position:relative">
        <div class="p-4 text-center">
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam soluta illum dolores exercitationem. Doloribus rerum obcaecati accusamus est quia possimus, atque labore.
    </div>
    <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left:.9rem; opacity:.2"></i>
    </div>
    <div class="text-center mt-n2">
    <img src="./img/sch1.jpg" alt="" class="rounded-circle border" width="100px" height="100px">
    <h6 class="mb-0 font-weight-bold">Name Of Candidates</h6>
    <p><i>Designation</i></p>
    </div>
    </div>
    </div>
    </div>
    </section>

    <!-- footer section -->
    <footer class="footer bg-danger">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 mt-4 col-lg-3 text-center text-sm-start">
                <div class="information">
                    <h6 class="footer-heading text-uppercase text-white fw-bold">Information</h6>
                    <ul class="list-unstyled footer-link mt-4">
                        <li class="mb-1"><a href="#" class="text-white text-decoration-none fw-semibold">Events</a></li>
                        <li class="mb-1"><a href="#" class="text-white text-decoration-none fw-semibold">Our Team</a></li>
                        <li class="mb-1"><a href="#" class="text-white text-decoration-none fw-semibold">Upcoming Course</a></li>
                        <li class=""><a href="#" class="text-white text-decoration-none fw-semibold">New web</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 mt-4 col-lg-3 text-center text-sm-start">
                <div class="resources">
                    <h6 class="footer-heading text-uppercase text-white fw-bold">Resources</h6>
                    <ul class="list-unstyled footer-link mt-4">
                        <li class="mb-1"><a href="#" class="text-white text-decoration-none fw-semibold"> Online facility</a></li>
                        <li class="mb-1"><a href="#" class="text-white text-decoration-none fw-semibold">Website Tutorials</a></li>
                        <li class="mb-1"><a href="#" class="text-white text-decoration-none fw-semibold">Extra-ciriculum-act</a></li>
                        <li class=""><a href="#" class="text-white text-decoration-none fw-semibold">Special course</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 mt-4 col-lg-2 text-center text-sm-start">
              <div class="social">
                  <h6 class="footer-heading text-uppercase text-white fw-bold">Social</h6>
                  <ul class="list-inline my-4">
                    <li class="list-inline-item"><a href="#" class="text-white btn btn-primary mb-2"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-danger btn btn-light mb-2"><i class="fa-brands fa-square-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-white  btn btn-primary mb-2"><i class="fa-brands fa-square-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-white  btn btn-success mb-2"><i class="fa-brands fa-square-whatsapp"></i></a></li>
                </ul>
              </div>
          </div>
            <div class="col-sm-6 col-md-6 mt-4 col-lg-4 text-center text-sm-start">
              <div class="contact">
                  <h6 class="footer-heading text-uppercase text-white fw-bold">Contact Us</h6>
                  <address class="mt-4 m-0 text-white mb-1"><i class="bi bi-pin-map fw-semibold"></i> Bhubaneswar, BMC , Panchadeep</address>
                  <a href="tel:+" class="text-white mb-1 text-decoration-none d-block fw-semibold"><i class=" bi-telephone"></i>  234435654</a>
                  <a href="mailto:" class="text-white mb-1 text-decoration-none d-block fw-semibold"><i class="bi bi-envelope"></i> Gvit123@gmail.com</a>
                  <a href="" class="text-white text-decoration-none fw-semibold"><i class="bi bi-skype"></i> No.1 MC office</a>
              </div>
            </div>
        </div>
    </div>
    <div class="text-center bg-dark text-white mt-4 p-1">
    Copyright 2023-2023 All Right Reserved.<a href="./footer" class="text-light">School Manegement System</a>
    </div>
  </footer>




        

<?php include('footer.php') ?>

   








