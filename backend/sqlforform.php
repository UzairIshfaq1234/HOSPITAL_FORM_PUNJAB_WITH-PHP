<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cnicdata = $_POST['cnicdata221'];
    $fullnamedata = $_POST['fullnamedata'];

    $selecthospital = $_POST['selecthospital121'];
    $selectrole = $_POST['selectrole'];

    $usernamedata = $_POST['usernamedata'];
    $passworddata = $_POST['passworddata'];

    $confirmpassword = $_POST['confirmpassword'];
    $contactnumberdata = $_POST['contactnumberdata'];

    $activedata = $_POST['activedata'];
    $noteuser = $_POST['noteuser'];


    //connection data

    $server_name = "localhost";
    $server_username = "root";
    $server_password = "";
    $active_database = "patient";

  

    if ($passworddata == $confirmpassword) {
        $conn = mysqli_connect($server_name, $server_username, $server_password, $active_database);
        if ($conn) {

            // $sqlinseartdata = "INSERT INTO `patientsrecords` (`Cnic`, `Full Name`, `Hospital`, `Role`, `User Name`, `Password`, `Contact Number`, `Status`, `Note`) VALUES (' $cnicdata10', '$fullnamedata', '$selecthospital121', '$selectrole', '$usernamedata', '$passworddata', '$contactnumberdata ', '$activedata', '$noteuser');";

            $sql="INSERT INTO `hopi` (`Cnic`, `Fullname`, `hospital`, `role`, `username`, `password`, `contactnumber`, `state`, `note`) VALUES ('$cnicdata','$fullnamedata','$selecthospital','$selectrole','$usernamedata','$passworddata','$contactnumberdata','$activedata','$noteuser');";

            $dataenterycheck = mysqli_query($conn, $sql);
            echo "The data was inserted successfully1!<br>";

            if ($dataenterycheck) {
                echo "The data was inserted successfully!<br>";
            } else {
                echo "The data was not inserted successfully because of this error ---> " . mysqli_error($conn);
            }
        } else {

            echo "
        server not connected!";
        }
    } else {
        echo "Password does not match!";
    }
}


?>