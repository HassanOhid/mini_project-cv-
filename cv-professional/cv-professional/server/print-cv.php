
<?php
    session_start();
    ob_start();

       $userName = "";
       $userPhone = "";
       $userEmail = "";
       $userAddress = "";
       $userProfile = "";

       $userSchool = "";
       $userSchoolgroup = "";
       $userSchoolpassyear = "";
       $userSchoolgrade = "";

       $userCollege = "";
       $userCollegegroup = "";
       $userCollegepassyear = "";
       $userCollegegrade = "";

       $userVarsity = "";
       $userDept = "";
       $userVarsitypasyear = "";
       $userCGPA = "";

       $userSkill1 = "";
       $userSkill2 = "";
       $userSkill3 = "";
       $userSkill4 = "";
       $userSkill5 = "";
       $userSkill6 = "";

       $PermanentAddress = "";

    if($_SESSION['userid']){
        $sessionId = $_SESSION['userid'];
        include('connect.php');
        $select_user = "SELECT * FROM information WHERE myid='$sessionId'";
        $result = mysqli_query($conn, $select_user);
        while ($row = mysqli_fetch_array($result)){
            $userName = $row['username'];
            $userPhone = $row['userphone'];
            $userEmail = $row['useremail'];
            $userAddress = $row['useraddress'];
            $userProfile = $row['userprofile'];
     
            $userSchool = $row['userschool'];
            $userSchoolgroup = $row['userschoolgroup'];
            $userSchoolpassyear = $row['userschoolpassyear'];
            $userSchoolgrade = $row['userschoolgrade'];
     
            $userCollege = $row['usercollege'];
            $userCollegegroup = $row['usercollegegroup'];
            $userCollegepassyear = $row['usercollegepassyear'];
            $userCollegegrade = $row['usercollegegrade'];
     
            $userVarsity = $row['uservarsity'];
            $userDept = $row['userdept'];
            $userVarsitypasyear = $row['uservarsitypasyear'];
            $userCGPA = $row['usercgpa'];
     
            $userSkill1 = $row['userskill1'];
            $userSkill2 = $row['userskill2'];
            $userSkill3 = $row['userskill3'];
            $userSkill4 = $row['userskill4'];
            $userSkill5 = $row['userskill5'];
            $userSkill6 = $row['userskill6'];

            $PermanentAddress = $row['permanentaddress'];
        }
    }else{
        header('location:  ../views/profile.php');
    }
?>