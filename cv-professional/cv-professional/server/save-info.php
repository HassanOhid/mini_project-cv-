

<?php
    $success = "";
    if(isset($_POST["createcv"])) {
        include ('connect.php');

       $myuserId = $_SESSION['userid'];
       $userName = $_POST['username'];
       $userPhone = $_POST['userphone'];
       $userEmail = $_POST['useremail'];
       $userAddress = $_POST['useraddress'];
       $userProfile = mysqli_real_escape_string($conn, $_POST['userprofile']);

       $userSchool = $_POST['userschool'];
       $userSchoolgroup = $_POST['userschoolgroup'];
       $userSchoolpassyear = $_POST['userschoolpassyear'];
       $userSchoolgrade = $_POST['userschoolgrade'];

       $userCollege = $_POST['usercollege'];
       $userCollegegroup = $_POST['usercollegegroup'];
       $userCollegepassyear = $_POST['usercollegepassyear'];
       $userCollegegrade = $_POST['usercollegegrade'];

       $userVarsity = $_POST['uservarsity'];
       $userDept = $_POST['userdept'];
       $userVarsitypasyear = $_POST['uservarsitypasyear'];
       $userCGPA = $_POST['usercgpa'];

       $userSkill1 = $_POST['userskill1'];
       $userSkill2 = $_POST['userskill2'];
       $userSkill3 = $_POST['userskill3'];
       $userSkill4 = $_POST['userskill4'];
       $userSkill5 = $_POST['userskill5'];
       $userSkill6 = $_POST['userskill6'];

       $PermanentAddress = $_POST['permanentaddress'];

       $inesrt = "INSERT INTO information ( myid, username, userphone, useremail, useraddress, userprofile, userschool, userschoolgroup, userschoolpassyear, userschoolgrade, usercollege, usercollegegroup, usercollegepassyear, usercollegegrade, uservarsity, userdept, uservarsitypasyear, usercgpa, userskill1, userskill2, userskill3, userskill4, userskill5, userskill6, PermanentAddress ) VALUES ('$myuserId', '$userName', '$userPhone', '$userEmail', '$userAddress', '$userProfile', '$userSchool', '$userSchoolgroup', '$userSchoolpassyear', '$userSchoolgrade', '$userCollege', '$userCollegegroup', '$userCollegepassyear', '$userCollegegrade', '$userVarsity', '$userDept', '$userVarsitypasyear', '$userCGPA', '$userSkill1', '$userSkill2', '$userSkill3', '$userSkill4', '$userSkill5', '$userSkill6', '$PermanentAddress' )";
        if ($conn->query($inesrt) === TRUE) {
            $success = "Your registration successfull";
            header('Location: ../views/print-cv.php');
            ob_flush();
        } else {
            echo "Error: ";
        }
		$conn->close();
    }
?>