
<?php
  include('../server/profile.php');
  include('../server/save-info.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/profile.css">
    <title><?php echo $selected_user_name; ?></title>
  </head>
  <body>

    <header>
        <div class="headBox flex-center flex-column text-center">
            <img src="../images/avatar.png" class="img-fluid">
            <h1 class="h1-responsive text-white mb-0">Welcome <?php echo $selected_user_name; ?></h1>
            <p class="text-white mb-3"><?php echo $selected_user_mail; ?></p>
            <form method="post">
                <input type="submit" name="logout" value="Logout" class="btn btn-outline-light px-3 py-1 rounded-0 shadow-none" />
            </form>
        </div>
    </header>

  <div class="container main pb-3">
    <div class="row">
      <div class="col-12 text-center py-3 py-lg-5">
        <!-- <h1 class="h1-responsive text-muted">Chose a template</h1> -->
        <h1 class="h1-responsive text-muted mb-0">Make Your Personal CV</h1>
      </div>
      <div class="col-12 col-md-10 m-auto py-3 px-2 px-sm-3 mb-lg-0">

        <!-- <div class="card border-0 rounded-0 text-white py-0">
          <img class="card-img" src="../images/background.jpg">
          <div class="card-img-overlay text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text mb-0">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div> -->
        <div class="card border-0 rounded-0">
          <div class="card-header px-2 border-0 bg-white pt-3">
            <h6 class="h6-responsive text-danger">* Give Information</h6>
          </div>
          <div class="card-body px-2">
          
          <p class="text-success"><?php echo $success; ?></p>
          <form method="post">
            <!-- <input type="hidden" name="userId" value='<?php echo $sessionId; ?>'> -->
            
            <div class="row">
               <div class="col-12 col-sm-6 pr-sm-1">
                <div class="form-group mb-2">
                  <input type="text" name="username" class="form-control form-control-sm rounded-0 shadow-none" required placeholder="Enter full name">
                </div>
               </div>
               <div class="col-12 col-sm-6 pl-sm-1">
                <div class="form-group mb-2">
                  <input type="number" name="userphone" class="form-control form-control-sm rounded-0 shadow-none" required placeholder="Enter phone">
                </div>
               </div>
            </div>

            <div class="row">
               <div class="col-12 col-sm-6 pr-sm-1">
                <div class="form-group mb-2">
                  <input type="email" name="useremail" class="form-control form-control-sm rounded-0 shadow-none" required placeholder="Enter email">
                </div>
               </div>
               <div class="col-12 col-sm-6 pl-sm-1">
                <div class="form-group mb-2">
                  <input type="text" name="useraddress" class="form-control form-control-sm rounded-0 shadow-none" required placeholder="Present address">
                </div>
               </div>
            </div>

            <div class="form-group mb-2">
              <textarea name="userprofile" class="form-control form-control-sm rounded-0 shadow-none" required rows="2" placeholder="Profile information"></textarea>
            </div>
            
            <small class="text-danger">*School</small>
            <div class="row">
               <div class="col-12 col-sm-8 col-lg-4 pr-sm-1">
                <div class="form-group mb-2">
                  <input type="text" name="userschool" class="form-control form-control-sm rounded-0 shadow-none" required placeholder="School name">
                </div>
               </div>
               <div class="col-12 col-sm-4 col-lg-3 pl-sm-1">
                <div class="form-group mb-2">
                  <input type="text" name="userschoolgroup" class="form-control form-control-sm rounded-0 shadow-none" required placeholder="Group">
                </div>
               </div>
               <div class="col-12 col-sm-8 col-lg-3 pr-sm-1">
                <div class="form-group mb-2">
                  <input type="number" name="userschoolpassyear" class="form-control form-control-sm rounded-0 shadow-none" required placeholder="Passing year">
                </div>
               </div>
               <div class="col-12 col-sm-4 col-lg-2 pl-sm-1">
                <div class="form-group mb-2">
                  <input type="number" name="userschoolgrade" class="form-control form-control-sm rounded-0 shadow-none" required placeholder="Grade">
                </div>
               </div>
            </div>

            <small class="text-danger">*College</small>
            <div class="row">
               <div class="col-12 col-sm-8 col-lg-4 pr-sm-1">
                <div class="form-group mb-2">
                  <input type="text" name="usercollege" class="form-control form-control-sm rounded-0 shadow-none" required placeholder="College name">
                </div>
               </div>
               <div class="col-12 col-sm-4 col-lg-3 pl-sm-1">
                <div class="form-group mb-2">
                  <input type="text" name="usercollegegroup" class="form-control form-control-sm rounded-0 shadow-none" required placeholder="Group">
                </div>
               </div>
               <div class="col-12 col-sm-8 col-lg-3 pr-sm-1">
                <div class="form-group mb-2">
                  <input type="number" name="usercollegepassyear" class="form-control form-control-sm rounded-0 shadow-none" required placeholder="Passing year">
                </div>
               </div>
               <div class="col-12 col-sm-4 col-lg-2 pl-sm-1">
                <div class="form-group mb-2">
                  <input type="number" name="usercollegegrade" class="form-control form-control-sm rounded-0 shadow-none" required placeholder="Grade">
                </div>
               </div>
            </div>

            <small class="text-danger">*Varsity</small>
            <div class="row">
               <div class="col-12 col-sm-8 col-lg-4 pr-sm-1">
                <div class="form-group mb-2">
                  <input type="text" name="uservarsity" class="form-control form-control-sm rounded-0 shadow-none" required placeholder="Varsity name">
                </div>
               </div>
               <div class="col-12 col-sm-4 col-lg-3 pl-sm-1">
                <div class="form-group mb-2">
                  <input type="text" name="userdept" class="form-control form-control-sm rounded-0 shadow-none" required placeholder="Department">
                </div>
               </div>
               <div class="col-12 col-sm-8 col-lg-3 pr-sm-1">
                <div class="form-group mb-2">
                  <input type="number" name="uservarsitypasyear" class="form-control form-control-sm rounded-0 shadow-none" required placeholder="Passing year">
                </div>
               </div>
               <div class="col-12 col-sm-4 col-lg-2 pl-sm-1">
                <div class="form-group mb-2">
                  <input type="number" name="usercgpa" class="form-control form-control-sm rounded-0 shadow-none" required placeholder="CGPA">
                </div>
               </div>
            </div>

            <small class="text-danger">Skill</small>
            <div class="row">
              <div class="col-6 pr-1">
                <div class="form-group mb-2">
                  <input type="text" name="userskill1" class="form-control form-control-sm rounded-0 shadow-none" placeholder="Skill 1">
                </div>
              </div>
              <div class="col-6 pl-1">
                <div class="form-group mb-2">
                  <input type="text" name="userskill2" class="form-control form-control-sm rounded-0 shadow-none" placeholder="Skill 2">
                </div>
              </div>
              <div class="col-6 pr-1">
                <div class="form-group mb-2">
                  <input type="text" name="userskill3" class="form-control form-control-sm rounded-0 shadow-none" placeholder="Skill 3">
                </div>
              </div>
              <div class="col-6 pl-1">
                <div class="form-group mb-2">
                  <input type="text" name="userskill4" class="form-control form-control-sm rounded-0 shadow-none" placeholder="Skill 4">
                </div>
              </div>
              <div class="col-6 pr-1">
                <div class="form-group mb-2">
                  <input type="text" name="userskill5" class="form-control form-control-sm rounded-0 shadow-none" placeholder="Skill 5">
                </div>
              </div>
              <div class="col-6 pl-1">
                <div class="form-group mb-2">
                  <input type="text" name="userskill6" class="form-control form-control-sm rounded-0 shadow-none" placeholder="Skill 6">
                </div>
              </div>
            </div>

            <div class="form-group mb-2">
              <textarea name="permanentaddress" class="form-control form-control-sm rounded-0 shadow-none" required rows="2" placeholder="Permanent address"></textarea>
            </div>
            
            <button type="submit" name="createcv" class="btn btn-primary py-1 px-3 float-right rounded-0 shadow-none">Create Now</button>
          </form>


          </div>
        </div>
      </div>
    

    </div>
  </div>
    






    
  <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>