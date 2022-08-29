<?php include('includes/header.php');?>

<body>

    <?php include('includes/menubar.php');?>

    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Show Menu</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">ShowMenu</li>
                </ol>
            </nav>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Admin</h5>
                <h1 class="mb-5">Show Menu</h1>
            </div>
            <div class="container my-5">
                <div class="table-responsive">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Day</th>
                                <th scope="col">Breakfast</th>
                                <th scope="col">Breakfast Note</th>
                                <th scope="col">Lunch</th>
                                <th scope="col">Lunch Note</th>
                                <th scope="col">Dinner</th>
                                <th scope="col">Dinner Note</th>
                                <th scope="col">Edit</th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            include('includes/dbcon.php'); 

                            $select = "select * from tbl_menu ";

                            $query = mysqli_query ($con, $select);

                             while( $result = mysqli_fetch_array($query)){


      ?>

                            <tr>
                                <td>
                                    <?php echo $result['ID']; ?>
                                </td>
                                <td>
                                    <?php echo $result['Day']; ?>
                                </td>
                                <td>
                                    <?php echo $result['Breakfast']; ?>
                                </td>
                                <td>
                                    <?php echo $result['Breakfast_note']; ?>
                                </td>
                                <td>
                                    <?php echo $result['Lunch']; ?>
                                </td>
                                <td>
                                    <?php echo $result['Lunch_note']; ?>
                                </td>
                                <td>
                                    <?php echo $result['Dinner']; ?>
                                </td>
                                <td>
                                    <?php echo $result['Dinner_note']; ?>
                                </td>

                                <td scope="col " data-bs-toggle="tooltip" data-bs-placement="top" title="UPDATE"> <a href="updatemenu.php?id=<?php echo $result['ID']; ?>" > <i class="fas fa-edit "></i></a></td>

                            </tr>

                            <?php
    }

      ?> 
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
    </div>




     <!-- Footer Start -->
     <?php include('includes/footer.php');?>