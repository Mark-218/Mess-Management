<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
            <h1 class="mb-5">Most Popular Menu </h1>
        </div>
        

        
            <div class="container my-5">
                <div class="table-responsive">

                    <table class="table table-bordered">
                        <thead class="breadcrumb-item">
                            <tr class="h5">
                             
                                <th scope="col">#</th>
                                <th scope="col">Day</th>
                                <th scope="col">Breakfast</th>
                                <th scope="col">Breakfast Note</th>
                                <th scope="col">Lunch</th>
                                <th scope="col">Lunch Note</th>
                                <th scope="col">Dinner</th>
                                <th scope="col">Dinner Note</th>


                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            include('includes/dbcon.php'); 

                            $select = "select * from tbl_menu ";

                            $query = mysqli_query ($con, $select);

                             while( $result = mysqli_fetch_array($query)){


      ?>

                            <tr class="h6">
                                <td class="text-primary">
                                    <?php echo $result['ID']; ?>
                                </td>
                                <td>
                                    <?php echo $result['Day']; ?>
                                </td>
                                <td>
                                    <?php echo $result['Breakfast']; ?>
                                </td>
                                <td class="text-primary">
                                    <?php echo $result['Breakfast_note']; ?>
                                </td>
                                <td>
                                    <?php echo $result['Lunch']; ?>
                                </td>
                                <td class="text-primary">
                                    <?php echo $result['Lunch_note']; ?>
                                </td>
                                <td>
                                    <?php echo $result['Dinner']; ?>
                                </td>
                                <td class="text-primary">
                                    <?php echo $result['Dinner_note']; ?>
                                </td>

                                
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

