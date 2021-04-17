
<?php
    include('../server/print-cv.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/print-cv.css">
    <title>Print CV</title>
  </head>
  <body>


    <div class="container-fluid py-3 pt-lg-5" id="dvContents">
        <div class="row">
            <div class="col-12 m-auto">
                <div class="card rounded-0">
                    <div class="card-body px-4 py-5">

                    <h3 class="h3-responsive text-capitalize text-info mb-0"><?php echo $userName; ?></h3>
                    <p><strong>Contact address :</strong></p>
                    <p><strong>Mobile :</strong> 0<?php echo $userPhone; ?></p>
                    <p><strong>E-mail :</strong> <?php echo $userEmail; ?></p>
                    <p class="text-capitalize"><strong>Present address :</strong> <?php echo $userAddress; ?></p>

                        <div class="my-5">
                            <h4 class="h4-responsive text-muted mb-0">Personal Profile</h4>
                            <hr class="mt-1">
                            <p class="py-2"><?php echo $userProfile; ?></p>
                        </div>

                        <div class="my-5">
                            <h4 class="h4-responsive text-muted mb-0">Education</h4>
                            <hr class="mt-1">
                            <div class="row">
                                <div class="col-4">
                                    <h5 class="h5-responsive font-weight-bold mb-3">Grad/Year</h5>
                                    <p><strong>[ Passing year : <?php echo $userSchoolpassyear; ?> ]</strong></p>
                                    <p><strong>Grade acieved :</strong></p>
                                    <br>
                                    <p><strong>[ Passing year : <?php echo $userCollegepassyear; ?> ]</strong></p>
                                    <p><strong>Grade acieved :</strong></p>
                                    <br>
                                    <p><strong>[ Passing year : <?php echo $userVarsitypasyear; ?> ]</strong></p>
                                    <p><strong>Grade acieved :</strong></p>
                                </div>
                                <div class="col-4">
                                    <h5 class="h5-responsive font-weight-bold mb-3">Group/Dept.</h5>
                                    <p class="text-muted text-capitalize"><strong>[ <?php echo $userSchoolgroup; ?> ]</strong></p>
                                    <p class="text-muted"><strong>[ <?php echo $userSchoolgrade; ?> ]</strong></p>
                                    <br>
                                    <p class="text-muted text-capitalize"><strong>[ <?php echo $userCollegegroup; ?> ]</strong></p>
                                    <p class="text-muted"><strong>[ <?php echo $userCollegegrade; ?> ]</strong></p>
                                    <br>
                                    <p class="text-muted text-capitalize"><strong>[ <?php echo $userDept; ?> ]</strong></p>
                                    <p class="text-muted"><strong>[ <?php echo $userCGPA; ?> ]</strong></p>
                                </div>
                                <div class="col-4">
                                    <h5 class="h5-responsive font-weight-bold mb-3">Institute</h5>
                                    <p class="text-muted text-capitalize"><strong>[ <?php echo $userSchool; ?> ]</strong></p>
                                    <br><br>
                                    <p class="text-muted text-capitalize"><strong>[ <?php echo $userCollege; ?> ]</strong></p>
                                    <br><br>
                                    <p class="text-muted text-capitalize"><strong>[ <?php echo $userVarsity; ?> ]</strong></p>
                                </div>
                            </div>
                        </div>


                        <div class="my-5">
                            <h4 class="h4-responsive text-muted mb-0">Skills</h4>
                            <hr class="mt-1">
                            <div class="row">
                                <div class="col">
                                    <ul class="pl-3">
                                        <li><?php echo $userSkill1; ?></li>
                                        <li><?php echo $userSkill2; ?></li>
                                        <li><?php echo $userSkill3; ?></li>
                                        <li><?php echo $userSkill4; ?></li>
                                        <li><?php echo $userSkill5; ?></li>
                                        <li><?php echo $userSkill6; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="my-5">
                            <h4 class="h4-responsive text-muted mb-0">Permanent Address</h4>
                            <hr class="mt-1">
                            <div class="row">
                                <div class="col">
                                    <p><?php echo $PermanentAddress; ?></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="container-fluid pb-5">
        <div class="row">
            <div class="col-12 m-auto">
                <button type="button" class="btn btn-primary shadow-none rounded-0 float-right py-1 px-3" onclick="PrintDiv();" />Print Now</button>
            </div>
        </div>
    </div>

      
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
        function PrintDiv() {
        window.print();
        }
    </script>
  </body>
</html>