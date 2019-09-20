<?php

include'db.php';

if(isset($_POST['registorButton'])) {

    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $fatherName = $_POST['fatherName'];
    $email = $_POST['email'];
    $mobileNumber = $_POST['mobileNumber'];
    $motherName = $_POST['motherName'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $nationlity = $_POST['nationlity'];
    $pin = $_POST['pin'];
    $Blood_Group = $_POST['Blood_Group'];
    $cat = $_POST['cat'];
    $address = $_POST['address'];
    $DOB = $_POST['DOB'];
    $sex = $_POST['sex'];
    $fQualification = $_POST['fQualification'];
    $mQualification = $_POST['mQualification'];
    $fOccupation = $_POST['fOccupation'];
    $mOccupation = $_POST['mOccupation'];
    $firstName1 = $_POST['firstName1'];
    $class1 = $_POST['class1'];
    $section1 = $_POST['section1'];
    $medium1 = $_POST['medium1'];
    $firstName2 = $_POST['firstName2'];
    $class2 = $_POST['class2'];
    $section2 = $_POST['section2'];
    $medium2 = $_POST['medium2'];
    $firstName3 = $_POST['firstName3'];
    $class3 = $_POST['class3'];
    $section3 = $_POST['section3'];
    $medium3 = $_POST['medium3'];
    $Saddress = $_POST['Saddress'];
    $photo = $_FILES['photo'];
    $sign = $_FILES['marksheet'];

    $sql = "INSERT INTO `students`(`first_name`, `middle_name`, `last_name`, 
                                `father_name`, `email`,`mobile`,
                                 `mother_name`, `city`, `state`, 
                                 `nationality`,`pin`, `blood_group`, 
                                 `category`, `complite_address`, `date_of_birth`,
                                        `sex`, `father_q`, `mother_q`, 
                                        `father_o`, `mother_o`,`name1`, 
                                        `class1`, `scection1`, `medium1`, 
                                        `name2`,`class2`, `section2`,
                                         `medium2`, `name3`, `class3`,
                                        `section3`, `medium3`, `lname_s_address`, 
                                        `upload_y_photo`,`upload_mrksheet`, `status`)
                                        VALUES ('$firstName','$middleName','$lastName',
                                        '$fatherName','$email', '$mobileNumber',
                                        '$motherName','$city','$state',
                                        '$nationlity', '$pin','$Blood_Group',
                                        '$cat','$address','$DOB','$sex',
              '$fQualification','$mQualification','$fOccupation','$mOccupation','$firstName1',
              '$class1','$section1','$medium1','$firstName2','$class2',
              '$section2','$medium2','$firstName3','$class3','$section3',
              '$medium3','$Saddress','','','');";

 /*   echo $firstName. "<br>" . $middleName. "<br>" . $lastName. "<br>" . $fatherName. "<br>" . $email . "<br>"
        . $mobileNumber. "<br>" . $motherName. "<br>" . $city . "<br>". $state. "<br>" . $nationlity . "<br>"
        .$pin. "<br>".$Blood_Group. "<br>".$cat. "<br>".$address. "<br>".$DOB. "<br>"
        .$sex. "<br>" .$fQualification. "<br>".$mQualification. "<br>".$fOccupation. "<br>".$mOccupation. "<br>".
        $firstName1."<br>" .$class1. "<br>".$section1. "<br>".$medium1."<br>".$firstName2. "<br>".
        $class2. "<br>" .$section2. "<br>".$medium2. "<br>".$firstName3."<br>".$class3. "<br>" .
        $section3."<br>".$medium3. "<br>" .$Saddress. "<br>".$photo."<br>".$sign;*/




    $result = mysqli_query($conn, $sql);

    if($result) {

        echo "<script> alert('Successfully Submitted'); location.href='../index3.php'</script>";
    }

    else{
        $a=mysqli_error($conn);
        echo $a;
       // echo "<script> alert('Failed TryAgain'); location.href='../admisstion.php'</script>";

    }


}else {

    echo "connection error";
}