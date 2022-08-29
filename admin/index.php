<?php

session_start();
                            include('includes/dbcon.php'); 


if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = " select * from  admin where Username='$username' and Password='$password' ";
	$query = mysqli_query($con,$sql);

    $row = mysqli_num_rows($query);
		if($row == 1){
			
			header('location:home.php');
		}else{
			
			header('location:index.php');
		}

}




?>


<?php include('includes/header.php');?>

<body>



    </div>
    <!-- Navbar & Hero End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Admin</h5>
                <h1 class="mb-5">Admin Login</h1>
            </div>
            <div class="row g-4">

                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s" style="margin-top: -50px;">

                    <img class="flex-shrink-0 img-fluid rounded" src="img/admin.png" alt="Admin">


                </div>
                <div class="col-md-6" style="margin-top: 100px;">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <form method="post">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="user"
                                            placeholder="Username">
                                        <label for="name">Username</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="email" name="pass"
                                            placeholder="Password">
                                        <label for="email">Password</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" name="submit"
                                        type="submit">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>