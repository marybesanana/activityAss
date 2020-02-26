<?php
    include_once ("function.php");
    
    $lastname = $_POST['lastname'];
    //echo $lastname, "\n";
    $firstname = $_POST['firstname'];
     //echo $firstname, "\n";
    $middlename = $_POST['middlename'];
    //echo $middlename, "\n";
    $address = $_POST['address'];
    //echo $address, "\n";
    $date = $_POST['dateofbirth']; // your date variable in  '2015-10-10 ' formate
    echo preg_match_all('/[<>]/',"");
    echo "DOB: ",date('m-d-Y',strtotime($date)), "<br>"; // return 10-10-2015
    $POB = $_POST['PlaceofBirth'];
    //echo $POB, "\n";
    $gender = $_POST['gender'];
    echo $gender, "\n";
    $guardian = $_POST['guardian'];
    //echo $guardian, "\n";
    $number = $_POST['contactnumber'];
   
    //echo substr($number, 0, 1), "<br>";
    $status = $_POST['civilstatus'];
     //echo $status, "\n";
    $year = $_POST['Year'];
    //echo $year, "\n";
    $course = $_POST['Course'];
    //echo $course, "\n";
    $sy = $_POST['schoolyear'];
    //echo $sy, "\n";
    $email = $_POST['email'];
    //echo $email, "\n";
    /* 1 */
    if (notEmp($firstname) && notEmp($lastname) && notEmp($middlename) && notEmp($address) && notEmp($POB) && notEmp($guardian) && notEmp($status) && notEmp($email)){
        echo "valid", "<br>";
    }
    else{
        echo "invalid", "<br>";
    }
    
    /* 2 */
    if (shouldnotNum($firstname) && shouldnotNum($lastname) && shouldnotNum($middlename) &&shouldnotNum($address) && shouldnotNum($POB) && shouldnotNum($guardian) && shouldnotNum($status) && shouldnotNum($email)){
        echo "valid", "<br>";
    }
    else{
        echo "invalid", "<br>";
    }
    /* 3 */
    if (notSpecialChar($firstname) && notSpecialChar($lastname) && notSpecialChar($middlename) && notSpecialChar($address) && notSpecialChar($POB) && notSpecialChar($guardian) && notSpecialChar($status) && notSpecialChar($sy) && notSpecialChar($email)){
        echo "valid", "<br>";
    }
    else{
        echo "invalid", "<br>";
    }
    /* 4 */
    if (moreThan2($lastname) && moreThan2($firstname)){
        echo "valid", "<br>";
    }
    else{
        echo "invalid", "<br>";
    }
    /* 5 */
    if (notags($lastname) && notags($firstname) && notags($middlename) && notags($address) && notags($POB) && notags($guardian) && notags($status) && notags($sy) && notags($email)){
       echo "valid", "<br>";
    }
    else{
        echo "invalid", "<br>"; 
    }
    /* 6 */
    if (emailFormat($email)){
        echo "valid", "<br>";
    }
    else{
        echo "Invalid", "<br>";
    }
    /* 7 */
    if (philpreffix($number)){
        echo "valid";
    }
    else{
        echo "invalid";
    }
    
?>