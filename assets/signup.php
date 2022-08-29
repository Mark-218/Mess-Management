<!-- Reservation Start -->
<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/y65wC-x2g9o" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Enquiry now</h5>
                        <h1 class="text-white mb-4">Enquiry now Online</h1>
                        <form method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating " id="phone" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" name="contact" id="phone" placeholder="Contact No" data-target="#date3"/>
                                        <label for="datetime">Contact No</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" name="plan" id="select1">
                                          <option value="Basic">Basic - 1300/month </option>
                                          <option value="Standard">Standard - 1800/month </option>
                                          <option value="Premium">Premium - 2700/month </option>
                                        </select>
                                        <label for="select1">Special Plan</label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating " id="address" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" id="address" name="address" placeholder="Contact No" data-target="#date3"/>
                                        <label for="address">Address</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" id="message" name="note" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Enquiry Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation end -->


        <?php 
        
        include('includes/dbcon.php'); 
        if (isset($_POST['submit'])) {
 

            $name= $_POST['name'];
            $email= $_POST['email'];
            $contact= $_POST['contact'];
            $plan= $_POST['plan'];
            $address= $_POST['address'];
            $note= $_POST['note'];
            
            $insertq = "  INSERT INTO  tbl_signup (  uname, uemail, ucontact, uplan, uaddress, unote	) VALUES ('$name',  '$email', '$contact', '$plan', '$address', '$note' )" ;
         
                $result = mysqli_query($con , $insertq);

              /*  if ($result){

  
                    ?>
                      <script>
                          alert("Details submitted successfully");
                  
                      </script>
                      <?php
                    
                   }else{
                   
                    ?>
                      <script>
                          alert("Details not submit");
                  
                      </script>
                  
                    <?php
                   }
              */
         
         }
         

        ?>
