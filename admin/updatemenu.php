<?php include('includes/header.php');?>

<body>

    <?php include('includes/menubar.php');?>

    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Update Menu</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">UpdateMenu</li>
                </ol>
            </nav>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->



    <?php

include('includes/dbcon.php'); 

$ids = $_GET['id'];

$showquery ="select * from tbl_menu where id=$ids";

$showdata = mysqli_query($con,$showquery);

$arrdata = mysqli_fetch_array($showdata);


if (isset($_POST['update'])) {
 
 
   $Breakfast= $_POST['Breakfast'];
   $Breakfast_note= $_POST['Breakfast_note'];
   $Lunch= $_POST['Lunch'];
   $Lunch_note=$_POST['Lunch_note'];
   $Dinner= $_POST['Dinner'];
   $Dinner_note= $_POST['Dinner_note'];
   

   $updateq = "UPDATE tbl_menu SET  Breakfast='$Breakfast',Breakfast_note='$Breakfast_note',Lunch='$Lunch',Lunch_note='$Lunch_note',Dinner='$Dinner',Dinner_note='$Dinner_note' WHERE ID=$ids";

 $result = mysqli_query($con , $updateq);



}

?>




    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Admin</h5>
                <h1 class="mb-5">Update
                    <?php echo $arrdata['Day']; ?> Menu
                </h1>
            </div>


            <div class="container">
                <form method="post">
                    <div class="row">
                        <div class="col-sm">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="Breakfast" name="Breakfast"
                                        value="<?php echo $arrdata['Breakfast']; ?>" placeholder="Breakfast">
                                    <label for="email">Breakfast</label>
                                </div>
                            </div>
                            <br />
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="Lunch" name="Lunch"
                                        value="<?php echo $arrdata['Lunch']; ?>" placeholder="Lunch">
                                    <label for="email">Lunch</label>
                                </div>
                            </div>
                            <br />
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="Dinner" name="Dinner"
                                        value="<?php echo $arrdata['Dinner']; ?>" placeholder="Dinner">
                                    <label for="email">Dinner</label>
                                </div>
                            </div>
                            <br />
                        </div>
                        <div class="col-sm">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="Breakfast_note" name="Breakfast_note"
                                        value="<?php echo $arrdata['Breakfast_note']; ?>" placeholder="Breakfast Note">
                                    <label for="email">Breakfast Note</label>
                                </div>
                            </div>
                            <br />
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="Lunch_note" name="Lunch_note"
                                        value="<?php echo $arrdata['Lunch_note']; ?>" placeholder="Lunch Note">
                                    <label for="email">Lunch Note</label>
                                </div>
                            </div>
                            <br />
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="Dinner_note" name="Dinner_note"
                                        value="<?php echo $arrdata['Dinner_note']; ?>" placeholder="Dinner Note">
                                    <label for="email">Dinner Note</label>
                                </div>
                            </div>
                            <br />
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" name="update" type="submit">Update Menu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <?php include('includes/footer.php');?>